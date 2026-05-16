<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Response;

class Sitemap extends BaseController
{
    public function index(): Response
    {
        $urls = [
            ['loc' => 'https://pizzaboxliners.net/',                                          'priority' => '1.0', 'changefreq' => 'weekly'],
            ['loc' => 'https://pizzaboxliners.net/products/pizza-box-liners',                 'priority' => '0.9', 'changefreq' => 'monthly'],
            ['loc' => 'https://pizzaboxliners.net/products/wholesale-pizza-box-liners',       'priority' => '0.9', 'changefreq' => 'monthly'],
            ['loc' => 'https://pizzaboxliners.net/products/custom-pizza-box-liners',          'priority' => '0.8', 'changefreq' => 'monthly'],
            ['loc' => 'https://pizzaboxliners.net/products',                                  'priority' => '0.7', 'changefreq' => 'monthly'],
            ['loc' => 'https://pizzaboxliners.net/applications',                              'priority' => '0.7', 'changefreq' => 'monthly'],
            ['loc' => 'https://pizzaboxliners.net/applications/pizza-restaurants',            'priority' => '0.6', 'changefreq' => 'monthly'],
            ['loc' => 'https://pizzaboxliners.net/applications/pizza-chains',                 'priority' => '0.6', 'changefreq' => 'monthly'],
            ['loc' => 'https://pizzaboxliners.net/applications/food-packaging-distributors',  'priority' => '0.6', 'changefreq' => 'monthly'],
            ['loc' => 'https://pizzaboxliners.net/blog',                                      'priority' => '0.7', 'changefreq' => 'weekly'],
            ['loc' => 'https://pizzaboxliners.net/blog/what-are-pizza-box-liners',            'priority' => '0.6', 'changefreq' => 'monthly'],
            ['loc' => 'https://pizzaboxliners.net/blog/why-use-pizza-box-liners',             'priority' => '0.6', 'changefreq' => 'monthly'],
            ['loc' => 'https://pizzaboxliners.net/blog/pizza-box-liners-vs-pizza-box-inserts','priority' => '0.6', 'changefreq' => 'monthly'],
            ['loc' => 'https://pizzaboxliners.net/blog/how-to-choose-pizza-box-liner-size',   'priority' => '0.6', 'changefreq' => 'monthly'],
            ['loc' => 'https://pizzaboxliners.net/blog/wholesale-pizza-box-liners-guide',     'priority' => '0.6', 'changefreq' => 'monthly'],
            ['loc' => 'https://pizzaboxliners.net/about',                                     'priority' => '0.5', 'changefreq' => 'monthly'],
            ['loc' => 'https://pizzaboxliners.net/contact',                                   'priority' => '0.5', 'changefreq' => 'monthly'],
        ];

        $xml  = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

        foreach ($urls as $url) {
            $xml .= "  <url>\n";
            $xml .= "    <loc>{$url['loc']}</loc>\n";
            $xml .= "    <changefreq>{$url['changefreq']}</changefreq>\n";
            $xml .= "    <priority>{$url['priority']}</priority>\n";
            $xml .= "  </url>\n";
        }

        $xml .= '</urlset>';

        return $this->response
            ->setContentType('application/xml')
            ->setBody($xml);
    }
}
