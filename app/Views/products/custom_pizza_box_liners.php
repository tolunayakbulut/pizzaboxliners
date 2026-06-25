<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="page-hero">
    <div class="container">
        <?= $this->include('partials/breadcrumb') ?>
        <h1 class="mt-3 mb-2">Custom Pizza Box Liners</h1>
        <p class="lead text-white-50">Custom sizes and bulk production for specific packaging requirements</p>
    </div>
</div>

<section class="py-5">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <span class="section-label">Custom Production</span>
                <div class="divider"></div>
                <h2 class="section-title mb-4">Custom Pizza Box Liners for Your Needs</h2>
                <p class="text-muted mb-3">
                    Not every pizza box is the same size. Yıldırım Ofset can manufacture <strong>custom pizza box liners</strong> according to your packaging requirements. Whether you need liners for small, medium, or large pizza boxes, we can discuss custom production based on your order.
                </p>
                <p class="text-muted mb-4">
                    We work with pizza restaurants, food packaging distributors, pizza chains, and importers who need pizza box liners in specific dimensions and bulk quantities.
                </p>
                <ul class="list-unstyled mb-4">
                    <?php
                    $points = [
                        'Custom sizes for different pizza box dimensions',
                        'Bulk production for B2B buyers',
                        'Direct manufacturer communication',
                        'Export and international supply available',
                        'Flexible for different packaging formats',
                    ];
                    foreach ($points as $p): ?>
                    <li class="mb-2">
                        <i class="bi bi-check-circle-fill text-danger me-2"></i><?= esc($p) ?>
                    </li>
                    <?php endforeach; ?>
                </ul>
                <a href="<?= base_url('contact') ?>" class="btn btn-danger btn-lg">Request Custom Quote</a>
            </div>
            <div class="col-lg-6">
                <img src="<?= base_url('assets/images/pizza-box-liners.webp') ?>"
                     alt="Custom pizza box liners manufactured by Yıldırım Ofset"
                     class="img-fluid rounded-3"
                     style="height:340px; width:100%; object-fit:cover;"
                     loading="lazy">
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-soft">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-label">Why Custom</span>
            <div class="divider divider-center"></div>
            <h2 class="section-title">Why Order Custom-Size Pizza Box Liners?</h2>
        </div>
        <div class="row g-4">
            <?php
            $reasons = [
                ['bi-rulers',        'Exact Fit',               'Standard sizes may not fit every pizza box. Custom production ensures your liners fit perfectly.'],
                ['bi-sliders',       'Flexible Specifications',  'Discuss your specific requirements directly with the manufacturer.'],
                ['bi-truck-flatbed', 'Bulk Quantities',          'Custom orders are available for bulk and wholesale quantities — not small retail orders.'],
                ['bi-globe',         'Export Friendly',          'International buyers can order custom pizza box liners for export and distribution.'],
            ];
            foreach ($reasons as $r): ?>
            <div class="col-md-6">
                <div class="feature-card d-flex gap-4 align-items-start">
                    <div class="feature-icon flex-shrink-0"><i class="bi <?= $r[0] ?>"></i></div>
                    <div>
                        <h6 class="fw-bold mb-2"><?= $r[1] ?></h6>
                        <p class="text-muted small mb-0"><?= $r[2] ?></p>
                    </div>
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
                <span class="section-label">Get Started</span>
                <div class="divider divider-center"></div>
                <h2 class="section-title mb-4">How to Order Custom Pizza Box Liners</h2>
                <p class="text-muted mb-4">
                    To discuss custom production, contact us and share your requirements. We will review your specifications and respond with the relevant details.
                </p>
                <p class="text-muted mb-4">
                    Please avoid any unverified technical claims — we will confirm exact production specifications directly in our communication.
                </p>
                <a href="<?= base_url('contact') ?>" class="btn btn-danger btn-lg me-2">Send Custom Inquiry</a>
                <a href="<?= base_url('blog/how-to-choose-pizza-box-liner-size') ?>" class="btn btn-outline-secondary btn-lg">Sizing Guide</a>
            </div>
        </div>
    </div>
</section>

<?php $cta_title = 'Need Custom Pizza Box Liners?'; $cta_text = 'Contact Yıldırım Ofset to discuss custom sizes, bulk production, and export options.'; ?>
<?= $this->include('partials/cta_section') ?>

<?= $this->endSection() ?>
