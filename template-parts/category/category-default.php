<?php
/**
 * Default category template part.
 *
 * Displays standard archive layout.
 *
 * @package CassetteBrutalGrid
 */
?>
<section class="py-20">
    <div class="container">
        <header class="text-center mb-16">
            <h1 class="text-hero mb-6"><?php single_cat_title(); ?></h1>
            <?php if ( category_description() ) : ?>
                <p class="text-subhead text-muted-foreground"><?php echo category_description(); ?></p>
            <?php endif; ?>
        </header>

        <div class="grid grid-cols-12 gap-8">
            <div class="col-span-8">
                <div class="space-y-12">
                    <?php if ( have_posts() ) : ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                            <?php get_template_part( 'template-parts/post', 'card' ); ?>
                        <?php endwhile; ?>
                        <div class="pagination-wrapper py-12">
                            <?php
                            the_posts_pagination( array(
                                'mid_size'  => 2,
                                'prev_text' => esc_html__( '← Previous', 'cassette-brutal' ),
                                'next_text' => esc_html__( 'Next →', 'cassette-brutal' ),
                                'class'     => 'pagination flex justify-center gap-2',
                            ) );
                            ?>
                        </div>
                    <?php else : ?>
                        <p><?php esc_html_e( 'No posts found.', 'cassette-brutal' ); ?></p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-span-4">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</section>
