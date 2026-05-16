<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="page-hero">
    <div class="container">
        <?= $this->include('partials/breadcrumb') ?>
        <span class="hero-badge mt-3 d-inline-block">Benefits</span>
        <h1 class="mt-2 mb-2">Why Use Pizza Box Liners for Pizza Delivery?</h1>
        <p class="lead text-white-50">Key benefits of paper liners for pizza boxes in restaurant and delivery operations</p>
    </div>
</div>

<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">

                <div class="product-img-placeholder mb-5">
                    <div class="text-center">
                        <i class="bi bi-image" style="font-size:3rem; color:#ccc;"></i>
                        <p class="mt-2 mb-0 small" style="color:#aaa;">pizza-box-liner-paper.webp</p>
                    </div>
                </div>

                <h2>The Role of Pizza Box Liners in Delivery Packaging</h2>
                <p>
                    Pizza delivery businesses rely on packaging that keeps the product in the best possible condition from the oven to the customer. <a href="<?= base_url('products/pizza-box-liners') ?>">Pizza box liners</a> are one of the simplest and most practical tools available for improving the delivery packaging experience.
                </p>

                <h2 class="mt-4">Key Benefits of Using Pizza Box Liners</h2>

                <div class="row g-3 my-3">
                    <?php
                    $benefits = [
                        ['bi-shield-check',  'Cleaner Surface',       'Liners provide a clean layer between the pizza and the box, reducing direct contact with box material during delivery.'],
                        ['bi-star',          'Better Presentation',   'When the box is opened, a liner gives a more professional and well-presented look to the product.'],
                        ['bi-truck',         'Delivery-Ready',        'Designed for use in takeaway and delivery operations where consistent packaging quality matters.'],
                        ['bi-building',      'Restaurant Operations', 'Easy to use in high-volume restaurant and chain operations without slowing down the packaging process.'],
                        ['bi-rulers',        'Flexible Sizing',       'Available in different sizes and formats, including custom dimensions for specific pizza box measurements.'],
                        ['bi-truck-flatbed', 'Bulk Purchase',         'Can be ordered in wholesale quantities, making them cost-effective for restaurants and distributors.'],
                    ];
                    foreach ($benefits as $b): ?>
                    <div class="col-sm-6">
                        <div class="feature-card h-100">
                            <div class="feature-icon" style="width:38px;height:38px;font-size:1rem;"><i class="bi <?= $b[0] ?>"></i></div>
                            <h6 class="fw-bold mb-1 mt-2"><?= $b[1] ?></h6>
                            <p class="text-muted small mb-0"><?= $b[2] ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

                <h2 class="mt-4">Who Benefits Most from Pizza Box Liners?</h2>
                <p>
                    Pizza box liners are particularly useful for:
                </p>
                <ul>
                    <li><strong>Pizza delivery restaurants</strong> that process a high volume of orders daily</li>
                    <li><strong>Pizza chains</strong> that want consistent packaging quality across all locations</li>
                    <li><strong>Takeaway packaging suppliers</strong> who supply multiple food businesses</li>
                    <li><strong>Food packaging distributors</strong> looking for practical liner solutions to offer their clients</li>
                </ul>

                <h2 class="mt-4">Wholesale Supply for Pizza Box Liners</h2>
                <p>
                    For businesses that need pizza box liners regularly, ordering in bulk from a wholesale manufacturer is the most efficient approach. <a href="<?= base_url('products/wholesale-pizza-box-liners') ?>">Wholesale pizza box liners</a> reduce per-unit costs and ensure a consistent supply for ongoing operations.
                </p>
                <p>
                    Yıldırım Ofset manufactures pizza box liners for B2B buyers. Contact us to discuss bulk supply options and custom sizes for your packaging needs.
                </p>

                <div class="p-4 bg-soft rounded-3 border-start border-4 border-danger mt-4">
                    <h5 class="fw-bold mb-2">Order Pizza Box Liners in Bulk</h5>
                    <p class="text-muted mb-3">Contact Yıldırım Ofset for wholesale pizza box liner pricing and production details.</p>
                    <a href="<?= base_url('contact') ?>" class="btn btn-danger me-2">Get a Quote</a>
                    <a href="<?= base_url('products/wholesale-pizza-box-liners') ?>" class="btn btn-outline-secondary">Wholesale Options</a>
                </div>

            </div>
        </div>
    </div>
</section>

<?= $this->include('partials/cta_section') ?>

<?= $this->endSection() ?>
