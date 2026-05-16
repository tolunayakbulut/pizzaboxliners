<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Home
$routes->get('/', 'Home::index');

// About
$routes->get('about', 'About::index');

// Products
$routes->get('products', 'Products::index');
$routes->get('products/pizza-box-liners', 'Products::pizzaBoxLiners');
$routes->get('products/custom-pizza-box-liners', 'Products::customPizzaBoxLiners');
$routes->get('products/wholesale-pizza-box-liners', 'Products::wholesalePizzaBoxLiners');

// Applications
$routes->get('applications', 'Applications::index');
$routes->get('applications/pizza-restaurants', 'Applications::pizzaRestaurants');
$routes->get('applications/pizza-chains', 'Applications::pizzaChains');
$routes->get('applications/food-packaging-distributors', 'Applications::foodPackagingDistributors');

// Blog
$routes->get('blog', 'Blog::index');
$routes->get('blog/what-are-pizza-box-liners', 'Blog::whatArePizzaBoxLiners');
$routes->get('blog/why-use-pizza-box-liners', 'Blog::whyUsePizzaBoxLiners');
$routes->get('blog/pizza-box-liners-vs-pizza-box-inserts', 'Blog::pizzaBoxLinersVsInserts');
$routes->get('blog/how-to-choose-pizza-box-liner-size', 'Blog::howToChooseSize');
$routes->get('blog/wholesale-pizza-box-liners-guide', 'Blog::wholesaleGuide');

// Contact
$routes->get('contact', 'Contact::index');
$routes->post('contact/submit', 'Contact::submit');

// Sitemap
$routes->get('sitemap.xml', 'Sitemap::index');
