<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="page-hero">
    <div class="container">
        <?= $this->include('partials/breadcrumb') ?>
        <h1 class="mt-3 mb-2">Pizza Box Liners for Food Packaging Distributors</h1>
        <p class="lead text-white-50">Wholesale pizza box liner supply for packaging distributors and wholesalers</p>
    </div>
</div>

<section class="py-5">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <span class="section-label">For Distributors</span>
                <div class="divider"></div>
                <h2 class="section-title mb-4">Wholesale Supply for Packaging Distributors</h2>
                <p class="text-muted mb-3">
                    Food packaging distributors who supply restaurants, pizza businesses, and food service companies need a reliable source for <a href="<?= base_url('products/wholesale-pizza-box-liners') ?>">wholesale pizza box liners</a>. Yıldırım Ofset manufactures pizza box liners in bulk, making us a suitable supplier for packaging distribution businesses.
                </p>
                <p class="text-muted mb-4">
                    We work directly with distributors and wholesalers to provide consistent supply. International and export inquiries are welcome.
                </p>
                <ul class="list-unstyled mb-4">
                    <?php
                    $points = [
                        'Manufacturer-direct wholesale pricing',
                        'Consistent bulk supply for distributor stock',
                        'Custom sizes for different pizza box dimensions',
                        'International and export orders accepted',
                        'Flexible quantities for B2B distributor needs',
                    ];
                    foreach ($points as $p): ?>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-danger me-2"></i><?= esc($p) ?></li>
                    <?php endforeach; ?>
                </ul>
                <a href="<?= base_url('contact') ?>" class="btn btn-danger me-2">Send Distributor Inquiry</a>
                <a href="<?= base_url('blog/wholesale-pizza-box-liners-guide') ?>" class="btn btn-outline-secondary">Wholesale Buying Guide</a>
            </div>
            <div class="col-lg-6">
                <div class="product-img-placeholder" style="height:340px;">
                    <div class="text-center"><i class="bi bi-image" style="font-size:3rem; color:#ccc;"></i>
                        <p class="mt-2 mb-0 small" style="color:#aaa;">pizza-packaging-paper-liners.webp</p></div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $cta_title = 'Sourcing Pizza Box Liners as a Distributor?'; $cta_text = 'Contact Yıldırım Ofset for wholesale distributor pricing and bulk supply options.'; ?>
<?= $this->include('partials/cta_section') ?>

<?= $this->endSection() ?>
