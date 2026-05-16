<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom shadow-sm sticky-top">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url('/') ?>">
            <img src="<?= base_url('assets/images/PizzaBoxLinerLogoBlack.png') ?>"
                 alt="Pizza Box Liners" height="38" loading="eager">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/') ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('products/pizza-box-liners') ?>">Pizza Box Liners</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('products/wholesale-pizza-box-liners') ?>">Wholesale</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('products/custom-pizza-box-liners') ?>">Custom Sizes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('applications') ?>">Applications</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('blog') ?>">Blog</a>
                </li>
                <li class="nav-item ms-lg-2">
                    <a class="btn btn-danger btn-sm px-3" href="<?= base_url('contact') ?>">
                        Get a Quote
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
