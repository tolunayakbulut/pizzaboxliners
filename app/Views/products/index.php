<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="page-hero">
    <div class="container">
        <?= $this->include('partials/breadcrumb') ?>
        <h1 class="mt-3 mb-2">Pizza Box Liner Products</h1>
        <p class="lead text-white-50">Wholesale, custom, and bulk pizza box liner solutions from Yıldırım Ofset</p>
    </div>
</div>

<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-label">Our Product Range</span>
            <div class="divider divider-center"></div>
            <h2 class="section-title">Pizza Box Liner Solutions for B2B Buyers</h2>
            <p class="text-muted mt-3 mx-auto" style="max-width:600px;">
                Yıldırım Ofset manufactures pizza box liners for wholesale buyers, food packaging distributors, pizza restaurants, and pizza chains. Browse our product range below.
            </p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="feature-card h-100 d-flex flex-column">
                    <div class="product-img-placeholder mb-3" style="height:200px;font-size:0;border-radius:8px;">
                        <div class="d-flex align-items-center justify-content-center h-100 text-center" style="font-size:0.8rem; color:#aaa;">
                            <div><i class="bi bi-image" style="font-size:2rem; color:#ccc; display:block;"></i>pizza-box-liners.webp</div>
                        </div>
                    </div>
                    <div class="feature-icon"><i class="bi bi-box-seam"></i></div>
                    <h5 class="fw-bold mb-2">Pizza Box Liners</h5>
                    <p class="text-muted small mb-3 flex-grow-1">Standard pizza box liner paper for restaurants, chains, and food packaging companies. The core product of our manufacturing range.</p>
                    <a href="<?= base_url('products/pizza-box-liners') ?>" class="btn btn-danger btn-sm">View Details</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card h-100 d-flex flex-column">
                    <div class="product-img-placeholder mb-3" style="height:200px;font-size:0;border-radius:8px;">
                        <div class="d-flex align-items-center justify-content-center h-100 text-center" style="font-size:0.8rem; color:#aaa;">
                            <div><i class="bi bi-image" style="font-size:2rem; color:#ccc; display:block;"></i>wholesale-pizza-box-liners.webp</div>
                        </div>
                    </div>
                    <div class="feature-icon"><i class="bi bi-truck"></i></div>
                    <h5 class="fw-bold mb-2">Wholesale Pizza Box Liners</h5>
                    <p class="text-muted small mb-3 flex-grow-1">Bulk supply of pizza box liners for distributors, wholesalers, and large pizza chains with high-volume requirements.</p>
                    <a href="<?= base_url('products/wholesale-pizza-box-liners') ?>" class="btn btn-danger btn-sm">View Details</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card h-100 d-flex flex-column">
                    <div class="product-img-placeholder mb-3" style="height:200px;font-size:0;border-radius:8px;">
                        <div class="d-flex align-items-center justify-content-center h-100 text-center" style="font-size:0.8rem; color:#aaa;">
                            <div><i class="bi bi-image" style="font-size:2rem; color:#ccc; display:block;"></i>custom-pizza-box-liners.webp</div>
                        </div>
                    </div>
                    <div class="feature-icon"><i class="bi bi-rulers"></i></div>
                    <h5 class="fw-bold mb-2">Custom Pizza Box Liners</h5>
                    <p class="text-muted small mb-3 flex-grow-1">Pizza box liners produced in custom sizes to match specific pizza box dimensions. For buyers with specific packaging requirements.</p>
                    <a href="<?= base_url('products/custom-pizza-box-liners') ?>" class="btn btn-danger btn-sm">View Details</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->include('partials/cta_section') ?>

<?= $this->endSection() ?>
