<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="page-hero">
    <div class="container">
        <?= $this->include('partials/breadcrumb') ?>
        <h1 class="mt-3 mb-2">Pizza Box Liners for Pizza Chains</h1>
        <p class="lead text-white-50">Consistent bulk supply for multi-location pizza chain operations</p>
    </div>
</div>

<section class="py-5">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <span class="section-label">For Pizza Chains</span>
                <div class="divider"></div>
                <h2 class="section-title mb-4">Bulk Pizza Box Liners for Pizza Chains</h2>
                <p class="text-muted mb-3">
                    Pizza chains that operate across multiple locations require a consistent and reliable supply of <a href="<?= base_url('products/pizza-box-liners') ?>">pizza box liners</a>. Yıldırım Ofset manufactures <a href="<?= base_url('products/wholesale-pizza-box-liners') ?>">bulk pizza box liners</a> for chain businesses that need uniform packaging across all branches.
                </p>
                <p class="text-muted mb-4">
                    Centralised procurement for pizza chains is a common approach — contact us to discuss wholesale supply that covers your full operation.
                </p>
                <a href="<?= base_url('contact') ?>" class="btn btn-danger me-2">Contact for Chain Supply</a>
                <a href="https://wa.me/905325572057?text=Hello%20Yildirim%20Ofset,%20I%20would%20like%20to%20inquire%20about%20pizza%20box%20liners%20for%20our%20pizza%20chain."
                   class="btn btn-success" target="_blank" rel="noopener">
                    <i class="bi bi-whatsapp me-1"></i> WhatsApp
                </a>
            </div>
            <div class="col-lg-6">
                <img src="<?= base_url('assets/images/wholesale-pizza-box-liners.webp') ?>"
                     alt="Pizza box liners for pizza chains bulk supply"
                     class="img-fluid rounded-3"
                     style="height:340px; width:100%; object-fit:cover;"
                     loading="lazy">
            </div>
        </div>
    </div>
</section>

<?php $cta_title = 'Sourcing Pizza Box Liners for a Pizza Chain?'; $cta_text = 'Contact Yıldırım Ofset for bulk chain supply and custom-size production.'; ?>
<?= $this->include('partials/cta_section') ?>

<?= $this->endSection() ?>
