<?php
/**
 * Generic page template for SGD Care
 *
 * @package SGD_Care
 */

get_header();
?>

<main id="primary" class="site-main section">
    <div class="container" style="max-width: 900px;">
        <?php while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="section-header">
                    <h1 class="section-title"><?php the_title(); ?></h1>
                </header>

                <div class="page-content" style="background: #ffffff; padding: 48px; border-radius: var(--radius-lg); border: 1px solid var(--color-border); box-shadow: var(--shadow-soft); font-size: 1.05rem; line-height: 1.8;">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; ?>
    </div>
</main>

<?php
get_footer();
