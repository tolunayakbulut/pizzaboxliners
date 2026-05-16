<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<!-- ===================== HERO ===================== -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-7">
                <span class="hero-badge">B2B Wholesale Manufacturer</span>
                <h1>Pizza Box Liners for Wholesale Food Packaging</h1>
                <p class="lead mb-4">
                    High-quality pizza box liners manufactured for pizza restaurants, food packaging distributors, pizza chains, and wholesale buyers worldwide.
                </p>
                <div class="d-flex flex-column flex-sm-row gap-3 mb-4">
                    <a href="https://wa.me/905325572057?text=Hello%20Yildirim%20Ofset,%20I%20would%20like%20to%20get%20a%20quote%20for%20pizza%20box%20liners."
                       class="btn btn-success btn-lg px-4" target="_blank" rel="noopener">
                        <i class="bi bi-whatsapp me-2"></i> Get a Quote on WhatsApp
                    </a>
                    <a href="mailto:info@yildirimofset.com.tr?subject=Pizza%20Box%20Liners%20Wholesale%20Inquiry"
                       class="btn btn-outline-light btn-lg px-4">
                        <i class="bi bi-envelope me-2"></i> Send Email
                    </a>
                </div>
                <div class="hero-contact-info">
                    <div>
                        <i class="bi bi-whatsapp text-success me-1"></i>
                        <span class="text-white me-3">+90 532 557 20 57</span>
                        <i class="bi bi-envelope text-danger me-1"></i>
                        <span class="text-white">info@yildirimofset.com.tr</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 d-none d-lg-block">
                <img src="<?= base_url('assets/images/pizza-box-liners.webp') ?>"
                     alt="Pizza box liners for wholesale food packaging"
                     class="img-fluid rounded-3"
                     style="height:380px; width:100%; object-fit:cover;"
                     loading="eager">
            </div>
        </div>
    </div>
</section>

<!-- ===================== INTRO ===================== -->
<section class="py-5 bg-soft">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <span class="section-label">About the Product</span>
                <div class="divider divider-center"></div>
                <h2 class="section-title mb-4">What Are Pizza Box Liners?</h2>
                <p class="text-muted mb-4">
                    Pizza box liners are an important part of modern pizza packaging. They help improve presentation, create a cleaner packaging experience, and support takeaway and delivery operations. At Yıldırım Ofset, we produce <a href="<?= base_url('products/pizza-box-liners') ?>">pizza box liners</a> for B2B customers looking for reliable wholesale supply.
                </p>
                <p class="text-muted">
                    Whether you are a pizza restaurant, distributor, or packaging company, you can contact us for bulk orders and custom-size inquiries.
                </p>
                <a href="<?= base_url('products/pizza-box-liners') ?>" class="btn btn-danger mt-3">
                    View Product Details <i class="bi bi-arrow-right ms-1"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ===================== WHY USE ===================== -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-5">
                <img src="<?= base_url('assets/images/pizza-box-liner-paper.webp') ?>"
                     alt="Pizza box liner paper for restaurants and delivery packaging"
                     class="img-fluid rounded-3"
                     style="height:320px; width:100%; object-fit:cover;"
                     loading="lazy">
            </div>
            <div class="col-lg-7">
                <span class="section-label">Benefits</span>
                <div class="divider"></div>
                <h2 class="section-title mb-4">Why Use Pizza Box Liners?</h2>
                <p class="text-muted mb-4">
                    Pizza box liners can help pizza businesses improve the way their products are packed and delivered. They are especially useful for restaurants and delivery-focused businesses that want a cleaner and more professional packaging experience.
                </p>
                <div class="row g-3">
                    <?php
                    $benefits = [
                        ['bi-box-seam',       'Suitable for takeaway and delivery boxes'],
                        ['bi-star',           'Helps improve food presentation'],
                        ['bi-shop',           'Useful for pizza restaurants and chains'],
                        ['bi-truck',          'Available for wholesale and bulk orders'],
                        ['bi-rulers',         'Can be produced in custom sizes'],
                        ['bi-building',       'Ideal for food packaging distributors'],
                    ];
                    foreach ($benefits as $b): ?>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-start gap-3">
                            <div class="feature-icon flex-shrink-0" style="width:38px;height:38px;font-size:1.1rem;">
                                <i class="bi <?= $b[0] ?>"></i>
                            </div>
                            <p class="mb-0 small fw-medium"><?= $b[1] ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===================== PRODUCTS ===================== -->
