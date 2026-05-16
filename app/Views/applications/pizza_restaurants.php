<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="page-hero">
    <div class="container">
        <?= $this->include('partials/breadcrumb') ?>
        <h1 class="mt-3 mb-2">Pizza Box Liners for Pizza Restaurants</h1>
        <p class="lead text-white-50">Wholesale pizza box liner supply for independent and multi-location restaurants</p>
    </div>
</div>

<section class="py-5">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <span class="section-label">For Restaurants</span>
                <div class="divider"></div>
                <h2 class="section-title mb-4">Wholesale Pizza Box Liners for Restaurants</h2>
                <p class="text-muted mb-3">
                    Pizza restaurants that use pizza boxes for takeaway and delivery orders often need <a href="<?= base_url('products/pizza-box-liners') ?>">pizza box liners</a> in consistent bulk quantities. Yıldırım Ofset supplies wholesale pizza box liners for restaurant operations that need a reliable source.
                </p>
                <p class="text-muted mb-4">
                    Whether you operate a single location or multiple branches, we can discuss bulk supply options to meet your regular packaging needs.
                </p>
                <ul class="list-unstyled mb-4">
                    <?php
                    $points = [
                        'Bulk quantities for regular restaurant operations',
                        'Consistent supply for high-volume pizza businesses',
                        'Custom sizes for specific pizza box dimensions',
                        'Direct manufacturer — no middlemen',
                        'International and export inquiries welcome',
                    ];
                    foreach ($points as $p): ?>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-danger me-2"></i><?= esc($p) ?></li>
                    <?php endforeach; ?>
                </ul>
                <a href="<?= base_url('contact') ?>" class="btn btn-danger me-2">Request a Quote</a>
                <a href="<?= base_url('products/wholesale-pizza-box-liners') ?>" class="btn btn-outline-secondary">Wholesale Details</a>
            </div>
            <div class="col-lg-6">
                <div class="product-img-placeholder" style="height:340px;">
                    <div class="text-center"><i class="bi bi-image" style="font-size:3rem; color:#ccc;"></i>
                        <p class="mt-2 mb-0 small" style="color:#aaa;">pizza-box-liners-for-restaurants.webp</p></div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $cta_title = 'Need Pizza Box Liners for Your Restaurant?'; $cta_text = 'Contact Yıldırım Ofset for bulk supply and wholesale pricing.'; ?>
<?= $this->include('partials/cta_section') ?>

<?= $this->endSection() ?>
