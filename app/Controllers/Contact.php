<?php

namespace App\Controllers;

use App\Models\InquiryModel;
use CodeIgniter\HTTP\RedirectResponse;

class Contact extends BaseController
{
    public function index(): string
    {
        $meta = [
            'title'       => 'Contact Yıldırım Ofset | Pizza Box Liners Wholesale Inquiry',
            'description' => 'Contact Yıldırım Ofset for wholesale pizza box liners, custom sizes, bulk orders, and export inquiries. Reach us by WhatsApp or email.',
            'canonical'   => 'https://pizzaboxliners.net/contact',
        ];

        $breadcrumbs = ['Contact' => null];

        return view('contact/index', compact('meta', 'breadcrumbs'));
    }

    public function submit(): RedirectResponse
    {
        // CSRF is handled by CI4 automatically for POST requests
        $rules = [
            'name'        => 'required|min_length[2]|max_length[100]',
            'company'     => 'permit_empty|max_length[150]',
            'country'     => 'required|max_length[100]',
            'email'       => 'required|valid_email|max_length[150]',
            'phone'       => 'permit_empty|max_length[50]',
            'product'     => 'permit_empty|max_length[200]',
            'quantity'    => 'permit_empty|max_length[100]',
            'message'     => 'required|min_length[10]|max_length[3000]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'name'     => $this->request->getPost('name'),
            'company'  => $this->request->getPost('company'),
            'country'  => $this->request->getPost('country'),
            'email'    => $this->request->getPost('email'),
            'phone'    => $this->request->getPost('phone'),
            'product'  => $this->request->getPost('product'),
            'quantity' => $this->request->getPost('quantity'),
            'message'  => $this->request->getPost('message'),
        ];

        // Save to database
        $model = new InquiryModel();
        $model->insert($data);

        // Send email notification
        $this->sendEmailNotification($data);

        return redirect()->to(base_url('contact'))->with('success', 'Your inquiry has been sent. We will contact you shortly.');
    }

    private function sendEmailNotification(array $data): void
    {
        $email = \Config\Services::email();

        $email->setFrom('info@yildirimofset.com.tr', 'Pizza Box Liners');
        $email->setTo('info@yildirimofset.com.tr');
        $email->setReplyTo($data['email'], $data['name']);
        $email->setSubject('New Pizza Box Liners Wholesale Inquiry from ' . $data['name']);

        $body  = "New wholesale inquiry received:\n\n";
        $body .= "Name:     {$data['name']}\n";
        $body .= "Company:  {$data['company']}\n";
        $body .= "Country:  {$data['country']}\n";
        $body .= "Email:    {$data['email']}\n";
        $body .= "Phone:    {$data['phone']}\n";
        $body .= "Product:  {$data['product']}\n";
        $body .= "Quantity: {$data['quantity']}\n\n";
        $body .= "Message:\n{$data['message']}\n";

        $email->setMessage($body);

        if (!$email->send()) {
            log_message('error', 'Contact form email failed: ' . $email->printDebugger(['headers']));
        }
    }
}
