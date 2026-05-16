<?php

namespace App\Models;

use CodeIgniter\Model;

class InquiryModel extends Model
{
    protected $table         = 'inquiries';
    protected $allowedFields = ['name', 'company', 'country', 'email', 'phone', 'product', 'quantity', 'message'];
    protected $useTimestamps = true;

    // Basic input validation rules (also enforced at controller level)
    protected $validationRules = [
        'name'    => 'required|min_length[2]|max_length[100]',
        'country' => 'required|max_length[100]',
        'email'   => 'required|valid_email|max_length[150]',
        'message' => 'required|min_length[10]|max_length[3000]',
    ];
}
