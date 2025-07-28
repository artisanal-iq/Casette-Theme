<?php
/**
 * The template for displaying all pages
 *
 * @package CassetteBrutalGrid
 * @since 1.0.0
 */

get_header(); ?>

<div class="min-h-screen bg-background">
    <?php while (have_posts()) : the_post(); ?>
        <article id="page-<?php the_ID(); ?>" <?php post_class('single-page'); ?>>
            <?php get_template_part("template-parts/page","header"); ?>

            <!-- Featured Image -->
            <?php if (has_post_thumbnail()) : ?>
                <div class="page-thumbnail py-8">
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

            <!-- Page Content -->
            <div class="page-content py-12">
                <?php 
                // Check if this is a full-width page
                $is_full_width = get_post_meta(get_the_ID(), '_cassette_brutal_full_width', true);
                
                if ($is_full_width) {
                    // Full-width layout
                    echo cassette_brutal_container('
                        <div class="prose prose-lg max-w-none">
                            ' . apply_filters('the_content', get_the_content()) . '
                        </div>
                    ');
                } else {
                    // Standard layout with sidebar
                    echo cassette_brutal_container(
                        cassette_brutal_grid('
                            <div class="col-span-8">
                                <div class="prose prose-lg max-w-none">
                                    ' . apply_filters('the_content', get_the_content()) . '
                                </div>
                            </div>
                            
                            <div class="col-span-4">
                                <aside class="sidebar">
                                    ' . (is_active_sidebar('sidebar-1') ? dynamic_sidebar('sidebar-1') : '') . '
                                </aside>
                            </div>
                        ', 12, 'lg')
                    );
                }
                ?>
            </div>

            <!-- Page Navigation for Child Pages -->
            <?php
            $children = get_pages(array(
                'child_of' => get_the_ID(),
                'sort_column' => 'menu_order'
            ));
            
            if ($children) : ?>
                <div class="child-pages py-16 bg-surface-elevated border-t border-border">
                    <?php echo cassette_brutal_container('
                        <div class="text-center mb-12">
                            <h2 class="text-headline mb-4">' . __('Explore More', 'cassette-brutal') . '</h2>
                            <p class="text-body text-muted-foreground">
                                ' . __('Discover related pages and resources', 'cassette-brutal') . '
                            </p>
                        </div>
                        
                        ' . cassette_brutal_grid('
                    '); ?>
                    
                    <?php foreach ($children as $child) : ?>
                        <div class="col-span-4">
                            <?php echo cassette_brutal_card('
                                <div class="child-page">
                                    ' . (has_post_thumbnail($child->ID) ? 
                                        '<div class="page-thumbnail mb-4">
                                            <a href="' . get_permalink($child) . '">
                                                ' . get_the_post_thumbnail($child->ID, 'medium', array('class' => 'w-full h-32 object-cover rounded')) . '
                                            </a>
                                        </div>' : ''
                                    ) . '
                                    
                                    <h3 class="text-subhead font-medium mb-2">
                                        <a href="' . get_permalink($child) . '" class="text-foreground hover:text-accent transition-colors">
                                            ' . $child->post_title . '
                                        </a>
                                    </h3>
                                    
                                    ' . ($child->post_excerpt ? 
                                        '<p class="text-body text-muted-foreground mb-4">' . $child->post_excerpt . '</p>' : 
                                        '<p class="text-body text-muted-foreground mb-4">' . wp_trim_words($child->post_content, 20) . '</p>'
                                    ) . '
                                    
                                    ' . cassette_brutal_button('Learn More', 'minimal', 'sm') . '
                                </div>
                            ', 'default', true); ?>
                        </div>
                    <?php endforeach; ?>
                    
                    <?php echo '
                        ', 12, 'lg') . '
                    '); ?>
                </div>
            <?php endif; ?>

            <!-- Comments (if enabled for pages) -->
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

