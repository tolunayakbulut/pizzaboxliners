<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<!-- Page Hero -->
<div class="page-hero">
    <div class="container">
        <?= $this->include('partials/breadcrumb') ?>
        <h1 class="mt-3 mb-2">Pizza Box Liners</h1>
        <p class="lead text-white-50">Wholesale pizza box liner manufacturer — Yıldırım Ofset</p>
    </div>
</div>

<!-- Intro -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <span class="section-label">Product Overview</span>
                <div class="divider"></div>
                <h2 class="section-title mb-4">What Are Pizza Box Liners?</h2>
                <p class="text-muted mb-3">
                    Pizza box liners are paper-based packaging materials placed inside pizza boxes to help protect the pizza, improve presentation, and support a cleaner delivery experience. They are widely used by pizza restaurants, pizza chains, food packaging distributors, and takeaway businesses.
                </p>
                <p class="text-muted mb-4">
                    At Yıldırım Ofset, we manufacture <strong>pizza box liners</strong> for B2B buyers who need reliable wholesale supply. Our production is designed for bulk orders and custom-size requirements.
                </p>
                <a href="<?= base_url('contact') ?>" class="btn btn-danger me-2">Request a Quote</a>
                <a href="<?= base_url('products/wholesale-pizza-box-liners') ?>" class="btn btn-outline-secondary">Wholesale Options</a>
            </div>
            <div class="col-lg-6">
                <img src="<?= base_url('assets/images/pizza-box-liners.webp') ?>"
                     alt="Pizza box liners manufactured by Yıldırım Ofset"
                     class="img-fluid rounded-3"
                     style="height:340px; width:100%; object-fit:cover;"
                     loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- Benefits -->
<section class="py-5 bg-soft">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-label">Product Benefits</span>
            <div class="divider divider-center"></div>
            <h2 class="section-title">Why Use Pizza Box Liners?</h2>
        </div>
        <div class="row g-4">
            <?php
            $benefits = [
                ['bi-box-seam',     'Cleaner Packaging',      'Helps separate pizza from the box surface, supporting a cleaner delivery experience.'],
                ['bi-star',         'Better Presentation',    'Supports better product presentation for restaurants and takeaway businesses.'],
                ['bi-truck',        'Delivery Ready',         'Suitable for takeaway and delivery packaging operations.'],
                ['bi-truck-flatbed','Wholesale Supply',       'Available for bulk and wholesale orders through B2B supply channels.'],
                ['bi-rulers',       'Custom Sizes',           'Can be produced in custom sizes to match different pizza box dimensions.'],
                ['bi-building',     'B2B Focus',              'Designed for pizza shops, pizza chains, distributors, and packaging companies.'],
            ];
            foreach ($benefits as $b): ?>
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

<!-- Who Uses -->
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="text-center mb-5">
                    <span class="section-label">Target Customers</span>
                    <div class="divider divider-center"></div>
                    <h2 class="section-title">Who Uses Pizza Box Liners?</h2>
                </div>
                <div class="row g-3">
                    <?php
                    $customers = [
                        'Pizza restaurants',
                        'Pizza delivery businesses',
                        'Pizza chains',
                        'Food packaging wholesalers',
                        'Packaging distributors',
                        'Catering suppliers',
                        'Takeaway packaging companies',
                        'International importers',
                    ];
                    foreach ($customers as $c): ?>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center gap-2 p-3 bg-soft rounded-3">
                            <i class="bi bi-check-circle-fill text-danger flex-shrink-0"></i>
                            <span class="fw-medium small"><?= esc($c) ?></span>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Wholesale Focus -->
<section class="py-5 bg-soft">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <span class="section-label">Wholesale Production</span>
                <div class="divider divider-center"></div>
                <h2 class="section-title mb-4">B2B and Wholesale Supply</h2>
                <p class="text-muted mb-3">
                    Yıldırım Ofset supplies <a href="<?= base_url('products/pizza-box-liners') ?>">pizza box liners</a> for B2B and wholesale buyers. We focus on wholesale and bulk production — retail sales are not our main focus.
                </p>
                <blockquote class="blockquote p-4 bg-white rounded-3 border-start border-4 border-danger text-start">
                    <p class="mb-0 text-muted fst-italic">
                        "We focus on wholesale and bulk production. For pricing, custom sizes, and export inquiries, please contact us directly by WhatsApp or email."
                    </p>
                </blockquote>
                <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center mt-4">
                    <a href="https://wa.me/905325572057?text=Hello%20Yildirim%20Ofset,%20I%20would%20like%20to%20get%20a%20quote%20for%20pizza%20box%20liners."
                       class="btn btn-success btn-lg" target="_blank" rel="noopener">
                        <i class="bi bi-whatsapp me-2"></i> WhatsApp Us
                    </a>
                    <a href="mailto:info@yildirimofset.com.tr?subject=Pizza%20Box%20Liners%20Wholesale%20Inquiry"
                       class="btn btn-outline-danger btn-lg">
                        <i class="bi bi-envelope me-2"></i> Send Email
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Internal links -->
<section class="py-5">
    <div class="container">
        <h3 class="section-title text-center mb-4">Related Pages</h3>
        <div class="row g-3 justify-content-center">
            <div class="col-md-4">
                <a href="<?= base_url('products/wholesale-pizza-box-liners') ?>" class="text-decoration-none">
                    <div class="feature-card text-center">
                        <div class="feature-icon mx-auto"><i class="bi bi-truck"></i></div>
                        <h6 class="fw-bold">Wholesale Pizza Box Liners</h6>
                        <p class="text-muted small mb-0">Bulk supply for distributors and chains</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="<?= base_url('products/custom-pizza-box-liners') ?>" class="text-decoration-none">
                    <div class="feature-card text-center">
                        <div class="feature-icon mx-auto"><i class="bi bi-rulers"></i></div>
                        <h6 class="fw-bold">Custom Pizza Box Liners</h6>
                        <p class="text-muted small mb-0">Custom sizes for specific requirements</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="<?= base_url('blog/what-are-pizza-box-liners') ?>" class="text-decoration-none">
                    <div class="feature-card text-center">
                        <div class="feature-icon mx-auto"><i class="bi bi-journal-text"></i></div>
                        <h6 class="fw-bold">What Are Pizza Box Liners?</h6>
                        <p class="text-muted small mb-0">Read our complete product guide</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<?php $cta_title = 'Need Wholesale Pizza Box Liners?'; $cta_text = 'Contact Yıldırım Ofset for bulk orders and custom production.'; ?>
<?= $this->include('partials/cta_section') ?>

<?= $this->endSection() ?>
