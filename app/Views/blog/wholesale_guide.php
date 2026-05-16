<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="page-hero">
    <div class="container">
        <?= $this->include('partials/breadcrumb') ?>
        <span class="hero-badge mt-3 d-inline-block">B2B Guide</span>
        <h1 class="mt-2 mb-2">Wholesale Pizza Box Liners: A Buying Guide for Distributors</h1>
        <p class="lead text-white-50">What to look for when sourcing bulk pizza box liners as a distributor or packaging company</p>
    </div>
</div>

<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">

                <div class="product-img-placeholder mb-5">
                    <div class="text-center">
                        <i class="bi bi-image" style="font-size:3rem; color:#ccc;"></i>
                        <p class="mt-2 mb-0 small" style="color:#aaa;">wholesale-pizza-box-liners.webp</p>
                    </div>
                </div>

                <h2>Why Wholesale Pizza Box Liners?</h2>
                <p>
                    Food packaging distributors, wholesalers, and importers often need to source <a href="<?= base_url('products/wholesale-pizza-box-liners') ?>">wholesale pizza box liners</a> directly from a manufacturer. Buying wholesale rather than retail gives businesses better pricing, consistent supply, and the ability to meet the demands of their own customers.
                </p>

                <h2 class="mt-4">What to Look for in a Pizza Box Liner Supplier</h2>
                <p>When evaluating a wholesale pizza box liner supplier, consider the following:</p>

                <div class="row g-3 mt-2">
                    <?php
                    $criteria = [
                        ['bi-factory',       'Manufacturer or Reseller',    'Working directly with a manufacturer typically gives you better pricing and more flexibility on production specifications.'],
                        ['bi-rulers',        'Custom Size Capability',      'Ask whether the supplier can produce pizza box liners in the specific dimensions your customers need.'],
                        ['bi-globe',         'Export Experience',           'If you are importing from another country, confirm the supplier has experience with international logistics and export documentation.'],
                        ['bi-chat-dots',     'Communication',               'A supplier who responds clearly and quickly to your inquiries is important for a smooth wholesale relationship.'],
                        ['bi-truck-flatbed', 'Minimum Order Quantity',      'Understand the minimum quantities and whether they align with your business requirements.'],
                        ['bi-arrow-repeat',  'Consistency of Supply',       'Reliable and consistent supply is critical for distributors who need to maintain stock for their own customers.'],
                    ];
                    foreach ($criteria as $c): ?>
                    <div class="col-sm-6">
                        <div class="feature-card h-100">
                            <div class="feature-icon" style="width:38px;height:38px;font-size:1rem;"><i class="bi <?= $c[0] ?>"></i></div>
                            <h6 class="fw-bold mt-2 mb-1"><?= $c[1] ?></h6>
                            <p class="text-muted small mb-0"><?= $c[2] ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

                <h2 class="mt-4">Types of Buyers Who Order Wholesale Pizza Box Liners</h2>
                <ul>
                    <li><strong>Food packaging distributors</strong> who supply pizza boxes and related products to restaurants</li>
                    <li><strong>Packaging wholesalers</strong> who buy in bulk and redistribute to smaller buyers</li>
                    <li><strong>Importers</strong> sourcing from manufacturers in other countries</li>
                    <li><strong>Pizza chains</strong> with centralised procurement for multiple locations</li>
                    <li><strong>Catering companies</strong> with regular high-volume packaging needs</li>
                </ul>

                <h2 class="mt-4">How to Request Wholesale Pricing</h2>
                <p>
                    When reaching out to a wholesale pizza box liner manufacturer, include the following in your first inquiry:
                </p>
                <ul>
                    <li>Your country and business type</li>
                    <li>Required pizza box liner size or dimensions</li>
                    <li>Estimated order quantity (monthly or per order)</li>
                    <li>Whether you need standard or custom sizes</li>
                    <li>Any specific requirements for your market</li>
                </ul>
                <p>
                    This information allows the supplier to respond with relevant pricing and production details quickly.
                </p>

                <h2 class="mt-4">Yıldırım Ofset — Wholesale Pizza Box Liner Manufacturer</h2>
                <p>
                    Yıldırım Ofset manufactures <a href="<?= base_url('products/pizza-box-liners') ?>">pizza box liners</a> for B2B buyers including distributors, wholesalers, pizza chains, and importers. We focus exclusively on wholesale and bulk production — we do not sell retail.
                </p>
                <p>
                    Contact us by WhatsApp or email with your requirements. International inquiries are welcome.
                </p>

                <div class="p-4 bg-soft rounded-3 border-start border-4 border-danger mt-4">
                    <h5 class="fw-bold mb-2">Ready to Source Wholesale Pizza Box Liners?</h5>
                    <p class="text-muted mb-3">
                        Contact Yıldırım Ofset with your quantity, country, and size requirements. We will respond with the relevant details.
                    </p>
                    <a href="<?= base_url('contact') ?>" class="btn btn-danger me-2">Send Wholesale Inquiry</a>
                    <a href="https://wa.me/905325572057?text=Hello%20Yildirim%20Ofset,%20I%20would%20like%20to%20get%20a%20quote%20for%20wholesale%20pizza%20box%20liners."
                       class="btn btn-success" target="_blank" rel="noopener">
                        <i class="bi bi-whatsapp me-1"></i> WhatsApp
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>

<?= $this->include('partials/cta_section') ?>

<?= $this->endSection() ?>
