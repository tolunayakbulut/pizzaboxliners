<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="page-hero">
    <div class="container">
        <?= $this->include('partials/breadcrumb') ?>
        <span class="hero-badge mt-3 d-inline-block">Sizing Guide</span>
        <h1 class="mt-2 mb-2">How to Choose the Right Pizza Box Liner Size</h1>
        <p class="lead text-white-50">A practical guide for restaurants, distributors, and wholesale buyers</p>
    </div>
</div>

<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">

                <img src="<?= base_url('assets/images/pizza-box-liners.webp') ?>"
                     alt="Choosing the right pizza box liner size"
                     class="img-fluid rounded-3 mb-5 w-100"
                     style="max-height:380px; object-fit:cover;"
                     loading="lazy">

                <h2>Why Pizza Box Liner Size Matters</h2>
                <p>
                    Choosing the right <a href="<?= base_url('products/pizza-box-liners') ?>">pizza box liner</a> size is important for ensuring the liner fits correctly inside your pizza boxes. A liner that is too small will not cover the box base adequately. A liner that is too large may fold up on the sides and affect the packaging result.
                </p>

                <h2 class="mt-4">Step 1 — Know Your Pizza Box Dimensions</h2>
                <p>
                    The first step is to identify the internal dimensions of your pizza box. The liner needs to fit the floor of the box. Measure the length and width of the inside base of the box — these are the key measurements you need when ordering pizza box liners.
                </p>
                <p>
                    Common pizza box sizes include 8", 10", 12", 14", and 16" — but sizes vary by manufacturer and market. Always use actual measurements rather than assumed standard sizes.
                </p>

                <h2 class="mt-4">Step 2 — Decide on Sheet or Roll Format</h2>
                <p>
                    <strong>Pizza box liner sheets</strong> are pre-cut to a specific size. They are convenient for operations with standardised box sizes.
                </p>
                <p>
                    <strong>Pizza box liner rolls</strong> allow you to cut liners on-site according to your needs. This can be more flexible when working with multiple box sizes.
                </p>

                <h2 class="mt-4">Step 3 — Consider Custom Sizes</h2>
                <p>
                    If your pizza boxes use non-standard dimensions, <a href="<?= base_url('products/custom-pizza-box-liners') ?>">custom pizza box liners</a> are the most practical solution. A manufacturer like Yıldırım Ofset can produce liners in specific dimensions based on your requirements.
                </p>
                <p>
                    Custom-size production is typically available for wholesale and bulk orders. Contact us with your dimensions and quantity requirements to discuss options.
                </p>

                <h2 class="mt-4">Step 4 — Order in Bulk</h2>
                <p>
                    For restaurants and distributors, ordering <a href="<?= base_url('products/wholesale-pizza-box-liners') ?>">wholesale pizza box liners</a> in bulk quantities is more efficient and cost-effective. Wholesale orders also give you the opportunity to discuss consistent sizing across your operations.
                </p>

                <div class="p-4 bg-soft rounded-3 border-start border-4 border-danger mt-4">
                    <h5 class="fw-bold mb-2">Need Custom-Size Pizza Box Liners?</h5>
                    <p class="text-muted mb-3">Contact Yıldırım Ofset with your dimensions and quantity. We will discuss production options.</p>
                    <a href="<?= base_url('contact') ?>" class="btn btn-danger me-2">Send Dimensions & Quantity</a>
                    <a href="<?= base_url('products/custom-pizza-box-liners') ?>" class="btn btn-outline-secondary">Custom Production</a>
                </div>

            </div>
        </div>
    </div>
</section>

<?= $this->include('partials/cta_section') ?>

<?= $this->endSection() ?>
