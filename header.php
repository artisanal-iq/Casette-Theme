<?php
/**
 * The header for our theme
 *
 * @package CassetteBrutalGrid
 * @since 1.0.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
    <a class="skip-link sr-only" href="#main"><?php esc_html_e('Skip to content', 'cassette-brutal'); ?></a>

    <?php 
    // Hide header on homepage and front page
    if (!is_home() && !is_front_page()) : ?>
        <?php get_template_part("template-parts/header"); ?>

    <?php endif; ?>

    <main id="main" class="site-main">

