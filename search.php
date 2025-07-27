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
                                <article id="post-<?php the_ID(); ?>" <?php post_class('post-entry'); ?>>
                                    <div class="card card-elevated interactive">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <div class="mb-8">
                                                <a href="<?php the_permalink(); ?>">
                                                    <?php the_post_thumbnail('large', array('class' => 'w-full h-64 object-cover rounded-lg')); ?>
                                                </a>
                                            </div>
                                        <?php endif; ?>
                                        <div class="pb-6 border-b border-border mb-6">
                                            <h2 class="text-headline font-semibold mb-3">
                                                <a href="<?php the_permalink(); ?>" class="text-foreground hover:text-accent transition-colors">
                                                    <?php the_title(); ?>
                                                </a>
                                            </h2>
                                            <div class="text-caption text-muted-foreground">
                                                <?php echo get_the_date(); ?> • <?php echo get_the_author(); ?>
                                            </div>
                                        </div>
                                        <div class="text-body mb-6">
                                            <?php the_excerpt(); ?>
                                        </div>
                                        <a href="<?php the_permalink(); ?>" class="btn btn-primary"><?php esc_html_e('Read More', 'cassette-brutal'); ?></a>
                                    </div>
                                </article>
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
