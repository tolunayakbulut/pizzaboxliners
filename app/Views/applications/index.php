<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="page-hero">
    <div class="container">
        <?= $this->include('partials/breadcrumb') ?>
        <h1 class="mt-3 mb-2">Pizza Box Liner Applications</h1>
        <p class="lead text-white-50">Industries and businesses we supply with wholesale pizza box liners</p>
    </div>
</div>

<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-label">Industries Served</span>
            <div class="divider divider-center"></div>
            <h2 class="section-title">Who Uses Pizza Box Liners from Yıldırım Ofset?</h2>
            <p class="text-muted mt-3 mx-auto" style="max-width:600px;">
                We supply <a href="<?= base_url('products/pizza-box-liners') ?>">pizza box liners</a> to a wide range of businesses in the food packaging and food service sector. International inquiries are welcome.
            </p>
        </div>
        <div class="row g-4">
            <?php
            $apps = [
                [
                    'icon'    => 'bi-shop',
                    'title'   => 'Pizza Restaurants',
                    'url'     => base_url('applications/pizza-restaurants'),
                    'desc'    => 'Independent pizza restaurants that need pizza box liners in bulk for their daily operations.',
                ],
                [
                    'icon'    => 'bi-buildings',
                    'title'   => 'Pizza Chains',
                    'url'     => base_url('applications/pizza-chains'),
                    'desc'    => 'Multi-location pizza chains that need consistent wholesale supply across all their branches.',
                ],
                [
                    'icon'    => 'bi-box2',
                    'title'   => 'Food Packaging Distributors',
                    'url'     => base_url('applications/food-packaging-distributors'),
                    'desc'    => 'Companies that distribute food packaging materials to restaurants and food businesses.',
                ],
                [
                    'icon'    => 'bi-globe',
                    'title'   => 'Wholesalers &amp; Importers',
                    'url'     => base_url('applications'),
                    'desc'    => 'Packaging wholesalers and importers sourcing pizza box liners from manufacturer-direct sources.',
                ],
                [
                    'icon'    => 'bi-bag',
                    'title'   => 'Takeaway Packaging Suppliers',
                    'url'     => base_url('applications'),
                    'desc'    => 'Businesses that supply takeaway and delivery packaging to the food service sector.',
                ],
                [
                    'icon'    => 'bi-cup-hot',
                    'title'   => 'Catering Companies',
                    'url'     => base_url('applications'),
                    'desc'    => 'Catering businesses that use pizza box liners as part of their food service packaging.',
                ],
            ];
            foreach ($apps as $app): ?>
            <div class="col-md-6 col-lg-4">
                <div class="feature-card h-100">
                    <div class="feature-icon"><i class="bi <?= $app['icon'] ?>"></i></div>
                    <h5 class="fw-bold mb-2">
                        <a href="<?= $app['url'] ?>" class="text-dark text-decoration-none"><?= $app['title'] ?></a>
                    </h5>
                    <p class="text-muted small mb-3"><?= $app['desc'] ?></p>
                    <a href="<?= $app['url'] ?>" class="btn btn-sm btn-outline-danger">Learn More</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?= $this->include('partials/cta_section') ?>

<?= $this->endSection() ?>
