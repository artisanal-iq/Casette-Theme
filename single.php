<?php
/**
 * The template for displaying all single posts
 *
 * @package CassetteBrutalGrid
 * @since 1.0.0
 */

get_header(); ?>

<div class="min-h-screen bg-background">
    <?php while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class('single-post'); ?>>
            <?php get_template_part("template-parts/header","single"); ?>

            <!-- Featured Image -->
            <?php if (has_post_thumbnail()) : ?>
                <div class="post-thumbnail py-8">
                    <?php echo cassette_brutal_container(
                        '<div class="featured-image-wrapper rounded-lg overflow-hidden shadow-elegant">' .
                        get_the_post_thumbnail(get_the_ID(), 'full', array(
                            'class' => 'w-full h-auto object-cover',
                            'alt' => get_the_title()
                        )) .
                        '</div>'
                    ); ?>
                </div>
            <?php endif; ?>

            <!-- Post Content -->
            <div class="post-content py-12">
                <?php echo cassette_brutal_container(
                    cassette_brutal_grid('
                        <div class="col-span-8">
                            <div class="prose prose-lg max-w-none">
                                ' . apply_filters('the_content', get_the_content()) . '
                            </div>
                            
                            <!-- Post Tags -->
                            ' . (get_the_tag_list() ? '
                                <div class="post-tags py-8 border-t border-border mt-12">
                                    <h4 class="text-subhead font-medium mb-4">' . esc_html__('Tags', 'cassette-brutal') . '</h4>
                                    <div class="flex flex-wrap gap-2">
                                        ' . get_the_tag_list('', '') . '
                                    </div>
                                </div>
                            ' : '') . '
                            
                            <!-- Author Bio -->
                            ' . (get_the_author_meta('description') ? 
                                cassette_brutal_card('
                                    <div class="author-bio flex gap-4">
                                        <div class="author-avatar flex-shrink-0">
                                            ' . get_avatar(get_the_author_meta('ID'), 80, '', '', array('class' => 'rounded-full')) . '
                                        </div>
                                        <div class="author-info">
                                            <h4 class="text-subhead font-medium mb-2">' . esc_html(get_the_author()) . '</h4>
                                            <p class="text-body text-muted-foreground">
                                                ' . esc_html(get_the_author_meta('description')) . '
                                            </p>
                                        </div>
                                    </div>
                                ', 'elevated', false, 'mt-12') : ''
                            ) . '
                        </div>
                        
                        <div class="col-span-4">
                            <aside class="sidebar sticky top-8">
                                <!-- Sidebar Widgets -->
                                ' . (is_active_sidebar('sidebar-1') ? '<div class="widget-area">' . get_sidebar() . '</div>' : '') . '
                            </aside>
                        </div>
                    ', 12, 'lg')
                ); ?>
            </div>

            <!-- Post Navigation -->
            <?php cassette_brutal_post_navigation(); ?>

            <!-- Comments -->
            <?php if (comments_open() || get_comments_number()) : ?>
                <div class="comments-section py-16 border-t border-border">
                    <?php echo cassette_brutal_container('
                        <div class="max-w-4xl mx-auto">
                            ' . comments_template() . '
                        </div>
                    '); ?>
                </div>
            <?php endif; ?>
        </article>
    <?php endwhile; ?>
</div>

<?php get_footer(); ?>

