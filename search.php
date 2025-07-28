<?php
/**
 * The template for displaying search results
 *
 * @package CassetteBrutalGrid
 */

get_header(); ?>

<div class="min-h-screen bg-background">
    <section class="py-20">
        <div class="container">
            <div class="text-center mb-16">
                <h1 class="text-hero mb-6"><?php printf(esc_html__('Search Results for: %s', 'cassette-brutal'), '<span class="text-accent">' . get_search_query() . '</span>'); ?></h1>
            </div>

            <div class="grid grid-cols-12 gap-8">
                <div class="col-span-8">
                    <div class="space-y-12">
                        <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : the_post(); ?>
                                <?php get_template_part('template-parts/post', 'card'); ?>
                            <?php endwhile; ?>

                            <div class="pagination-wrapper py-12">
                                <?php
                                the_posts_pagination(array(
                                    'mid_size'  => 2,
                                    'prev_text' => esc_html__('← Previous', 'cassette-brutal'),
                                    'next_text' => esc_html__('Next →', 'cassette-brutal'),
                                    'class'     => 'pagination flex justify-center gap-2',
                                ));
                                ?>
                            </div>
                        <?php else : ?>
                            <div class="card card-minimal">
                                <div class="text-center py-16">
                                    <h2 class="text-headline mb-6"><?php esc_html_e('Nothing Found', 'cassette-brutal'); ?></h2>
                                    <p class="text-body text-muted-foreground mb-8">
                                        <?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'cassette-brutal'); ?>
                                    </p>
                                    <?php get_search_form(); ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-span-4">
                    <aside class="sidebar">
                        <?php if (is_active_sidebar('sidebar-1')) : ?>
                            <div class="widget-area space-y-8">
                                <?php dynamic_sidebar('sidebar-1'); ?>
                            </div>
                        <?php endif; ?>
                    </aside>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>
