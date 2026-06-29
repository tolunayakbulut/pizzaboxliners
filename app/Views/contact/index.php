<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="page-hero">
    <div class="container">
        <?= $this->include('partials/breadcrumb') ?>
        <h1 class="mt-3 mb-2">Contact Us for Pizza Box Liners</h1>
        <p class="lead text-white-50">Wholesale inquiries, custom production, and export supply</p>
    </div>
</div>

<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">

                <p class="text-muted text-center mb-5 fs-5">
                    Reach us directly via email or WhatsApp for wholesale pricing, custom orders, and export inquiries.
                </p>

                <div class="d-flex gap-3 align-items-start mb-4 p-4 bg-soft rounded-3">
                    <div style="width:52px; height:52px; background:#25d366; border-radius:50%; display:flex; align-items:center; justify-content:center; font-size:1.4rem; color:#fff; flex-shrink:0;">
                        <i class="bi bi-whatsapp"></i>
                    </div>
                    <div>
                        <p class="fw-semibold mb-1">WhatsApp</p>
                        <a href="https://wa.me/905325572057?text=Hello%20Yildirim%20Ofset,%20I%20would%20like%20to%20get%20a%20quote%20for%20pizza%20box%20liners."
                           class="text-decoration-none fs-5 fw-bold text-success" target="_blank" rel="noopener">
                            +90 532 557 20 57
                        </a>
                        <p class="text-muted small mb-0 mt-1">Click to open WhatsApp chat</p>
                    </div>
                </div>

                <div class="d-flex gap-3 align-items-start mb-4 p-4 bg-soft rounded-3">
                    <div style="width:52px; height:52px; background:var(--brand-red); border-radius:50%; display:flex; align-items:center; justify-content:center; font-size:1.4rem; color:#fff; flex-shrink:0;">
                        <i class="bi bi-envelope-fill"></i>
                    </div>
                    <div>
                        <p class="fw-semibold mb-1">Email</p>
                        <a href="mailto:info@yildirimofset.com.tr?subject=Pizza%20Box%20Liners%20Wholesale%20Inquiry"
                           class="text-decoration-none fs-5 fw-bold text-danger">
                            info@yildirimofset.com.tr
                        </a>
                        <p class="text-muted small mb-0 mt-1">Click to send an email inquiry</p>
                    </div>
                </div>

                <div class="d-flex gap-3 align-items-start mb-4 p-4 bg-soft rounded-3">
                    <div style="width:52px; height:52px; background:#0d6efd; border-radius:50%; display:flex; align-items:center; justify-content:center; font-size:1.4rem; color:#fff; flex-shrink:0;">
                        <i class="bi bi-telephone-fill"></i>
                    </div>
                    <div>
                        <p class="fw-semibold mb-1">Phone / Fax</p>
                        <a href="tel:+902324497508" class="text-decoration-none fs-5 fw-bold d-block">+90 (232) 449 75 08</a>
                        <span class="text-muted small">Fax: +90 (232) 449 75 16</span>
                    </div>
                </div>

                <div class="d-flex gap-3 align-items-start mb-5 p-4 bg-soft rounded-3">
                    <div style="width:52px; height:52px; background:#6c757d; border-radius:50%; display:flex; align-items:center; justify-content:center; font-size:1.4rem; color:#fff; flex-shrink:0;">
                        <i class="bi bi-geo-alt-fill"></i>
                    </div>
                    <div>
                        <p class="fw-semibold mb-1">Address</p>
                        <p class="mb-0">Kemalpaşa Cad. No: 33<br>Çamdibi - Bornova / İZMİR</p>
                    </div>
                </div>

                <div class="text-center">
                    <a href="https://wa.me/905325572057?text=Hello%20Yildirim%20Ofset,%20I%20would%20like%20to%20get%20a%20quote%20for%20pizza%20box%20liners."
                       class="btn btn-success btn-lg px-5 me-2 mb-2" target="_blank" rel="noopener">
                        <i class="bi bi-whatsapp me-2"></i> WhatsApp
                    </a>
                    <a href="mailto:info@yildirimofset.com.tr?subject=Pizza%20Box%20Liners%20Wholesale%20Inquiry"
                       class="btn btn-danger btn-lg px-5 mb-2">
                        <i class="bi bi-envelope me-2"></i> Send Email
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
