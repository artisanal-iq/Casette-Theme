<?php
/**
 * Resources category template part.
 *
 * Specialized layout for resources category.
 *
 * @package CassetteBrutalGrid
 */
?>
<section class="py-20">
    <div class="container">
        <header class="text-center mb-12">
            <h1 class="text-hero mb-6"><?php single_cat_title(); ?></h1>
            <?php if ( category_description() ) : ?>
                <p class="text-subhead text-muted-foreground"><?php echo category_description(); ?></p>
            <?php endif; ?>
        </header>

        <div class="grid grid-cols-3 gap-8">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'template-parts/post', 'card' ); ?>
                <?php endwhile; ?>
            <?php else : ?>
                <p><?php esc_html_e( 'No resources found.', 'cassette-brutal' ); ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>