<section class="py-5 bg-soft">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-label">Our Products</span>
            <div class="divider divider-center"></div>
            <h2 class="section-title">Pizza Box Liner Solutions</h2>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="feature-card text-center">
                    <div class="feature-icon mx-auto"><i class="bi bi-box-seam"></i></div>
                    <h5 class="fw-bold mb-2">Pizza Box Liners</h5>
                    <p class="text-muted small mb-3">Standard pizza box liner paper for restaurants, chains, and packaging companies.</p>
                    <a href="<?= base_url('products/pizza-box-liners') ?>" class="btn btn-sm btn-outline-danger">View Product</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card text-center">
                    <div class="feature-icon mx-auto"><i class="bi bi-truck"></i></div>
                    <h5 class="fw-bold mb-2">Wholesale Pizza Box Liners</h5>
                    <p class="text-muted small mb-3">Bulk supply for distributors, wholesalers, and large pizza chains.</p>
                    <a href="<?= base_url('products/wholesale-pizza-box-liners') ?>" class="btn btn-sm btn-outline-danger">View Product</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card text-center">
                    <div class="feature-icon mx-auto"><i class="bi bi-rulers"></i></div>
                    <h5 class="fw-bold mb-2">Custom Pizza Box Liners</h5>
                    <p class="text-muted small mb-3">Custom sizes and specifications for unique packaging requirements.</p>
                    <a href="<?= base_url('products/custom-pizza-box-liners') ?>" class="btn btn-sm btn-outline-danger">View Product</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===================== WHOLESALE ===================== -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-7">
                <span class="section-label">Wholesale &amp; Bulk</span>
                <div class="divider"></div>
                <h2 class="section-title mb-4">Wholesale and B2B Production</h2>
                <p class="text-muted mb-3">
                    Yıldırım Ofset focuses on wholesale and B2B production. We work with businesses that need <a href="<?= base_url('products/wholesale-pizza-box-liners') ?>">wholesale pizza box liners</a> in bulk quantities.
                </p>
                <p class="text-muted mb-4">
                    We focus on wholesale and bulk production. For pricing, custom sizes, and export inquiries, please contact us directly by WhatsApp or email.
                </p>
                <ul class="list-unstyled mb-4">
                    <?php
                    $wholesale = [
                        'Wholesale pricing for restaurants and chains',
                        'Custom sizes for different pizza box dimensions',
                        'Distributor and wholesaler supply',
                        'International and export inquiries welcome',
                        'Bulk production details on request',
                    ];
                    foreach ($wholesale as $item): ?>
                    <li class="mb-2">
                        <i class="bi bi-check-circle-fill text-danger me-2"></i>
                        <?= esc($item) ?>
                    </li>
                    <?php endforeach; ?>
                </ul>
                <a href="<?= base_url('contact') ?>" class="btn btn-danger me-2">Send Inquiry</a>
                <a href="<?= base_url('products/wholesale-pizza-box-liners') ?>" class="btn btn-outline-secondary">Wholesale Details</a>
            </div>
            <div class="col-lg-5">
                <div class="product-img-placeholder">
                    <div class="text-center">
                        <i class="bi bi-image" style="font-size:2.5rem; color:#ccc;"></i>
                        <p class="mt-2 mb-0 small" style="color:#aaa;">wholesale-pizza-box-liners.webp</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===================== INDUSTRIES ===================== -->
