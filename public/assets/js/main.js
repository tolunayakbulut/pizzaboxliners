/* Pizza Box Liners — Main JS */

document.addEventListener('DOMContentLoaded', function () {
    // Highlight active nav link based on current path
    const currentPath = window.location.pathname.replace(/\/+$/, '');
    document.querySelectorAll('.navbar-nav .nav-link').forEach(link => {
        const linkPath = new URL(link.href).pathname.replace(/\/+$/, '');
        if (linkPath && currentPath.startsWith(linkPath) && linkPath !== '/pizzaboxliners/public') {
            link.classList.add('active');
        }
    });

    // Contact form: basic client-side validation feedback
    const form = document.getElementById('contactForm');
    if (form) {
        form.addEventListener('submit', function (e) {
            if (!form.checkValidity()) {
                e.preventDefault();
                e.stopPropagation();
            }
            form.classList.add('was-validated');
        });
    }

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                e.preventDefault();
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });
});
