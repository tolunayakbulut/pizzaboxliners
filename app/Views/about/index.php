<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="page-hero">
    <div class="container">
        <?= $this->include('partials/breadcrumb') ?>
        <h1 class="mt-3 mb-2">About Yıldırım Ofset</h1>
        <p class="lead text-white-50">Pizza box liner manufacturer for B2B and wholesale buyers</p>
    </div>
</div>

<section class="py-5">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <span class="section-label">Who We Are</span>
                <div class="divider"></div>
                <h2 class="section-title mb-4">About Yıldırım Ofset</h2>
                <p class="text-muted mb-3">
                    Yıldırım Ofset is a packaging and printing manufacturer producing food packaging paper products for businesses. With experience in offset printing and packaging production, the company serves B2B customers looking for practical and reliable packaging solutions.
                </p>
                <p class="text-muted mb-3">
                    The website <strong>pizzaboxliners.net</strong> focuses on <a href="<?= base_url('products/pizza-box-liners') ?>">pizza box liners</a> for international buyers, including restaurants, pizza chains, packaging distributors, wholesalers, and importers.
                </p>
                <p class="text-muted mb-4">
                    Our approach is straightforward: we manufacture, you buy wholesale. There are no retail orders, no small quantities — we work exclusively with businesses that need bulk supply.
                </p>
                <a href="<?= base_url('contact') ?>" class="btn btn-danger me-2">Contact Us</a>
                <a href="<?= base_url('products') ?>" class="btn btn-outline-secondary">Our Products</a>
            </div>
            <div class="col-lg-6">
                <div class="product-img-placeholder" style="height:360px;">
                    <div class="text-center">
                        <i class="bi bi-image" style="font-size:3rem; color:#ccc;"></i>
                        <p class="mt-2 mb-0 small" style="color:#aaa;">pizza-packaging-paper-liners.webp</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-soft">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-label">What We Offer</span>
            <div class="divider divider-center"></div>
            <h2 class="section-title">Our Business Focus</h2>
        </div>
        <div class="row g-4 justify-content-center">
            <?php
            $focus = [
                ['bi-factory',        'Manufacturing',         'We manufacture pizza box liners directly. No resellers, no third parties.'],
                ['bi-globe2',         'International Supply',  'We welcome export inquiries and international buyers.'],
                ['bi-rulers',         'Custom Production',     'Custom sizes available for businesses with specific packaging dimensions.'],
                ['bi-lightning-fill', 'B2B Only',              'We work exclusively with businesses — restaurants, distributors, chains, and importers.'],
            ];
            foreach ($focus as $f): ?>
            <div class="col-md-6 col-lg-3">
                <div class="feature-card text-center">
                    <div class="feature-icon mx-auto"><i class="bi <?= $f[0] ?>"></i></div>
                    <h6 class="fw-bold mb-2"><?= $f[1] ?></h6>
                    <p class="text-muted small mb-0"><?= $f[2] ?></p>
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
                <span class="section-label">Contact</span>
                <div class="divider divider-center"></div>
                <h2 class="section-title mb-4">Get in Touch</h2>
                <p class="text-muted mb-4">
                    For wholesale inquiries, custom production requests, and international supply questions, contact us directly by WhatsApp or email.
                </p>
                <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
                    <a href="https://wa.me/905325572057?text=Hello%20Yildirim%20Ofset,%20I%20would%20like%20to%20get%20a%20quote%20for%20pizza%20box%20liners."
                       class="btn btn-success btn-lg px-4" target="_blank" rel="noopener">
                        <i class="bi bi-whatsapp me-2"></i> +90 532 557 20 57
                    </a>
                    <a href="mailto:info@yildirimofset.com.tr?subject=Pizza%20Box%20Liners%20Wholesale%20Inquiry"
                       class="btn btn-outline-danger btn-lg px-4">
                        <i class="bi bi-envelope me-2"></i> info@yildirimofset.com.tr
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->include('partials/cta_section') ?>

<?= $this->endSection() ?>
