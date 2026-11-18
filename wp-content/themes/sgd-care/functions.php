<?php
/**
 * SGD Care Theme Functions & Definitions
 *
 * @package SGD_Care
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

define( 'SGD_CARE_VERSION', '1.0.0' );
define( 'SGD_CARE_DIR', get_template_directory() );
define( 'SGD_CARE_URI', get_template_directory_uri() );

// Core Contact & Business Identity Constants
define( 'SGD_CARE_PHONE', '08116016868' );
define( 'SGD_CARE_PHONE_INTL', '628116016868' );
define( 'SGD_CARE_EMAIL', 'care@sgd-corp.com' );
define( 'SGD_CARE_PARENT_URL', 'https://sgd-corp.com' );
define( 'SGD_CARE_INSTAGRAM_HANDLE', '@sgdcare.id' );
define( 'SGD_CARE_ADDRESS', 'Ruko Permata Regency Blok D, Srengseng, Kembangan, Jakarta Barat 11630' );

/**
 * Theme Setup
 */
function sgd_care_setup() {
    load_theme_textdomain( 'sgd-care', SGD_CARE_DIR . '/languages' );

    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo', array(
        'height'      => 80,
        'width'       => 280,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script'
    ) );

    register_nav_menus( array(
        'primary' => __( 'Primary Navigation', 'sgd-care' ),
        'footer'  => __( 'Footer Navigation', 'sgd-care' ),
    ) );
}
add_action( 'after_setup_theme', 'sgd_care_setup' );

/**
 * Enqueue scripts and styles.
 */
function sgd_care_scripts() {
    // Google Fonts: Plus Jakarta Sans (Modern Clean), Inter, Cinzel
    wp_enqueue_style(
        'sgd-care-fonts',
        'https://fonts.googleapis.com/css2?family=Cinzel:wght@600;700;800&family=Inter:wght@300;400;500;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap',
        array(),
        null
    );

    // FontAwesome 6 CDN for modern maintenance icons
    wp_enqueue_style(
        'font-awesome-6',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css',
        array(),
        '6.5.1'
    );

    $css_ver = file_exists( SGD_CARE_DIR . '/assets/css/main.css' ) ? filemtime( SGD_CARE_DIR . '/assets/css/main.css' ) : SGD_CARE_VERSION;
    $js_ver  = file_exists( SGD_CARE_DIR . '/assets/js/main.js' ) ? filemtime( SGD_CARE_DIR . '/assets/js/main.js' ) : SGD_CARE_VERSION;

    wp_enqueue_style( 'sgd-care-main', SGD_CARE_URI . '/assets/css/main.css', array(), $css_ver );
    wp_enqueue_script( 'sgd-care-script', SGD_CARE_URI . '/assets/js/main.js', array(), $js_ver, true );

    // Localize data for JavaScript
    wp_localize_script( 'sgd-care-script', 'sgdCareData', array(
        'whatsappNumber' => SGD_CARE_PHONE_INTL,
        'siteUrl'        => home_url(),
        'ajaxUrl'        => admin_url( 'admin-ajax.php' )
    ) );
}
add_action( 'wp_enqueue_scripts', 'sgd_care_scripts' );

/**
 * Helper: WhatsApp Direct URL Generator
 */
function sgd_care_whatsapp_url( $message = '' ) {
    $default = "Halo SGD Care, saya ingin konsultasi mengenai layanan perawatan & perbaikan rumah.";
    $text = ! empty( $message ) ? $message : $default;
    return 'https://wa.me/' . SGD_CARE_PHONE_INTL . '?text=' . rawurlencode( $text );
}

/**
 * Helper: Get Brand Logo with fallback
 */
function sgd_care_get_logo_url() {
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    if ( $custom_logo_id ) {
        $logo = wp_get_attachment_image_src( $custom_logo_id, 'full' );
        if ( $logo ) {
            return $logo[0];
        }
    }
    
    $local_logo = SGD_CARE_DIR . '/assets/images/logo/sgd-care-horizontal.png';
    if ( file_exists( $local_logo ) ) {
        return SGD_CARE_URI . '/assets/images/logo/sgd-care-horizontal.png';
    }
    return '';
}

/**
 * Auto-activate theme during fresh install if not active
 */
function sgd_care_switch_theme() {
    if ( get_option( 'template' ) !== 'sgd-care' ) {
        switch_theme( 'sgd-care' );
    }
}
add_action( 'after_setup_theme', 'sgd_care_switch_theme', 1 );

/**
 * Output Favicon in Header and Admin Screens
 */
function sgd_care_favicon() {
    $favicon_url = SGD_CARE_URI . '/assets/images/logo/sgd-care-logogram.png';
    echo '<link rel="icon" type="image/png" href="' . esc_url( $favicon_url ) . '">' . "\n";
    echo '<link rel="shortcut icon" type="image/png" href="' . esc_url( $favicon_url ) . '">' . "\n";
    echo '<link rel="apple-touch-icon" href="' . esc_url( $favicon_url ) . '">' . "\n";
}
add_action( 'wp_head', 'sgd_care_favicon', 2 );
add_action( 'login_head', 'sgd_care_favicon', 2 );
add_action( 'admin_head', 'sgd_care_favicon', 2 );
