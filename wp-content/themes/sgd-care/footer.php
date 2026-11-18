<?php
/**
 * Footer template for SGD Care
 *
 * @package SGD_Care
 */
?>

<footer class="site-footer">
    <div class="container">
        <div class="footer-grid">
            <!-- Col 1: About Unit -->
            <div class="footer-col">
                <h4>SGD Care</h4>
                <p>
                    Unit bisnis spesialis perawatan & pemeliharaan properti dari <strong>SGD Construction</strong>. Memberikan standar keteknikan konstruksi presisi untuk merawat, memperbaiki, dan memperpanjang usia hunian Anda.
                </p>
                <div class="footer-badge">
                    <span>A Business Unit of</span>
                    <a href="<?php echo esc_url( SGD_CARE_PARENT_URL ); ?>" target="_blank" rel="noopener">SGD Construction &rarr;</a>
                </div>
            </div>

            <!-- Col 2: Services -->
            <div class="footer-col">
                <h4>Layanan Unggulan</h4>
                <ul class="footer-links">
                    <li><a href="#layanan"><i class="fas fa-chevron-right"></i> Deteksi Bocor & Waterproofing</a></li>
                    <li><a href="#layanan"><i class="fas fa-chevron-right"></i> Servis & Diagnostik AC/MEP</a></li>
                    <li><a href="#layanan"><i class="fas fa-chevron-right"></i> Pemeliharaan Pipa & Elektrikal</a></li>
                    <li><a href="#layanan"><i class="fas fa-chevron-right"></i> Perawatan Kayu & Pengecatan Ulang</a></li>
                    <li><a href="#layanan"><i class="fas fa-chevron-right"></i> Home Health Check Komprehensif</a></li>
                </ul>
            </div>

            <!-- Col 3: Care Packages -->
            <div class="footer-col">
                <h4>Paket Perawatan</h4>
                <ul class="footer-links">
                    <li><a href="#paket"><i class="fas fa-chevron-right"></i> Essential Home Care</a></li>
                    <li><a href="#paket"><i class="fas fa-chevron-right"></i> Comfort Living Retainer</a></li>
                    <li><a href="#paket"><i class="fas fa-chevron-right"></i> Total Estate Protection</a></li>
                    <li><a href="#estimasi"><i class="fas fa-chevron-right"></i> Kalkulator Estimasi Biaya</a></li>
                    <li><a href="#tentang"><i class="fas fa-chevron-right"></i> Standar Kualitas SGD</a></li>
                </ul>
            </div>

            <!-- Col 4: Contact -->
            <div class="footer-col">
                <h4>Hubungi Teknisi Care</h4>
                <ul class="footer-contact-list">
                    <li>
                        <i class="fas fa-map-marker-alt"></i>
                        <span><?php echo esc_html( SGD_CARE_ADDRESS ); ?></span>
                    </li>
                    <li>
                        <i class="fas fa-phone-alt"></i>
                        <span>Hotline: <a href="tel:<?php echo esc_attr( SGD_CARE_PHONE ); ?>"><?php echo esc_html( SGD_CARE_PHONE ); ?></a></span>
                    </li>
                    <li>
                        <i class="fas fa-envelope"></i>
                        <span>Email: <a href="mailto:<?php echo esc_attr( SGD_CARE_EMAIL ); ?>"><?php echo esc_html( SGD_CARE_EMAIL ); ?></a></span>
                    </li>
                    <li>
                        <i class="fab fa-instagram"></i>
                        <span>Instagram: <?php echo esc_html( SGD_CARE_INSTAGRAM_HANDLE ); ?></span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; <?php echo date( 'Y' ); ?> SGD Care. All rights reserved. Powered by PT Sunggiardi Prima Konstruksi.</p>
            <p>Designed with Genshin Emerald Care Aesthetic.</p>
        </div>
    </div>
</footer>

<!-- Floating WhatsApp CTA -->
<a href="<?php echo esc_url( sgd_care_whatsapp_url() ); ?>" class="wa-float" target="_blank" rel="noopener" aria-label="Konsultasi WhatsApp">
    <i class="fab fa-whatsapp"></i>
    <span class="wa-tooltip">Konsultasi Teknisi SGD Care</span>
</a>

<?php wp_footer(); ?>
</body>
</html>
