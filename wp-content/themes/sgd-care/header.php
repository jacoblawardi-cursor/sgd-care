<?php
/**
 * Header template for SGD Care
 *
 * @package SGD_Care
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <!-- Top Bar -->
    <div class="top-bar">
        <div class="container top-bar-inner">
            <div class="top-bar-badge">
                <i class="fas fa-certificate"></i>
                <span><strong>SGD Care</strong> &mdash; Specialized Home Maintenance by SGD Construction</span>
            </div>
            <div class="top-bar-contact">
                <a href="tel:<?php echo esc_attr( SGD_CARE_PHONE ); ?>">
                    <i class="fas fa-phone-alt"></i> <?php echo esc_html( SGD_CARE_PHONE ); ?>
                </a>
                <a href="mailto:<?php echo esc_attr( SGD_CARE_EMAIL ); ?>">
                    <i class="fas fa-envelope"></i> <?php echo esc_html( SGD_CARE_EMAIL ); ?>
                </a>
                <a href="<?php echo esc_url( sgd_care_whatsapp_url() ); ?>" target="_blank" rel="noopener">
                    <i class="fab fa-whatsapp"></i> Chat WhatsApp
                </a>
            </div>
        </div>
    </div>

    <!-- Main Navigation -->
    <div class="container">
        <nav class="main-nav">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo">
                <?php 
                $logo_url = sgd_care_get_logo_url();
                if ( $logo_url ) : ?>
                    <img src="<?php echo esc_url( $logo_url ); ?>" alt="<?php bloginfo( 'name' ); ?>">
                <?php else : ?>
                    <div class="site-logo-text">
                        <span class="logo-brand">SGD <span>CARE</span></span>
                        <span class="logo-sub">Home Maintenance & Care</span>
                    </div>
                <?php endif; ?>
            </a>

            <ul class="nav-menu">
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-link <?php echo is_front_page() ? 'active' : ''; ?>">Beranda</a></li>
                <li><a href="<?php echo esc_url( home_url( '/#layanan' ) ); ?>" class="nav-link">Layanan</a></li>
                <li><a href="<?php echo esc_url( home_url( '/#paket' ) ); ?>" class="nav-link">Paket Care</a></li>
                <li><a href="<?php echo esc_url( home_url( '/#tentang' ) ); ?>" class="nav-link">Tentang Kami</a></li>
                <li><a href="<?php echo esc_url( home_url( '/#kontak' ) ); ?>" class="nav-link">Hubungi Kami</a></li>
            </ul>

            <div class="nav-actions">
                <a href="<?php echo esc_url( sgd_care_whatsapp_url( 'Halo SGD Care, saya butuh bantuan perbaikan darurat untuk rumah saya.' ) ); ?>" target="_blank" rel="noopener" class="btn btn-accent btn-sm">
                    <i class="fab fa-whatsapp"></i> Emergency Care
                </a>
                <button class="mobile-toggle" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </nav>
    </div>
</header>
