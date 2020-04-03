<?php
/**
 * The Homepage of the site
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ferus_core
 */



get_header(); ?>

<div id="primary" class="content-area page-body">
    <main id="main" class="site-main" role="main">

        <?php while (have_posts()) : the_post(); ?>
            <?php echo the_content(); ?>
        <?php endwhile; ?>

        <section id="home-gallery" class="brown home-gallery">
            <div class="container">
                <h3 class="section-title block-title center" data-color="white">Our Work</h3>
                <?php echo do_shortcode('[instagram-feed]'); ?>
            </div>
        </section>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
