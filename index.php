<?php
/**
 * The main template file
 *
 * @package CassetteBrutalGrid
 * @since 1.0.0
 */

get_header(); ?>

<div class="min-h-screen bg-background">
    <?php if (is_home() || is_front_page()) : ?>
        <!-- Hero Section - Cassette Modernism -->
        <section class="py-32 gradient-subtle">
            <div class="container">
                <div class="text-center max-w-4xl mx-auto">
                    <h1 class="text-hero mb-8 animate-fade-in hero-title">
                        <span class="hero-title-main"><?php echo esc_html(get_theme_mod('hero_title', __('Design that', 'cassette-brutal'))); ?></span><br>
                        <span class="text-accent hero-title-accent"><?php echo esc_html(get_theme_mod('hero_title_accent', __('speaks first', 'cassette-brutal'))); ?></span>
                    </h1>
                    <p class="text-subhead text-muted-foreground mb-12 animate-slide-up hero-subtitle">
                        <?php echo esc_html(get_theme_mod('hero_subtitle', __('Clean, bright, open — with just the right hint of playful provocation. Where grid meets grace, and structure finds its subtle rebellion.', 'cassette-brutal'))); ?>
                    </p>
                    <div class="flex gap-6 justify-center items-center animate-scale-in">
                        <a href="#" class="btn btn-primary btn-lg hero-button-primary"><?php echo esc_html(get_theme_mod('hero_button_primary', __('Start Creating', 'cassette-brutal'))); ?></a>
                        <a href="#" class="btn btn-brutal btn-lg hero-button-secondary"><?php echo esc_html(get_theme_mod('hero_button_secondary', __('Explore Design', 'cassette-brutal'))); ?></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Design Philosophy Section -->
        <section class="py-24">
            <div class="container">
                <div class="text-center mb-20">
                    <h2 class="text-headline mb-6 philosophy-title"><?php echo esc_html(get_theme_mod('philosophy_title', __('Design Philosophy', 'cassette-brutal'))); ?></h2>
                    <p class="text-body text-muted-foreground max-w-2xl mx-auto philosophy-subtitle">
                        <?php echo esc_html(get_theme_mod('philosophy_subtitle', __('Where Stefan Sagmeister meets Jony Ive — confident, intelligent, and quietly opinionated.', 'cassette-brutal'))); ?>
                    </p>
                </div>
                
                <div class="grid grid-cols-3 gap-8">
                    <!-- Apple Precision Card -->
                    <div class="card card-elevated">
                        <div class="pb-6 border-b border-border mb-6">
                            <h3 class="text-headline font-semibold"><?php esc_html_e('Apple Precision', 'cassette-brutal'); ?></h3>
                        </div>
                        <div class="text-body mb-6">
                            <p class="text-body text-muted-foreground mb-6">
                                <?php esc_html_e('Clean lines, thoughtful spacing, and intuitive hierarchy that guides without directing.', 'cassette-brutal'); ?>
                            </p>
                            <div class="gradient-bar"></div>
                        </div>
                    </div>
                    
                    <!-- Stripe Elegance Card -->
                    <div class="card card-brutal">
                        <div class="pb-6 border-b border-border mb-6">
                            <h3 class="text-headline font-semibold"><?php esc_html_e('Stripe Elegance', 'cassette-brutal'); ?></h3>
                        </div>
                        <div class="text-body mb-6">
                            <p class="text-body text-muted-foreground mb-6">
                                <?php esc_html_e('Functional minimalism with subtle gradients that feel both tactile and digital.', 'cassette-brutal'); ?>
                            </p>
                            <div class="stripe-bars">
                                <div class="stripe-bar"></div>
                                <div class="stripe-bar"></div>
                                <div class="stripe-bar"></div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Sagmeister Spirit Card -->
                    <div class="card card-minimal">
                        <div class="pb-6 border-b border-border mb-6">
                            <h3 class="text-headline font-semibold"><?php esc_html_e('Sagmeister Spirit', 'cassette-brutal'); ?></h3>
                        </div>
                        <div class="text-body mb-6">
                            <p class="text-body text-muted-foreground mb-6">
                                <?php esc_html_e('Bold where it counts, whisper elsewhere — editorial meets functional with a hint of rebellion.', 'cassette-brutal'); ?>
                            </p>
                            <div class="accent-bars items-end">
                                <div class="accent-bar"></div>
                                <div class="accent-bar"></div>
                                <div class="accent-bar"></div>
                                <div class="accent-bar"></div>
                                <div class="accent-bar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Microinteractions Demo -->
        <section class="py-20 bg-surface-elevated">
            <div class="container">
                <div class="text-center mb-16">
                    <h2 class="text-headline mb-6"><?php esc_html_e('Purposeful Interactions', 'cassette-brutal'); ?></h2>
                    <p class="text-body text-muted-foreground">
                        <?php esc_html_e('Microinteractions that guide rather than distract', 'cassette-brutal'); ?>
                    </p>
                </div>
                
                <div class="flex gap-6 justify-center items-center flex-wrap">
                    <button class="btn btn-primary hover:scale-105 transition-all"><?php esc_html_e('Hover Me', 'cassette-brutal'); ?></button>
                    <button class="btn btn-primary bg-surface text-foreground border border-border hover:shadow-lg transition-all"><?php esc_html_e('Elegant Shadow', 'cassette-brutal'); ?></button>
                    <button class="btn btn-brutal"><?php esc_html_e('Pixel Perfect', 'cassette-brutal'); ?></button>
                    <button class="btn bg-transparent text-muted-foreground hover:text-foreground underline-offset-4 hover:underline transition-colors"><?php esc_html_e('Whisper Quiet', 'cassette-brutal'); ?></button>
                </div>
            </div>
        </section>

        <!-- Typography Showcase -->
        <section class="py-24 typography-section">
            <div class="container">
                <div class="grid grid-cols-12 gap-12">
                    <div class="col-span-6">
                        <div class="space-y-8">
                            <h3 class="text-hero typography-title"><?php echo esc_html(get_theme_mod('typography_title', __('Typography Scale', 'cassette-brutal'))); ?></h3>
                            <h4 class="text-headline"><?php esc_html_e('Bold where it counts', 'cassette-brutal'); ?></h4>
                            <p class="text-subhead"><?php esc_html_e('Confident and clear', 'cassette-brutal'); ?></p>
                            <p class="text-body">
                                <?php esc_html_e('The overall experience should feel like using a next-gen design tool —', 'cassette-brutal'); ?>
                                <?php esc_html_e('confident, intelligent, and quietly opinionated.', 'cassette-brutal'); ?>
                            </p>
                            <p class="text-caption text-muted-foreground">
                                <?php esc_html_e('This is for a creative who wants their work to speak first,', 'cassette-brutal'); ?>
                                <?php esc_html_e('with design that supports, not shouts.', 'cassette-brutal'); ?>
                            </p>
                            <code class="text-mono block bg-surface-elevated p-4 rounded-md">
                                font-family: Inter, system-ui, sans-serif;
                            </code>
                        </div>
                    </div>
                    
                    <div class="col-span-6">
                        <div class="card card-elevated h-full">
                            <div class="space-y-6">
                                <!-- Blue header area -->
                                <div class="h-24 bg-accent rounded-lg opacity-80"></div>
                                
                                <!-- Content lines -->
                                <div class="space-y-3">
                                    <div class="h-3 bg-muted rounded" style="width: 75%;"></div>
                                    <div class="h-3 bg-muted rounded" style="width: 50%;"></div>
                                    <div class="h-3 bg-muted rounded" style="width: 83%;"></div>
                                </div>
                                
                                <!-- Profile section with blue circle -->
                                <div class="flex gap-3 items-center">
                                    <div class="h-10 w-10 bg-accent rounded-full"></div>
                                    <div class="flex-1 space-y-2">
                                        <div class="h-2 bg-muted rounded" style="width: 33%;"></div>
                                        <div class="h-2 bg-muted rounded" style="width: 25%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Content Block: Feature Highlight -->
        <section class="py-20 bg-surface-elevated">
            <div class="container">
                <div class="grid grid-cols-12 gap-12 items-center">
                    <div class="col-span-6">
                        <div class="space-y-6">
                            <h2 class="text-headline"><?php esc_html_e('Feature Highlight', 'cassette-brutal'); ?></h2>
                            <p class="text-body text-muted-foreground">
                                <?php esc_html_e('Showcase your key features with this elegant two-column layout.', 'cassette-brutal'); ?>
                                <?php esc_html_e('Perfect for highlighting product benefits, service offerings, or key differentiators.', 'cassette-brutal'); ?>
                            </p>
                            <div class="flex gap-4">
                                <a href="#" class="btn btn-primary"><?php esc_html_e('Learn More', 'cassette-brutal'); ?></a>
                                <a href="#" class="btn bg-transparent text-foreground border border-border hover:bg-surface transition-all"><?php esc_html_e('View Demo', 'cassette-brutal'); ?></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-6">
                        <div class="card card-elevated">
                            <div class="space-y-4">
                                <div class="h-32 bg-gradient-to-br from-accent/20 to-primary/20 rounded-lg"></div>
                                <h3 class="text-subhead font-semibold"><?php esc_html_e('Visual Content', 'cassette-brutal'); ?></h3>
                                <p class="text-body text-muted-foreground">
                                    <?php esc_html_e('Add images, videos, or interactive content to make your message more engaging.', 'cassette-brutal'); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Content Block: Stats Section -->
        <section class="py-20">
            <div class="container">
                <div class="text-center mb-16">
                    <h2 class="text-headline mb-6"><?php esc_html_e('By the Numbers', 'cassette-brutal'); ?></h2>
                    <p class="text-body text-muted-foreground max-w-2xl mx-auto">
                        <?php esc_html_e('Showcase your achievements and key metrics with this clean stats section.', 'cassette-brutal'); ?>
                    </p>
                </div>
                <div class="grid grid-cols-4 gap-8">
                    <div class="text-center">
                        <div class="text-hero font-bold text-accent mb-2">99%</div>
                        <div class="text-body text-muted-foreground"><?php esc_html_e('Customer Satisfaction', 'cassette-brutal'); ?></div>
                    </div>
                    <div class="text-center">
                        <div class="text-hero font-bold text-accent mb-2">10k+</div>
                        <div class="text-body text-muted-foreground"><?php esc_html_e('Active Users', 'cassette-brutal'); ?></div>
                    </div>
                    <div class="text-center">
                        <div class="text-hero font-bold text-accent mb-2">24/7</div>
                        <div class="text-body text-muted-foreground"><?php esc_html_e('Support Available', 'cassette-brutal'); ?></div>
                    </div>
                    <div class="text-center">
                        <div class="text-hero font-bold text-accent mb-2">5★</div>
                        <div class="text-body text-muted-foreground"><?php esc_html_e('Average Rating', 'cassette-brutal'); ?></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Content Block: Testimonial -->
        <section class="py-20 bg-surface-elevated">
            <div class="container">
                <div class="max-w-4xl mx-auto text-center">
                    <blockquote class="text-headline italic mb-8 text-foreground">
                        <?php esc_html_e('"This design system has transformed how we approach our digital products.', 'cassette-brutal'); ?>
                        <?php esc_html_e('The attention to detail and thoughtful interactions make all the difference."', 'cassette-brutal'); ?>
                    </blockquote>
                    <div class="flex items-center justify-center gap-4">
                        <div class="h-12 w-12 bg-accent rounded-full"></div>
                        <div class="text-left">
                            <div class="text-body font-semibold">Sarah Chen</div>
                            <div class="text-caption text-muted-foreground">Design Director, TechCorp</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Content Block: Call to Action -->
        <section class="py-24">
            <div class="container">
                <div class="card card-elevated text-center py-16">
                    <div class="max-w-2xl mx-auto space-y-6">
                        <h2 class="text-headline"><?php esc_html_e('Ready to Get Started?', 'cassette-brutal'); ?></h2>
                        <p class="text-body text-muted-foreground">
                            <?php esc_html_e('Join thousands of creators who are already using our design system to build beautiful, functional products.', 'cassette-brutal'); ?>
                        </p>
                        <div class="flex gap-4 justify-center">
                            <a href="#" class="btn btn-primary btn-lg"><?php esc_html_e('Start Free Trial', 'cassette-brutal'); ?></a>
                            <a href="#" class="btn btn-brutal btn-lg"><?php esc_html_e('View Pricing', 'cassette-brutal'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Alternative: Vertical Design Philosophy Cards -->
        <section class="py-24 bg-surface-elevated">
            <div class="container">
                <div class="text-center mb-20">
                    <h2 class="text-headline mb-6"><?php esc_html_e('Design Principles', 'cassette-brutal'); ?></h2>
                    <p class="text-body text-muted-foreground max-w-2xl mx-auto">
                        <?php esc_html_e('Our approach to design, refined through years of experience and countless iterations.', 'cassette-brutal'); ?>
                    </p>
                </div>
                
                <div class="max-w-4xl mx-auto space-y-8">
                    <!-- Principle 1 -->
                    <div class="card card-elevated interactive hover:scale-[1.02] transition-all duration-300 cursor-pointer group">
                        <div class="grid grid-cols-12 gap-8 items-center">
                            <div class="col-span-8">
                                <div class="space-y-4">
                                    <h3 class="text-headline font-semibold group-hover:text-accent transition-colors"><?php esc_html_e('Clarity First', 'cassette-brutal'); ?></h3>
                                    <p class="text-body text-muted-foreground">
                                        <?php esc_html_e('Every element serves a purpose. We eliminate the unnecessary and amplify what matters,', 'cassette-brutal'); ?>
                                        <?php esc_html_e('creating interfaces that feel intuitive from the first interaction.', 'cassette-brutal'); ?>
                                    </p>
                                    <div class="flex gap-2">
                                        <span class="px-3 py-1 bg-accent/10 text-accent text-caption rounded-full"><?php esc_html_e('Minimalism', 'cassette-brutal'); ?></span>
                                        <span class="px-3 py-1 bg-accent/10 text-accent text-caption rounded-full"><?php esc_html_e('Focus', 'cassette-brutal'); ?></span>
                                        <span class="px-3 py-1 bg-accent/10 text-accent text-caption rounded-full"><?php esc_html_e('Purpose', 'cassette-brutal'); ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-4">
                                <div class="h-24 bg-gradient-to-r from-accent/20 to-accent/40 rounded-lg group-hover:from-accent/30 group-hover:to-accent/50 transition-all duration-300"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Principle 2 -->
                    <div class="card card-brutal interactive hover:translate-x-1 hover:translate-y-1 hover:shadow-[4px_4px_0px_0px_hsl(var(--primary))] transition-all duration-300 cursor-pointer group">
                        <div class="grid grid-cols-12 gap-8 items-center">
                            <div class="col-span-4">
                                <div class="stripe-bars h-16 group-hover:scale-105 transition-transform duration-300">
                                    <div class="stripe-bar bg-accent"></div>
                                    <div class="stripe-bar bg-accent opacity-60"></div>
                                    <div class="stripe-bar bg-accent opacity-30"></div>
                                </div>
                            </div>
                            <div class="col-span-8">
                                <div class="space-y-4">
                                    <h3 class="text-headline font-semibold group-hover:text-accent transition-colors"><?php esc_html_e('Bold Decisions', 'cassette-brutal'); ?></h3>
                                    <p class="text-body text-muted-foreground">
                                        <?php esc_html_e("We're not afraid to make strong choices. Sometimes the best design is the one that", 'cassette-brutal'); ?>
                                        <?php esc_html_e('takes a stand and commits fully to its vision.', 'cassette-brutal'); ?>
                                    </p>
                                    <div class="flex gap-2">
                                        <span class="px-3 py-1 bg-primary/10 text-primary text-caption rounded-full"><?php esc_html_e('Confidence', 'cassette-brutal'); ?></span>
                                        <span class="px-3 py-1 bg-primary/10 text-primary text-caption rounded-full"><?php esc_html_e('Impact', 'cassette-brutal'); ?></span>
                                        <span class="px-3 py-1 bg-primary/10 text-primary text-caption rounded-full"><?php esc_html_e('Vision', 'cassette-brutal'); ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Principle 3 -->
                    <div class="card card-minimal interactive hover:bg-surface hover:shadow-elegant transition-all duration-300 cursor-pointer group">
                        <div class="grid grid-cols-12 gap-8 items-center">
                            <div class="col-span-8">
                                <div class="space-y-4">
                                    <h3 class="text-headline font-semibold group-hover:text-accent transition-colors"><?php esc_html_e('Human Connection', 'cassette-brutal'); ?></h3>
                                    <p class="text-body text-muted-foreground">
                                        <?php esc_html_e('Technology should feel human. We design with empathy, considering not just what users need to do,', 'cassette-brutal'); ?>
                                        <?php esc_html_e('but how they feel while doing it.', 'cassette-brutal'); ?>
                                    </p>
                                    <div class="flex gap-2">
                                        <span class="px-3 py-1 bg-muted text-foreground text-caption rounded-full"><?php esc_html_e('Empathy', 'cassette-brutal'); ?></span>
                                        <span class="px-3 py-1 bg-muted text-foreground text-caption rounded-full"><?php esc_html_e('Emotion', 'cassette-brutal'); ?></span>
                                        <span class="px-3 py-1 bg-muted text-foreground text-caption rounded-full"><?php esc_html_e('Care', 'cassette-brutal'); ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-4">
                                <div class="accent-bars items-end group-hover:scale-110 transition-transform duration-300">
                                    <div class="accent-bar bg-primary"></div>
                                    <div class="accent-bar bg-primary"></div>
                                    <div class="accent-bar bg-primary"></div>
                                    <div class="accent-bar bg-accent"></div>
                                    <div class="accent-bar bg-primary"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <?php else : ?>
        <!-- Blog/Archive Layout -->
        <section class="py-20">
            <div class="container">
                <div class="text-center mb-16">
                    <h1 class="text-hero mb-6"><?php echo get_the_archive_title(); ?></h1>
                    <?php if (get_the_archive_description()) : ?>
                        <p class="text-subhead text-muted-foreground"><?php echo get_the_archive_description(); ?></p>
                    <?php endif; ?>
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
                                                    <a href="<?php echo get_permalink(); ?>">
                                                        <?php echo get_the_post_thumbnail(get_the_ID(), 'large', array('class' => 'w-full h-64 object-cover rounded-lg')); ?>
                                                    </a>
                                                </div>
                                            <?php endif; ?>
                                            
                                            <div class="pb-6 border-b border-border mb-6">
                                                <h2 class="text-headline font-semibold mb-3">
                                                    <a href="<?php echo get_permalink(); ?>" class="text-foreground hover:text-accent transition-colors">
                                                        <?php echo get_the_title(); ?>
                                                    </a>
                                                </h2>
                                                <div class="text-caption text-muted-foreground">
                                                    <?php echo get_the_date(); ?> • <?php echo get_the_author(); ?>
                                                </div>
                                            </div>
                                            
                                            <div class="text-body mb-6">
                                                <?php echo get_the_excerpt(); ?>
                                            </div>
                                            
                                            <a href="<?php echo get_permalink(); ?>" class="btn btn-primary"><?php esc_html_e('Read More', 'cassette-brutal'); ?></a>
                                        </div>
                                    </article>
                                <?php endwhile; ?>
                                
                                <!-- Pagination -->
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
                                            <?php esc_html_e('It seems we can\'t find what you\'re looking for. Perhaps searching can help.', 'cassette-brutal'); ?>
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
    <?php endif; ?>
</div>

<?php get_footer(); ?>

