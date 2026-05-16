<?php

namespace App\Controllers;

class Applications extends BaseController
{
    public function index(): string
    {
        $meta = [
            'title'       => 'Pizza Box Liner Applications | Industries We Serve',
            'description' => 'Yıldırım Ofset supplies pizza box liners for pizza restaurants, pizza chains, food packaging distributors, wholesalers, and catering companies.',
            'canonical'   => 'https://pizzaboxliners.net/applications',
        ];

        $breadcrumbs = ['Applications' => null];

        return view('applications/index', compact('meta', 'breadcrumbs'));
    }

    public function pizzaRestaurants(): string
    {
        $meta = [
            'title'       => 'Pizza Box Liners for Pizza Restaurants | Wholesale Supply',
            'description' => 'Wholesale pizza box liners for pizza restaurants. Yıldırım Ofset manufactures pizza box liners in bulk for restaurant and takeaway operations.',
            'canonical'   => 'https://pizzaboxliners.net/applications/pizza-restaurants',
        ];

        $breadcrumbs = [
            'Applications'      => base_url('applications'),
            'Pizza Restaurants' => null,
        ];

        return view('applications/pizza_restaurants', compact('meta', 'breadcrumbs'));
    }

    public function pizzaChains(): string
    {
        $meta = [
            'title'       => 'Pizza Box Liners for Pizza Chains | Bulk Supply',
            'description' => 'Pizza box liners for pizza chains. Yıldırım Ofset supplies bulk pizza box liners to pizza chain businesses across multiple locations.',
            'canonical'   => 'https://pizzaboxliners.net/applications/pizza-chains',
        ];

        $breadcrumbs = [
            'Applications' => base_url('applications'),
            'Pizza Chains' => null,
        ];

        return view('applications/pizza_chains', compact('meta', 'breadcrumbs'));
    }

    public function foodPackagingDistributors(): string
    {
        $meta = [
            'title'       => 'Pizza Box Liners for Food Packaging Distributors | Wholesale',
            'description' => 'Wholesale pizza box liners for food packaging distributors. Yıldırım Ofset manufactures bulk pizza box liners for packaging distributors and wholesalers.',
            'canonical'   => 'https://pizzaboxliners.net/applications/food-packaging-distributors',
        ];

        $breadcrumbs = [
            'Applications'               => base_url('applications'),
            'Food Packaging Distributors' => null,
        ];

        return view('applications/food_packaging_distributors', compact('meta', 'breadcrumbs'));
    }
}
