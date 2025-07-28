<?php
/**
 * Site header template part.
 *
 * This markup is loaded on all pages except the home/front page.
 *
 * @package CassetteBrutalGrid
 */
?>
<header id="masthead" class="site-header bg-surface border-b border-border">
    <div class="container">
        <div class="flex items-center justify-between py-3">
            <!-- Site Branding -->
            <div class="site-branding">
                <?php if ( has_custom_logo() ) : ?>
                    <div class="custom-logo-wrapper">
                        <?php the_custom_logo(); ?>
                    </div>
                <?php else : ?>
                    <h1 class="site-title text-subhead font-bold m-0">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-foreground hover:text-accent transition-colors">
                            <?php bloginfo( 'name' ); ?>
                        </a>
                    </h1>
                <?php endif; ?>
            </div>

            <!-- Primary Navigation -->
            <nav id="site-navigation" class="main-navigation hidden md:block" aria-label="<?php esc_attr_e( 'Primary Navigation', 'cassette-brutal' ); ?>">
                <?php if ( has_nav_menu( 'primary' ) ) : ?>
                    <?php wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'menu_id'        => 'primary-menu',
                        'menu_class'     => 'primary-menu flex items-center space-x-6 m-0 p-0 list-none',
                        'container'      => false,
                        'fallback_cb'    => false,
                    ) ); ?>
                <?php else : ?>
                    <ul class="primary-menu flex items-center space-x-6 m-0 p-0 list-none">
                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-link text-body hover:text-accent transition-colors"><?php esc_html_e( 'Home', 'cassette-brutal' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" class="nav-link text-body hover:text-accent transition-colors"><?php esc_html_e( 'Blog', 'cassette-brutal' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="nav-link text-body hover:text-accent transition-colors"><?php esc_html_e( 'Contact', 'cassette-brutal' ); ?></a></li>
                    </ul>
                <?php endif; ?>
            </nav>

            <!-- Mobile Menu Toggle -->
            <button class="menu-toggle md:hidden p-2" aria-controls="mobile-menu" aria-expanded="false">
                <span class="sr-only"><?php esc_html_e( 'Menu', 'cassette-brutal' ); ?></span>
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>

        <!-- Mobile Menu (Hidden by default) -->
        <div id="mobile-menu" class="mobile-menu hidden md:hidden bg-surface-elevated border-t border-border">
            <div class="py-3">
                <?php if ( has_nav_menu( 'primary' ) ) : ?>
                    <?php wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'menu_id'        => 'mobile-menu-list',
                        'menu_class'     => 'mobile-menu-list space-y-1 m-0 p-0 list-none',
                        'container'      => false,
                        'fallback_cb'    => false,
                    ) ); ?>
                <?php else : ?>
                    <ul class="mobile-menu-list space-y-1 m-0 p-0 list-none">
                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="block py-2 text-body hover:text-accent transition-colors"><?php esc_html_e( 'Home', 'cassette-brutal' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" class="block py-2 text-body hover:text-accent transition-colors"><?php esc_html_e( 'Blog', 'cassette-brutal' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="block py-2 text-body hover:text-accent transition-colors"><?php esc_html_e( 'Contact', 'cassette-brutal' ); ?></a></li>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
    </div>
</header>
