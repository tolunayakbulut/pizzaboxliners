<?php

namespace App\Controllers;

class Blog extends BaseController
{
    public function index(): string
    {
        $meta = [
            'title'       => 'Pizza Box Liners Blog | Packaging Guides & Industry Articles',
            'description' => 'Read articles and guides about pizza box liners, wholesale packaging, and food packaging solutions from Yıldırım Ofset.',
            'canonical'   => 'https://pizzaboxliners.net/blog',
        ];

        $breadcrumbs = ['Blog' => null];

        $posts = $this->getAllPosts();

        return view('blog/index', compact('meta', 'breadcrumbs', 'posts'));
    }

    public function whatArePizzaBoxLiners(): string
    {
        $meta = [
            'title'       => 'What Are Pizza Box Liners? | Complete Guide',
            'description' => 'Learn what pizza box liners are, how they are used in pizza packaging, and why restaurants and distributors use them for cleaner food delivery.',
            'canonical'   => 'https://pizzaboxliners.net/blog/what-are-pizza-box-liners',
        ];

        $breadcrumbs = [
            'Blog'                    => base_url('blog'),
            'What Are Pizza Box Liners?' => null,
        ];

        return view('blog/what_are_pizza_box_liners', compact('meta', 'breadcrumbs'));
    }

    public function whyUsePizzaBoxLiners(): string
    {
        $meta = [
            'title'       => 'Why Use Pizza Box Liners for Pizza Delivery?',
            'description' => 'Discover why pizza restaurants and delivery businesses use pizza box liners. Learn the key benefits of paper liners for pizza boxes.',
            'canonical'   => 'https://pizzaboxliners.net/blog/why-use-pizza-box-liners',
        ];

        $breadcrumbs = [
            'Blog'                                 => base_url('blog'),
            'Why Use Pizza Box Liners for Delivery?' => null,
        ];

        return view('blog/why_use_pizza_box_liners', compact('meta', 'breadcrumbs'));
    }

    public function pizzaBoxLinersVsInserts(): string
    {
        $meta = [
            'title'       => 'Pizza Box Liners vs Pizza Box Inserts: What Is the Difference?',
            'description' => 'Understand the difference between pizza box liners and pizza box inserts. A clear comparison for restaurants, packaging buyers, and distributors.',
            'canonical'   => 'https://pizzaboxliners.net/blog/pizza-box-liners-vs-pizza-box-inserts',
        ];

        $breadcrumbs = [
            'Blog'                          => base_url('blog'),
            'Pizza Box Liners vs Inserts'   => null,
        ];

        return view('blog/pizza_box_liners_vs_inserts', compact('meta', 'breadcrumbs'));
    }

    public function howToChooseSize(): string
    {
        $meta = [
            'title'       => 'How to Choose the Right Pizza Box Liner Size',
            'description' => 'A practical guide on choosing the correct pizza box liner size for your packaging needs. Tips for restaurants, distributors, and wholesale buyers.',
            'canonical'   => 'https://pizzaboxliners.net/blog/how-to-choose-pizza-box-liner-size',
        ];

        $breadcrumbs = [
            'Blog'                              => base_url('blog'),
            'How to Choose Pizza Box Liner Size' => null,
        ];

        return view('blog/how_to_choose_size', compact('meta', 'breadcrumbs'));
    }

    public function wholesaleGuide(): string
    {
        $meta = [
            'title'       => 'Wholesale Pizza Box Liners: A Buying Guide for Distributors',
            'description' => 'A complete buying guide for wholesale pizza box liners. Learn what to look for when sourcing bulk pizza box liners as a distributor or packaging company.',
            'canonical'   => 'https://pizzaboxliners.net/blog/wholesale-pizza-box-liners-guide',
        ];

        $breadcrumbs = [
            'Blog'                     => base_url('blog'),
            'Wholesale Buying Guide'   => null,
        ];

        return view('blog/wholesale_guide', compact('meta', 'breadcrumbs'));
    }

    // Returns metadata for all blog posts (used in listing page)
    private function getAllPosts(): array
    {
        return [
            [
                'url'         => base_url('blog/what-are-pizza-box-liners'),
                'title'       => 'What Are Pizza Box Liners?',
                'excerpt'     => 'Learn what pizza box liners are, how they are used in pizza packaging, and why restaurants and distributors rely on them.',
                'tag'         => 'Guide',
                'image'       => 'pizza-box-liners.webp',
            ],
            [
                'url'         => base_url('blog/why-use-pizza-box-liners'),
                'title'       => 'Why Use Pizza Box Liners for Pizza Delivery?',
                'excerpt'     => 'Discover the key benefits of paper liners for pizza boxes and why delivery-focused businesses prefer them.',
                'tag'         => 'Benefits',
                'image'       => 'pizza-box-liner-paper.webp',
            ],
            [
                'url'         => base_url('blog/pizza-box-liners-vs-pizza-box-inserts'),
                'title'       => 'Pizza Box Liners vs Pizza Box Inserts: What Is the Difference?',
                'excerpt'     => 'A clear comparison between pizza box liners and pizza box inserts to help buyers choose the right product.',
                'tag'         => 'Comparison',
                'image'       => 'pizza-packaging-paper-liners.webp',
            ],
            [
                'url'         => base_url('blog/how-to-choose-pizza-box-liner-size'),
                'title'       => 'How to Choose the Right Pizza Box Liner Size',
                'excerpt'     => 'A practical guide on selecting the correct liner size for your pizza box dimensions and business needs.',
                'tag'         => 'Sizing Guide',
                'image'       => 'custom-pizza-box-liners.webp',
            ],
            [
                'url'         => base_url('blog/wholesale-pizza-box-liners-guide'),
                'title'       => 'Wholesale Pizza Box Liners: A Buying Guide for Distributors',
                'excerpt'     => 'A complete buying guide for packaging distributors and wholesale buyers sourcing pizza box liners in bulk.',
                'tag'         => 'B2B Guide',
                'image'       => 'wholesale-pizza-box-liners.webp',
            ],
        ];
    }
}
