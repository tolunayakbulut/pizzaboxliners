<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QDBV4F104K"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-QDBV4F104K');
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png" href="<?= base_url('favicon.ico') ?>">
    <title><?= esc($meta['title'] ?? 'Pizza Box Liners Manufacturer | Wholesale Pizza Box Liners') ?></title>
    <meta name="description" content="<?= esc($meta['description'] ?? 'Yıldırım Ofset manufactures wholesale pizza box liners for restaurants, pizza chains, distributors, and food packaging suppliers.') ?>">

    <?php if (!empty($meta['canonical'])): ?>
    <link rel="canonical" href="<?= esc($meta['canonical']) ?>">
    <?php endif; ?>

    <!-- Open Graph -->
    <meta property="og:title" content="<?= esc($meta['og_title'] ?? $meta['title'] ?? 'Pizza Box Liners Manufacturer') ?>">
    <meta property="og:description" content="<?= esc($meta['og_description'] ?? $meta['description'] ?? '') ?>">
    <meta property="og:url" content="<?= esc($meta['canonical'] ?? 'https://pizzaboxliners.net/') ?>">
    <meta property="og:site_name" content="Pizza Box Liners by Yıldırım Ofset">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?= base_url('assets/images/pizza-box-liners.webp') ?>">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= esc($meta['title'] ?? 'Pizza Box Liners Manufacturer') ?>">
    <meta name="twitter:description" content="<?= esc($meta['description'] ?? '') ?>">
    <meta name="twitter:image" content="<?= base_url('assets/images/pizza-box-liners.webp') ?>">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

    <!-- Organization Schema (all pages) -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "Yıldırım Ofset",
      "url": "https://pizzaboxliners.net",
      "email": "info@yildirimofset.com.tr",
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+905325572057",
        "contactType": "sales",
        "availableLanguage": ["English", "Turkish"]
      }
    }
    </script>

    <?php if (!empty($schema)): ?>
    <script type="application/ld+json">
    <?= $schema ?>
    </script>
    <?php endif; ?>
</head>
<body>

    <?= $this->include('partials/nav') ?>

    <main>
        <?= $this->renderSection('content') ?>
    </main>

    <?= $this->include('partials/footer') ?>

    <!-- Sticky WhatsApp & Email buttons (mobile) -->
    <?= $this->include('partials/sticky_contact') ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="<?= base_url('assets/js/main.js') ?>"></script>
</body>
</html>
