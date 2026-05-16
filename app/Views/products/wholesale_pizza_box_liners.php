<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="page-hero">
    <div class="container">
        <?= $this->include('partials/breadcrumb') ?>
        <h1 class="mt-3 mb-2">Wholesale Pizza Box Liners</h1>
        <p class="lead text-white-50">Bulk supply for restaurants, pizza chains, distributors, and international buyers</p>
    </div>
</div>

<section class="py-5">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <span class="section-label">Bulk &amp; Wholesale</span>
                <div class="divider"></div>
                <h2 class="section-title mb-4">Wholesale Pizza Box Liner Supply</h2>
                <p class="text-muted mb-3">
                    Yıldırım Ofset supplies <strong>wholesale pizza box liners</strong> for B2B buyers who need bulk quantities. Whether you are a packaging distributor, a pizza chain, or an importer, we can supply pizza box liners in the volumes you need.
                </p>
                <p class="text-muted mb-4">
                    We work directly with businesses — no retail, no small orders. Our focus is wholesale and bulk production for companies that need a reliable <a href="<?= base_url('products/pizza-box-liners') ?>">pizza box liner</a> supplier.
                </p>
                <ul class="list-unstyled mb-4">
                    <?php
                    $features = [
                        'Wholesale and bulk order focus',
                        'Supply for packaging distributors',
                        'International inquiries welcome',
                        'Direct manufacturer communication',
                        'Flexible quantities for B2B buyers',
                        'Custom sizes available on request',
                    ];
                    foreach ($features as $f): ?>
                    <li class="mb-2">
                        <i class="bi bi-check-circle-fill text-danger me-2"></i><?= esc($f) ?>
                    </li>
                    <?php endforeach; ?>
                </ul>
                <a href="<?= base_url('contact') ?>" class="btn btn-danger btn-lg me-2">Request Pricing</a>
                <a href="https://wa.me/905325572057?text=Hello%20Yildirim%20Ofset,%20I%20would%20like%20to%20get%20a%20quote%20for%20wholesale%20pizza%20box%20liners."
                   class="btn btn-success btn-lg" target="_blank" rel="noopener">
                    <i class="bi bi-whatsapp me-1"></i> WhatsApp
                </a>
            </div>
            <div class="col-lg-6">
                <div class="product-img-placeholder" style="height:360px;">
                    <div class="text-center">
                        <i class="bi bi-image" style="font-size:3rem; color:#ccc;"></i>
                        <p class="mt-2 mb-0 small" style="color:#aaa;">wholesale-pizza-box-liners.webp</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-soft">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-label">Who We Supply</span>
            <div class="divider divider-center"></div>
            <h2 class="section-title">Wholesale Buyers We Work With</h2>
        </div>
        <div class="row g-4">
            <?php
            $buyers = [
                ['bi-shop',     'Pizza Restaurants',           'Restaurants that need pizza box liners in regular bulk quantities for their daily operations.'],
                ['bi-buildings','Pizza Chains',                 'Multi-location pizza chains that need consistent wholesale supply across all their branches.'],
                ['bi-box2',     'Packaging Distributors',      'Companies that distribute food packaging products and need reliable wholesale supply.'],
                ['bi-globe',    'International Importers',     'Import companies looking for a manufacturer-direct pizza box liner supplier.'],
                ['bi-truck',    'Takeaway Packaging Suppliers','Businesses that supply takeaway and delivery packaging to the food service sector.'],
                ['bi-building-check','Food Service Companies', 'Catering and food service businesses that use pizza box liners as part of their operations.'],
            ];
            foreach ($buyers as $b): ?>
            <div class="col-md-6 col-lg-4">
                <div class="feature-card">
                    <div class="feature-icon"><i class="bi <?= $b[0] ?>"></i></div>
                    <h6 class="fw-bold mb-2"><?= $b[1] ?></h6>
                    <p class="text-muted small mb-0"><?= $b[2] ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center">
                <span class="section-label">How to Order</span>
                <div class="divider divider-center"></div>
                <h2 class="section-title mb-4">Requesting Wholesale Pizza Box Liners</h2>
                <p class="text-muted mb-4">
                    To get wholesale pricing and product details, contact us directly. Include your country, estimated order quantity, and required size so we can give you relevant information.
                </p>
                <div class="row g-3 text-start mb-4">
                    <?php
                    $steps = [
                        ['1', 'Contact Us',       'Send your inquiry by WhatsApp or email with your requirements.'],
                        ['2', 'Share Requirements','Tell us your country, quantity, and required pizza box liner dimensions.'],
                        ['3', 'Get Details',       'We will provide pricing, production details, and next steps.'],
                    ];
                    foreach ($steps as $s): ?>
                    <div class="col-12">
                        <div class="d-flex gap-3 align-items-start p-3 bg-soft rounded-3">
                            <div class="flex-shrink-0 fw-bold text-danger" style="font-size:1.5rem; line-height:1;"><?= $s[0] ?></div>
                            <div>
                                <div class="fw-semibold"><?= $s[1] ?></div>
                                <div class="text-muted small"><?= $s[2] ?></div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <a href="<?= base_url('contact') ?>" class="btn btn-danger btn-lg me-3">Send Wholesale Inquiry</a>
                <a href="<?= base_url('blog/wholesale-pizza-box-liners-guide') ?>" class="btn btn-outline-secondary btn-lg">Wholesale Buying Guide</a>
            </div>
        </div>
    </div>
</section>

<?php $cta_title = 'Ready to Order Wholesale Pizza Box Liners?'; $cta_text = 'Contact Yıldırım Ofset for bulk order pricing and international supply details.'; ?>
<?= $this->include('partials/cta_section') ?>

<?= $this->endSection() ?>
