<?php
/**
 * Header section for pages.
 *
 * @package CassetteBrutalGrid
 */
?>
<header class="page-header py-20 gradient-subtle">
    <?php echo cassette_brutal_container('
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="page-title text-hero mb-6 animate-fade-in">' . get_the_title() . '</h1>
            ' . ( get_the_excerpt() ? '<div class="page-excerpt text-subhead text-muted-foreground animate-slide-up">' . get_the_excerpt() . '</div>' : '' ) . '
        </div>
    '); ?>
</header>
