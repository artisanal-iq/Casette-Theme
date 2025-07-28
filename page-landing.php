<?php
/**
 * Template Name: Landing Page
 *
 * Promotional landing page template.
 *
 * @package CassetteBrutalGrid
 */

get_header();
?>

<?php get_template_part('patterns/hero'); ?>

<div class="landing-content py-20 bg-surface">
    <?php while ( have_posts() ) : the_post(); ?>
        <?php echo cassette_brutal_container(
            '<div class="prose max-w-4xl mx-auto">' . apply_filters('the_content', get_the_content()) . '</div>'
        ); ?>
    <?php endwhile; ?>
</div>

<?php get_template_part('patterns/cta-card'); ?>

<?php get_footer(); ?>
