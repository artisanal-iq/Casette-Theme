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
        <header id="masthead" class="site-header bg-surface border-b border-border">
            <div class="container">
                <div class="flex items-center justify-between py-3">
                    <!-- Site Branding -->
                    <div class="site-branding">
                        <?php if (has_custom_logo()) : ?>
                            <div class="custom-logo-wrapper">
                                <?php the_custom_logo(); ?>
                            </div>
                        <?php else : ?>
                            <h1 class="site-title text-subhead font-bold m-0">
                                <a href="<?php echo esc_url(home_url('/')); ?>" class="text-foreground hover:text-accent transition-colors">
                                    <?php bloginfo('name'); ?>
                                </a>
                            </h1>
                        <?php endif; ?>
                    </div>

                    <!-- Primary Navigation -->
                    <nav id="site-navigation" class="main-navigation hidden md:block" aria-label="<?php esc_attr_e('Primary Navigation', 'cassette-brutal'); ?>">
                        <?php if (has_nav_menu('primary')) : ?>
                            <?php wp_nav_menu(array(
                                'theme_location' => 'primary',
                                'menu_id'        => 'primary-menu',
                                'menu_class'     => 'primary-menu flex items-center space-x-6 m-0 p-0 list-none',
                                'container'      => false,
                                'fallback_cb'    => false,
                            )); ?>
                        <?php else : ?>
                            <ul class="primary-menu flex items-center space-x-6 m-0 p-0 list-none">
                                <li><a href="<?php echo esc_url(home_url('/')); ?>" class="nav-link text-body hover:text-accent transition-colors"><?php esc_html_e('Home', 'cassette-brutal'); ?></a></li>
                                <li><a href="<?php echo esc_url(home_url('/blog')); ?>" class="nav-link text-body hover:text-accent transition-colors"><?php esc_html_e('Blog', 'cassette-brutal'); ?></a></li>
                                <li><a href="<?php echo esc_url(home_url('/contact')); ?>" class="nav-link text-body hover:text-accent transition-colors"><?php esc_html_e('Contact', 'cassette-brutal'); ?></a></li>
                            </ul>
                        <?php endif; ?>
                    </nav>

                    <!-- Mobile Menu Toggle -->
                    <button class="menu-toggle md:hidden p-2" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only"><?php esc_html_e('Menu', 'cassette-brutal'); ?></span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
                
                <!-- Mobile Menu (Hidden by default) -->
                <div id="mobile-menu" class="mobile-menu hidden md:hidden bg-surface-elevated border-t border-border">
                    <div class="py-3">
                        <?php if (has_nav_menu('primary')) : ?>
                            <?php wp_nav_menu(array(
                                'theme_location' => 'primary',
                                'menu_id'        => 'mobile-menu-list',
                                'menu_class'     => 'mobile-menu-list space-y-1 m-0 p-0 list-none',
                                'container'      => false,
                                'fallback_cb'    => false,
                            )); ?>
                        <?php else : ?>
                            <ul class="mobile-menu-list space-y-1 m-0 p-0 list-none">
                                <li><a href="<?php echo esc_url(home_url('/')); ?>" class="block py-2 text-body hover:text-accent transition-colors"><?php esc_html_e('Home', 'cassette-brutal'); ?></a></li>
                                <li><a href="<?php echo esc_url(home_url('/blog')); ?>" class="block py-2 text-body hover:text-accent transition-colors"><?php esc_html_e('Blog', 'cassette-brutal'); ?></a></li>
                                <li><a href="<?php echo esc_url(home_url('/contact')); ?>" class="block py-2 text-body hover:text-accent transition-colors"><?php esc_html_e('Contact', 'cassette-brutal'); ?></a></li>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </header>
    <?php endif; ?>

    <main id="main" class="site-main">

<script>
// Simple mobile menu toggle
document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.querySelector('.menu-toggle');
    const mobileMenu = document.querySelector('#mobile-menu');
    
    if (menuToggle && mobileMenu) {
        menuToggle.addEventListener('click', function() {
            const isExpanded = this.getAttribute('aria-expanded') === 'true';
            this.setAttribute('aria-expanded', !isExpanded);
            mobileMenu.classList.toggle('hidden');
        });
    }
});
</script>

