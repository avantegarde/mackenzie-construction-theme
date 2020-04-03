<?php
/**
 * Template Name: Contact
 *
 * The default page for contact page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Ferus_Core
 */

get_header(); ?>

    <?php
    $iHeight = header_height_get_meta( 'header_height_size' );
    if($iHeight) {
        $bannerHeight = $iHeight;
    } else {
        $bannerHeight = '';
    }
    ?>
    <?php if($bannerHeight != 'None'): ?>
        <section id="page-header" class="<?php echo strtolower($bannerHeight) ?>" style="background-image:url(<?php echo $image; ?>);">
            <div id="googlemap">
                <?php
                $customHeaderCont = html_entity_decode( custom_header_content_get_meta('custom_header_content_content') );
                ?>
                <?php if($customHeaderCont): ?>
                    <iframe style="border:none;min-height:400px;" src="<?php echo $customHeaderCont; ?>" width="500" height="500" frameborder="0" allowfullscreen></iframe>
                <?php else : ?>
                    <iframe style="border:none;min-height:400px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5854079.308264487!2d-76.526646!3d44.239245!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc40d607974d977f5!2sFerusMedia!5e0!3m2!1sen!2sca!4v1481120813627" width="500" height="500" frameborder="0" allowfullscreen></iframe>
                <?php endif; ?>
            </div>
        </section>
    <?php endif; ?>
    <!-- Page Top Widgets -->
<?php if ( is_active_sidebar( 'page-top' ) ) : ?>
    <section id="page-top" class="widget-area" role="complementary">
        <?php dynamic_sidebar( 'page-top' ); ?>
    </section>
<?php endif; ?>

    <!-- Inner Top Widgets -->
<?php if ( is_active_sidebar( 'inner-top' ) ) : ?>
    <section id="inner-top" class="widget-area" role="complementary">
        <?php dynamic_sidebar( 'inner-top' ); ?>
    </section>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main container" role="main">

            <!-- BreadCrumbs -->
            <?php
            if (function_exists('yoast_breadcrumb')) {
                yoast_breadcrumb('<div id="breadcrumbs" class="col-md-12">', '</div>');
            }
            ?>

            <!-- Contact Details -->
            <section id="contact-details">
                <div class="row">

                    <?php the_content(); ?>

                </div>
            </section>

            <?php // If comments are open or we have at least one comment, load up the comment template.
            /*if (comments_open() || get_comments_number()) :
                comments_template();
            endif;*/ ?>

        </main><!-- #main -->
    </div><!-- #primary -->
<?php endwhile; // End of the loop. ?>

    <!-- Inner Bottom Widgets -->
<?php if ( is_active_sidebar( 'inner-bottom' ) ) : ?>
    <section id="inner-bottom" class="widget-area" role="complementary">
        <?php dynamic_sidebar( 'inner-bottom' ); ?>
    </section>
<?php endif; ?>

    <!-- Page Bottom Widgets -->
<?php if ( is_active_sidebar( 'page-bottom' ) ) : ?>
    <section id="page-bottom" class="widget-area" role="complementary">
        <?php dynamic_sidebar( 'page-bottom' ); ?>
    </section>
<?php endif; ?>

<?php
get_footer();
