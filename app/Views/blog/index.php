<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="page-hero">
    <div class="container">
        <?= $this->include('partials/breadcrumb') ?>
        <h1 class="mt-3 mb-2">Pizza Box Liners Blog</h1>
        <p class="lead text-white-50">Packaging guides, industry articles, and buying resources</p>
    </div>
</div>

<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <span class="section-label">Latest Articles</span>
            <div class="divider divider-center"></div>
            <h2 class="section-title">Pizza Box Liner Resources</h2>
        </div>
        <div class="row g-4">
            <?php foreach ($posts as $post): ?>
            <div class="col-md-6 col-lg-4">
                <div class="blog-card">
                    <div class="blog-card-img d-flex align-items-center justify-content-center">
                        <div class="text-center" style="color:#aaa; font-size:0.8rem;">
                            <i class="bi bi-image" style="font-size:2.5rem; color:#ccc; display:block;"></i>
                            <?= esc($post['image']) ?>
                        </div>
                    </div>
                    <div class="blog-card-body">
                        <span class="blog-tag"><?= esc($post['tag']) ?></span>
                        <h5 class="fw-bold mt-2 mb-2">
                            <a href="<?= esc($post['url']) ?>" class="text-dark text-decoration-none">
                                <?= esc($post['title']) ?>
                            </a>
                        </h5>
                        <p class="text-muted small mb-3"><?= esc($post['excerpt']) ?></p>
                        <a href="<?= esc($post['url']) ?>" class="btn btn-sm btn-outline-danger">Read Article</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?= $this->include('partials/cta_section') ?>

<?= $this->endSection() ?>