<section class="py-5 bg-soft">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-label">Industries Served</span>
            <div class="divider divider-center"></div>
            <h2 class="section-title">Who Uses Our Pizza Box Liners?</h2>
        </div>
        <div class="row g-3">
            <?php
            $industries = [
                ['bi-shop',              'Pizza Restaurants',          base_url('applications/pizza-restaurants')],
                ['bi-buildings',         'Pizza Chains',               base_url('applications/pizza-chains')],
                ['bi-box2',              'Packaging Distributors',     base_url('applications/food-packaging-distributors')],
                ['bi-globe',             'Wholesalers &amp; Importers', base_url('applications')],
                ['bi-bag',               'Takeaway Packaging Suppliers',base_url('applications')],
                ['bi-cup-hot',           'Catering Companies',          base_url('applications')],
                ['bi-truck',             'Delivery Services',           base_url('applications')],
                ['bi-building-check',    'Food Service Companies',      base_url('applications')],
            ];
            foreach ($industries as $ind): ?>
            <div class="col-6 col-md-3">
                <a href="<?= $ind[2] ?>" class="text-decoration-none">
                    <div class="industry-card">
                        <div class="icon-wrap"><i class="bi <?= $ind[0] ?>"></i></div>
                        <p class="fw-medium mb-0 small"><?= $ind[1] ?></p>
                    </div>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ===================== WHY CHOOSE US ===================== -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-label">Why Choose Yıldırım Ofset</span>
            <div class="divider divider-center"></div>
            <h2 class="section-title">A Trusted B2B Pizza Box Liner Manufacturer</h2>
        </div>
        <div class="row g-4">
            <?php
            $reasons = [
                ['bi-factory',        'Manufacturer-Direct',   'Buy directly from the manufacturer — no middlemen. Get competitive pricing and direct communication.'],
                ['bi-globe2',         'International Supply',  'We welcome export and international inquiries. Contact us for supply to your country.'],
                ['bi-rulers',         'Custom Production',     'Need specific sizes? We can discuss custom production according to your packaging needs.'],
                ['bi-lightning-fill', 'B2B Focus',             'We work exclusively with businesses — restaurants, chains, distributors, and wholesalers.'],
            ];
            foreach ($reasons as $r): ?>
            <div class="col-md-6 col-lg-3">
                <div class="feature-card">
                    <div class="feature-icon"><i class="bi <?= $r[0] ?>"></i></div>
                    <h6 class="fw-bold mb-2"><?= $r[1] ?></h6>
                    <p class="text-muted small mb-0"><?= $r[2] ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ===================== FAQ ===================== -->
<section class="py-5 bg-soft">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="text-center mb-5">
                    <span class="section-label">FAQ</span>
                    <div class="divider divider-center"></div>
                    <h2 class="section-title">Frequently Asked Questions</h2>
                </div>
                <div class="accordion" id="faqAccordion">
                    <?php
                    $faqs = [
                        [
                            'q' => 'What are pizza box liners?',
                            'a' => 'Pizza box liners are paper-based packaging materials placed inside pizza boxes. They are commonly used to support cleaner packaging, improve presentation, and separate the pizza from the box surface.',
                        ],
                        [
                            'q' => 'Do you sell pizza box liners wholesale?',
                            'a' => 'Yes. Yıldırım Ofset focuses on wholesale and bulk supply for restaurants, pizza chains, distributors, wholesalers, and packaging companies.',
                        ],
                        [
                            'q' => 'Can you produce custom-size pizza box liners?',
                            'a' => 'Yes. Custom-size production can be discussed depending on your packaging needs and order quantity.',
                        ],
                        [
                            'q' => 'Do you export pizza box liners?',
                            'a' => 'International and export inquiries are welcome. Please contact us by WhatsApp or email for details.',
                        ],
                        [
                            'q' => 'How can I request a price quote?',
                            'a' => 'You can contact us by WhatsApp at +90 532 557 20 57 or by email at info@yildirimofset.com.tr. Please include your country, estimated quantity, and required size.',
                        ],
                    ];
                    foreach ($faqs as $i => $faq): ?>
                    <div class="accordion-item border mb-2 rounded-3 overflow-hidden">
                        <h3 class="accordion-header">
                            <button class="accordion-button <?= $i > 0 ? 'collapsed' : '' ?> fw-semibold" type="button"
                                data-bs-toggle="collapse" data-bs-target="#faq<?= $i ?>">
                                <?= esc($faq['q']) ?>
                            </button>
                        </h3>
                        <div id="faq<?= $i ?>" class="accordion-collapse collapse <?= $i === 0 ? 'show' : '' ?>" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-muted">
                                <?= esc($faq['a']) ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===================== CTA ===================== -->
<?= $this->include('partials/cta_section') ?>

<?= $this->endSection() ?>
