<?php

namespace App\Controllers;

class Products extends BaseController
{
    public function index(): string
    {
        $meta = [
            'title'       => 'Pizza Box Liner Products | Wholesale & Custom Sizes',
            'description' => 'Browse pizza box liner products from Yıldırım Ofset. Wholesale pizza box liners, custom sizes, and bulk supply for restaurants, chains, and distributors.',
            'canonical'   => 'https://pizzaboxliners.net/products',
        ];

        $breadcrumbs = ['Products' => null];

        return view('products/index', compact('meta', 'breadcrumbs'));
    }

    public function pizzaBoxLiners(): string
    {
        $meta = [
            'title'          => 'Pizza Box Liners | Wholesale Pizza Box Liner Manufacturer',
            'description'    => 'Buy pizza box liners in bulk from Yıldırım Ofset. We manufacture pizza box liner paper for restaurants, pizza chains, packaging distributors, and wholesale suppliers.',
            'canonical'      => 'https://pizzaboxliners.net/products/pizza-box-liners',
            'og_title'       => 'Pizza Box Liners | Wholesale Manufacturer',
            'og_description' => 'Wholesale pizza box liners manufactured by Yıldırım Ofset for restaurants, chains, and distributors.',
        ];

        $breadcrumbs = [
            'Products'        => base_url('products'),
            'Pizza Box Liners' => null,
        ];

        $schema = json_encode([
            '@context'    => 'https://schema.org',
            '@type'       => 'Product',
            'name'        => 'Pizza Box Liners',
            'description' => 'Wholesale pizza box liners manufactured for restaurants, pizza chains, packaging distributors, and food packaging suppliers.',
            'brand'       => ['@type' => 'Brand', 'name' => 'Yıldırım Ofset'],
            'category'    => 'Food Packaging',
            'offers'      => [
                '@type'        => 'Offer',
                'url'          => $meta['canonical'],
                'availability' => 'https://schema.org/InStock',
            ],
        ], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

        return view('products/pizza_box_liners', compact('meta', 'breadcrumbs', 'schema'));
    }

    public function customPizzaBoxLiners(): string
    {
        $meta = [
            'title'       => 'Custom Pizza Box Liners | Custom Size Pizza Box Liner Manufacturer',
            'description' => 'Order custom pizza box liners for your packaging needs. Yıldırım Ofset manufactures pizza box liners in bulk for restaurants, distributors, and pizza chains.',
            'canonical'   => 'https://pizzaboxliners.net/products/custom-pizza-box-liners',
        ];

        $breadcrumbs = [
            'Products'              => base_url('products'),
            'Custom Pizza Box Liners' => null,
        ];

        $schema = json_encode([
            '@context'    => 'https://schema.org',
            '@type'       => 'Product',
            'name'        => 'Custom Pizza Box Liners',
            'description' => 'Custom-size pizza box liners manufactured to specification for restaurants, distributors, and food packaging companies.',
            'brand'       => ['@type' => 'Brand', 'name' => 'Yıldırım Ofset'],
            'category'    => 'Food Packaging',
            'offers'      => [
                '@type'        => 'Offer',
                'url'          => $meta['canonical'],
                'availability' => 'https://schema.org/InStock',
            ],
        ], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

        return view('products/custom_pizza_box_liners', compact('meta', 'breadcrumbs', 'schema'));
    }

    public function wholesalePizzaBoxLiners(): string
    {
        $meta = [
            'title'       => 'Wholesale Pizza Box Liners | Bulk Pizza Box Liners Supplier',
            'description' => 'Yıldırım Ofset supplies wholesale pizza box liners for restaurants, pizza chains, distributors, and packaging companies. Contact us for bulk order pricing.',
            'canonical'   => 'https://pizzaboxliners.net/products/wholesale-pizza-box-liners',
        ];

        $breadcrumbs = [
            'Products'                  => base_url('products'),
            'Wholesale Pizza Box Liners' => null,
        ];

        $schema = json_encode([
            '@context'    => 'https://schema.org',
            '@type'       => 'Product',
            'name'        => 'Wholesale Pizza Box Liners',
            'description' => 'Bulk pizza box liners supplied wholesale to restaurants, pizza chains, distributors, and international buyers.',
            'brand'       => ['@type' => 'Brand', 'name' => 'Yıldırım Ofset'],
            'category'    => 'Food Packaging',
            'offers'      => [
                '@type'        => 'Offer',
                'url'          => $meta['canonical'],
                'availability' => 'https://schema.org/InStock',
            ],
        ], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

        return view('products/wholesale_pizza_box_liners', compact('meta', 'breadcrumbs', 'schema'));
    }
}
