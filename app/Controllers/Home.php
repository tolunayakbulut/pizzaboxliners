<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $meta = [
            'title'          => 'Pizza Box Liners Manufacturer | Wholesale Pizza Box Liners',
            'description'    => 'Yıldırım Ofset manufactures wholesale pizza box liners for restaurants, pizza chains, distributors, and food packaging suppliers. Contact us for bulk orders and custom sizes.',
            'canonical'      => 'https://pizzaboxliners.net/',
            'og_title'       => 'Pizza Box Liners Manufacturer | Wholesale Pizza Box Liners',
            'og_description' => 'Wholesale pizza box liners for restaurants, pizza chains, food packaging distributors, and importers.',
        ];

        $schema = json_encode([
            '@context' => 'https://schema.org',
            '@type'    => 'WebSite',
            'name'     => 'Pizza Box Liners by Yıldırım Ofset',
            'url'      => 'https://pizzaboxliners.net',
        ], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

        return view('home/index', compact('meta', 'schema'));
    }
}
