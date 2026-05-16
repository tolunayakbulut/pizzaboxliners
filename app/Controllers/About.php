<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index(): string
    {
        $meta = [
            'title'       => 'About Yıldırım Ofset | Pizza Box Liners Manufacturer',
            'description' => 'Learn about Yıldırım Ofset, a packaging and printing manufacturer supplying pizza box liners and food packaging paper products for B2B customers.',
            'canonical'   => 'https://pizzaboxliners.net/about',
        ];

        $breadcrumbs = ['About Yıldırım Ofset' => null];

        return view('about/index', compact('meta', 'breadcrumbs'));
    }
}
