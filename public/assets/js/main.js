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

    // Conversion tracking: WhatsApp clicks, mailto clicks, contact form submits.
    // Sends a GA4 event always; sends a Google Ads conversion only when
    // window.pblTracking has an adsId and a label for that action.
    function trackConversion(action, params) {
        if (typeof gtag !== 'function') return;
        const cfg = window.pblTracking || {};
        const base = Object.assign({ page_path: window.location.pathname, transport_type: 'beacon' }, params);

        gtag('event', action, base);

        const label = cfg.labels && cfg.labels[action];
        if (cfg.adsId && label) {
            gtag('event', 'conversion', { send_to: cfg.adsId + '/' + label, transport_type: 'beacon' });
        }
    }

    document.addEventListener('click', function (e) {
        const link = e.target.closest('a[href]');
        if (!link) return;
        const href = link.getAttribute('href');
        const location = link.closest('.sticky-contact') ? 'sticky'
            : link.closest('.cta-section') ? 'cta'
            : link.closest('footer') ? 'footer'
            : 'content';

        if (/^https:\/\/(wa\.me|api\.whatsapp\.com)\//.test(href)) {
            trackConversion('whatsapp_click', { link_location: location });
        } else if (href.indexOf('mailto:') === 0) {
            trackConversion('email_click', { link_location: location });
        }
    });

    // Any form marked data-track="contact" counts as a contact form submit
    document.querySelectorAll('form[data-track="contact"]').forEach(function (trackedForm) {
        trackedForm.addEventListener('submit', function () {
            if (trackedForm.checkValidity()) {
                trackConversion('contact_form_submit', { link_location: 'form' });
            }
        });
    });

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
