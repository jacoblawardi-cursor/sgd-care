/**
 * SGD Care - Frontend JavaScript
 * Interactions, Mobile Menu, Care Diagnostic Calculator
 */

document.addEventListener('DOMContentLoaded', function () {
    // Mobile Navigation Toggle
    const mobileToggle = document.querySelector('.mobile-toggle');
    const navMenu = document.querySelector('.nav-menu');

    if (mobileToggle && navMenu) {
        mobileToggle.addEventListener('click', function () {
            navMenu.classList.toggle('open');
            const icon = mobileToggle.querySelector('i');
            if (icon) {
                icon.classList.toggle('fa-bars');
                icon.classList.toggle('fa-times');
            }
        });
    }

    // Care Estimator & Consultation Calculator
    const calcForm = document.getElementById('care-estimator-form');
    if (calcForm) {
        const serviceSelect = document.getElementById('calc-service');
        const propertyType = document.getElementById('calc-property');
        const areaInput = document.getElementById('calc-area');
        const priceDisplay = document.getElementById('calc-price-display');
        const waCtaBtn = document.getElementById('calc-wa-cta');

        function updateEstimate() {
            if (!serviceSelect || !propertyType || !areaInput) return;

            const serviceBaseRates = {
                'inspection': 350000,       // Full Home Diagnostic & Checkup
                'waterproofing': 750000,    // Roof & Leak Diagnostic
                'ac-mep': 450000,           // AC & Electrical Diagnostics
                'structural': 850000,       // Wood & Wall Structural Care
                'annual-care': 2500000      // Annual Care Retainer
            };

            const selectedService = serviceSelect.value || 'inspection';
            const baseRate = serviceBaseRates[selectedService] || 350000;
            const area = parseFloat(areaInput.value) || 120;
            
            // Property multiplier
            let multiplier = 1.0;
            if (propertyType.value === 'luxury') multiplier = 1.35;
            if (propertyType.value === 'commercial') multiplier = 1.5;
            if (propertyType.value === 'apartment') multiplier = 0.9;

            // Area factor
            let areaFactor = 1.0;
            if (area > 200) areaFactor = 1.25;
            if (area > 400) areaFactor = 1.6;

            const finalEstimate = Math.round((baseRate * multiplier * areaFactor) / 25000) * 25000;
            const formattedPrice = 'Rp ' + finalEstimate.toLocaleString('id-ID');

            if (priceDisplay) {
                priceDisplay.textContent = formattedPrice;
            }

            // Update WhatsApp CTA URL
            if (waCtaBtn) {
                const serviceName = serviceSelect.options[serviceSelect.selectedIndex].text;
                const propName = propertyType.options[propertyType.selectedIndex].text;
                const phone = (window.sgdCareData && window.sgdCareData.whatsappNumber) ? window.sgdCareData.whatsappNumber : '628116016868';
                const msg = `Halo SGD Care, saya ingin konsultasi perawatan properti:\n- Layanan: ${serviceName}\n- Jenis Properti: ${propName}\n- Luas Bangunan: ~${area} m²\n- Estimasi awal: ${formattedPrice}\nMohon informasi jadwal inspeksi teknisi.`;
                waCtaBtn.href = `https://wa.me/${phone}?text=${encodeURIComponent(msg)}`;
            }
        }

        serviceSelect.addEventListener('change', updateEstimate);
        propertyType.addEventListener('change', updateEstimate);
        areaInput.addEventListener('input', updateEstimate);

        // Run once on load
        updateEstimate();
    }

    // FAQ Accordion
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(item => {
        const header = item.querySelector('.faq-question');
        if (header) {
            header.addEventListener('click', () => {
                const isOpen = item.classList.contains('active');
                faqItems.forEach(i => i.classList.remove('active'));
                if (!isOpen) {
                    item.classList.add('active');
                }
            });
        }
    });
});
