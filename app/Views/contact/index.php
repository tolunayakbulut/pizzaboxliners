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
        <div class="row g-5">
            <!-- Contact form -->
            <div class="col-lg-7">
                <div class="contact-wrapper">
                    <h2 class="fw-bold mb-2">Send Your Wholesale Inquiry</h2>
                    <p class="text-muted mb-4">
                        Looking for wholesale pizza box liners? Send us your request and we will contact you with product and pricing details.
                    </p>

                    <?php if (session()->has('success')): ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="bi bi-check-circle-fill me-2"></i>
                        <?= session('success') ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                    <?php endif; ?>

                    <?php if (session()->has('errors')): ?>
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            <?php foreach (session('errors') as $error): ?>
                            <li><?= esc($error) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <?php endif; ?>

                    <form action="<?= base_url('contact/submit') ?>" method="POST" id="contactForm" novalidate>
                        <?= csrf_field() ?>

                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label class="form-label" for="name">Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="name" name="name"
                                       value="<?= old('name') ?>" required maxlength="100"
                                       placeholder="Your full name">
                                <div class="invalid-feedback">Please enter your name.</div>
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label" for="company">Company Name</label>
                                <input type="text" class="form-control" id="company" name="company"
                                       value="<?= old('company') ?>" maxlength="150"
                                       placeholder="Your company or business">
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label" for="country">Country <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="country" name="country"
                                       value="<?= old('country') ?>" required maxlength="100"
                                       placeholder="Your country">
                                <div class="invalid-feedback">Please enter your country.</div>
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label" for="email">Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="email" name="email"
                                       value="<?= old('email') ?>" required maxlength="150"
                                       placeholder="your@email.com">
                                <div class="invalid-feedback">Please enter a valid email address.</div>
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label" for="phone">WhatsApp / Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone"
                                       value="<?= old('phone') ?>" maxlength="50"
                                       placeholder="+1 234 567 8900">
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label" for="product">Product Interest</label>
                                <select class="form-select" id="product" name="product">
                                    <option value="" <?= old('product') === '' ? 'selected' : '' ?>>Select a product</option>
                                    <option value="Pizza Box Liners" <?= old('product') === 'Pizza Box Liners' ? 'selected' : '' ?>>Pizza Box Liners</option>
                                    <option value="Wholesale Pizza Box Liners" <?= old('product') === 'Wholesale Pizza Box Liners' ? 'selected' : '' ?>>Wholesale Pizza Box Liners</option>
                                    <option value="Custom Pizza Box Liners" <?= old('product') === 'Custom Pizza Box Liners' ? 'selected' : '' ?>>Custom Pizza Box Liners</option>
                                    <option value="Other" <?= old('product') === 'Other' ? 'selected' : '' ?>>Other</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label" for="quantity">Estimated Quantity</label>
                                <input type="text" class="form-control" id="quantity" name="quantity"
                                       value="<?= old('quantity') ?>" maxlength="100"
                                       placeholder="e.g. 50,000 units per month">
                            </div>
                            <div class="col-12">
                                <label class="form-label" for="message">Message <span class="text-danger">*</span></label>
                                <textarea class="form-control" id="message" name="message"
                                          rows="5" required minlength="10" maxlength="3000"
                                          placeholder="Please describe your packaging needs, required sizes, or any other details..."><?= old('message') ?></textarea>
                                <div class="invalid-feedback">Please enter a message (at least 10 characters).</div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-danger btn-lg px-5 w-100">
                                    <i class="bi bi-send me-2"></i> Send Inquiry
                                </button>
                                <p class="text-muted small text-center mt-2 mb-0">
                                    We will respond to your inquiry as soon as possible.
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Contact info sidebar -->
            <div class="col-lg-5">
                <div class="ps-lg-3">
                    <h3 class="fw-bold mb-4">Direct Contact</h3>

                    <div class="d-flex gap-3 align-items-start mb-4 p-3 bg-soft rounded-3">
                        <div style="width:48px; height:48px; background:#25d366; border-radius:50%; display:flex; align-items:center; justify-content:center; font-size:1.3rem; color:#fff; flex-shrink:0;">
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

                    <div class="d-flex gap-3 align-items-start mb-4 p-3 bg-soft rounded-3">
                        <div style="width:48px; height:48px; background:var(--brand-red); border-radius:50%; display:flex; align-items:center; justify-content:center; font-size:1.3rem; color:#fff; flex-shrink:0;">
                            <i class="bi bi-envelope-fill"></i>
                        </div>
                        <div>
                            <p class="fw-semibold mb-1">Email</p>
                            <a href="mailto:info@yildirimofset.com.tr?subject=Pizza%20Box%20Liners%20Wholesale%20Inquiry"
                               class="text-decoration-none fw-bold text-danger" style="word-break:break-all;">
                                info@yildirimofset.com.tr
                            </a>
                            <p class="text-muted small mb-0 mt-1">For wholesale and export inquiries</p>
                        </div>
                    </div>

                    <div class="p-3 bg-soft rounded-3 mb-4">
                        <h6 class="fw-bold mb-3">What to Include in Your Inquiry</h6>
                        <ul class="list-unstyled text-muted small mb-0">
                            <?php
                            $tips = [
                                'Your country and business type',
                                'Estimated order quantity',
                                'Required pizza box liner size or dimensions',
                                'Product type (standard, custom, wholesale)',
                                'Any specific requirements',
                            ];
                            foreach ($tips as $tip): ?>
                            <li class="mb-1"><i class="bi bi-arrow-right text-danger me-2"></i><?= esc($tip) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <div class="p-3 border rounded-3">
                        <h6 class="fw-bold mb-2">About Yıldırım Ofset</h6>
                        <p class="text-muted small mb-0">
                            A packaging and printing manufacturer producing wholesale pizza box liners for restaurants, pizza chains, food packaging distributors, and international buyers.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
