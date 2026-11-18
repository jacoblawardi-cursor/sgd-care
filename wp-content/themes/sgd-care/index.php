<?php
/**
 * Main template file for SGD Care
 *
 * @package SGD_Care
 */

get_header();
?>

<main id="primary" class="site-main section">
    <div class="container">
        <?php if ( have_posts() ) : ?>
            <header class="section-header">
                <h1 class="section-title"><?php single_post_title(); ?></h1>
            </header>

            <div class="site-content-area" style="background: #ffffff; padding: 40px; border-radius: var(--radius-lg); border: 1px solid var(--color-border); box-shadow: var(--shadow-soft);">
                <?php
                while ( have_posts() ) :
                    the_post();
                    the_content();
                endwhile;
                ?>
            </div>
        <?php else : ?>
            <div class="section-header">
                <h2 class="section-title">Halaman Tidak Ditemukan</h2>
                <p>Silakan kembali ke <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Beranda</a>.</p>
            </div>
        <?php endif; ?>
    </div>
</main>

<?php
get_footer();
