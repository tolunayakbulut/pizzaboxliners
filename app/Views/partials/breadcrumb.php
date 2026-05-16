<?php if (!empty($breadcrumbs)): ?>
<nav aria-label="breadcrumb" class="bg-light border-bottom py-2">
    <div class="container">
        <ol class="breadcrumb mb-0 small">
            <li class="breadcrumb-item"><a href="<?= base_url('/') ?>">Home</a></li>
            <?php foreach ($breadcrumbs as $label => $url): ?>
                <?php if ($url): ?>
                    <li class="breadcrumb-item"><a href="<?= esc($url) ?>"><?= esc($label) ?></a></li>
                <?php else: ?>
                    <li class="breadcrumb-item active" aria-current="page"><?= esc($label) ?></li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ol>
    </div>
</nav>
<?php endif; ?>
