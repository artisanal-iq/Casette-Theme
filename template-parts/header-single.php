<?php
/**
 * Slim header for single posts.
 *
 * Displays the post title and meta information.
 *
 * @package CassetteBrutalGrid
 */
?>
<header class="post-header py-20 gradient-subtle">
    <?php echo cassette_brutal_container('
        <div class="max-w-4xl mx-auto text-center">
            <div class="post-meta mb-6">
                <div class="flex items-center justify-center gap-4 text-caption text-muted-foreground mb-4">
                    <time datetime="' . esc_attr( get_the_date( 'c' ) ) . '">' . esc_html( get_the_date() ) . '</time>
                    <span>•</span>
                    <span>' . esc_html( get_the_author() ) . '</span>
                    ' . ( get_the_category_list() ? '<span>•</span><span>' . get_the_category_list( ', ' ) . '</span>' : '' ) . '
                </div>
            </div>
            <h1 class="post-title text-hero mb-6 animate-fade-in">' . get_the_title() . '</h1>
            ' . ( get_the_excerpt() ? '<div class="post-excerpt text-subhead text-muted-foreground animate-slide-up">' . get_the_excerpt() . '</div>' : '' ) . '
        </div>
    '); ?>
</header>
