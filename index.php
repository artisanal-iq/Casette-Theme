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
                        <span class="hero-title-main"><?php echo esc_html(get_theme_mod('hero_title', 'Design that')); ?></span><br>
                        <span class="text-accent hero-title-accent"><?php echo esc_html(get_theme_mod('hero_title_accent', 'speaks first')); ?></span>
                    </h1>
                    <p class="text-subhead text-muted-foreground mb-12 animate-slide-up hero-subtitle">
                        <?php echo esc_html(get_theme_mod('hero_subtitle', 'Clean, bright, open — with just the right hint of playful provocation. Where grid meets grace, and structure finds its subtle rebellion.')); ?>
                    </p>
                    <div class="flex gap-6 justify-center items-center animate-scale-in">
                        <a href="#" class="btn btn-primary btn-lg hero-button-primary"><?php echo esc_html(get_theme_mod('hero_button_primary', 'Start Creating')); ?></a>
                        <a href="#" class="btn btn-brutal btn-lg hero-button-secondary"><?php echo esc_html(get_theme_mod('hero_button_secondary', 'Explore Design')); ?></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Design Philosophy Section -->
        <section class="py-24">
            <div class="container">
                <div class="text-center mb-20">
                    <h2 class="text-headline mb-6 philosophy-title"><?php echo esc_html(get_theme_mod('philosophy_title', 'Design Philosophy')); ?></h2>
                    <p class="text-body text-muted-foreground max-w-2xl mx-auto philosophy-subtitle">
                        <?php echo esc_html(get_theme_mod('philosophy_subtitle', 'Where Stefan Sagmeister meets Jony Ive — confident, intelligent, and quietly opinionated.')); ?>
                    </p>
                </div>
                
                <div class="grid grid-cols-3 gap-8">
                    <!-- Apple Precision Card -->
                    <div class="card card-elevated">
                        <div class="pb-6 border-b border-border mb-6">
                            <h3 class="text-headline font-semibold">Apple Precision</h3>
                        </div>
                        <div class="text-body mb-6">
                            <p class="text-body text-muted-foreground mb-6">
                                Clean lines, thoughtful spacing, and intuitive hierarchy that guides without directing.
                            </p>
                            <div class="gradient-bar"></div>
                        </div>
                    </div>
                    
                    <!-- Stripe Elegance Card -->
                    <div class="card card-brutal">
                        <div class="pb-6 border-b border-border mb-6">
                            <h3 class="text-headline font-semibold">Stripe Elegance</h3>
                        </div>
                        <div class="text-body mb-6">
                            <p class="text-body text-muted-foreground mb-6">
                                Functional minimalism with subtle gradients that feel both tactile and digital.
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
                            <h3 class="text-headline font-semibold">Sagmeister Spirit</h3>
                        </div>
                        <div class="text-body mb-6">
                            <p class="text-body text-muted-foreground mb-6">
                                Bold where it counts, whisper elsewhere — editorial meets functional with a hint of rebellion.
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
                    <h2 class="text-headline mb-6">Purposeful Interactions</h2>
                    <p class="text-body text-muted-foreground">
                        Microinteractions that guide rather than distract
                    </p>
                </div>
                
                <div class="flex gap-6 justify-center items-center flex-wrap">
                    <button class="btn btn-primary hover:scale-105 transition-all">Hover Me</button>
                    <button class="btn btn-primary bg-surface text-foreground border border-border hover:shadow-lg transition-all">Elegant Shadow</button>
                    <button class="btn btn-brutal">Pixel Perfect</button>
                    <button class="btn bg-transparent text-muted-foreground hover:text-foreground underline-offset-4 hover:underline transition-colors">Whisper Quiet</button>
                </div>
            </div>
        </section>

        <!-- Typography Showcase -->
        <section class="py-24 typography-section">
            <div class="container">
                <div class="grid grid-cols-12 gap-12">
                    <div class="col-span-6">
                        <div class="space-y-8">
                            <h3 class="text-hero typography-title"><?php echo esc_html(get_theme_mod('typography_title', 'Typography Scale')); ?></h3>
                            <h4 class="text-headline">Bold where it counts</h4>
                            <p class="text-subhead">Confident and clear</p>
                            <p class="text-body">
                                The overall experience should feel like using a next-gen design tool — 
                                confident, intelligent, and quietly opinionated.
                            </p>
                            <p class="text-caption text-muted-foreground">
                                This is for a creative who wants their work to speak first, 
                                with design that supports, not shouts.
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
                            <h2 class="text-headline">Feature Highlight</h2>
                            <p class="text-body text-muted-foreground">
                                Showcase your key features with this elegant two-column layout. 
                                Perfect for highlighting product benefits, service offerings, or key differentiators.
                            </p>
                            <div class="flex gap-4">
                                <a href="#" class="btn btn-primary">Learn More</a>
                                <a href="#" class="btn bg-transparent text-foreground border border-border hover:bg-surface transition-all">View Demo</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-6">
                        <div class="card card-elevated">
                            <div class="space-y-4">
                                <div class="h-32 bg-gradient-to-br from-accent/20 to-primary/20 rounded-lg"></div>
                                <h3 class="text-subhead font-semibold">Visual Content</h3>
                                <p class="text-body text-muted-foreground">
                                    Add images, videos, or interactive content to make your message more engaging.
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
                    <h2 class="text-headline mb-6">By the Numbers</h2>
                    <p class="text-body text-muted-foreground max-w-2xl mx-auto">
                        Showcase your achievements and key metrics with this clean stats section.
                    </p>
                </div>
                <div class="grid grid-cols-4 gap-8">
                    <div class="text-center">
                        <div class="text-hero font-bold text-accent mb-2">99%</div>
                        <div class="text-body text-muted-foreground">Customer Satisfaction</div>
                    </div>
                    <div class="text-center">
                        <div class="text-hero font-bold text-accent mb-2">10k+</div>
                        <div class="text-body text-muted-foreground">Active Users</div>
                    </div>
                    <div class="text-center">
                        <div class="text-hero font-bold text-accent mb-2">24/7</div>
                        <div class="text-body text-muted-foreground">Support Available</div>
                    </div>
                    <div class="text-center">
                        <div class="text-hero font-bold text-accent mb-2">5★</div>
                        <div class="text-body text-muted-foreground">Average Rating</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Content Block: Testimonial -->
        <section class="py-20 bg-surface-elevated">
            <div class="container">
                <div class="max-w-4xl mx-auto text-center">
                    <blockquote class="text-headline italic mb-8 text-foreground">
                        "This design system has transformed how we approach our digital products. 
                        The attention to detail and thoughtful interactions make all the difference."
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
                        <h2 class="text-headline">Ready to Get Started?</h2>
                        <p class="text-body text-muted-foreground">
                            Join thousands of creators who are already using our design system to build beautiful, functional products.
                        </p>
                        <div class="flex gap-4 justify-center">
                            <a href="#" class="btn btn-primary btn-lg">Start Free Trial</a>
                            <a href="#" class="btn btn-brutal btn-lg">View Pricing</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Alternative: Vertical Design Philosophy Cards -->
        <section class="py-24 bg-surface-elevated">
            <div class="container">
                <div class="text-center mb-20">
                    <h2 class="text-headline mb-6">Design Principles</h2>
                    <p class="text-body text-muted-foreground max-w-2xl mx-auto">
                        Our approach to design, refined through years of experience and countless iterations.
                    </p>
                </div>
                
                <div class="max-w-4xl mx-auto space-y-8">
                    <!-- Principle 1 -->
                    <div class="card card-elevated interactive hover:scale-[1.02] transition-all duration-300 cursor-pointer group">
                        <div class="grid grid-cols-12 gap-8 items-center">
                            <div class="col-span-8">
                                <div class="space-y-4">
                                    <h3 class="text-headline font-semibold group-hover:text-accent transition-colors">Clarity First</h3>
                                    <p class="text-body text-muted-foreground">
                                        Every element serves a purpose. We eliminate the unnecessary and amplify what matters, 
                                        creating interfaces that feel intuitive from the first interaction.
                                    </p>
                                    <div class="flex gap-2">
                                        <span class="px-3 py-1 bg-accent/10 text-accent text-caption rounded-full">Minimalism</span>
                                        <span class="px-3 py-1 bg-accent/10 text-accent text-caption rounded-full">Focus</span>
                                        <span class="px-3 py-1 bg-accent/10 text-accent text-caption rounded-full">Purpose</span>
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
                                    <h3 class="text-headline font-semibold group-hover:text-accent transition-colors">Bold Decisions</h3>
                                    <p class="text-body text-muted-foreground">
                                        We're not afraid to make strong choices. Sometimes the best design is the one that 
                                        takes a stand and commits fully to its vision.
                                    </p>
                                    <div class="flex gap-2">
                                        <span class="px-3 py-1 bg-primary/10 text-primary text-caption rounded-full">Confidence</span>
                                        <span class="px-3 py-1 bg-primary/10 text-primary text-caption rounded-full">Impact</span>
                                        <span class="px-3 py-1 bg-primary/10 text-primary text-caption rounded-full">Vision</span>
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
                                    <h3 class="text-headline font-semibold group-hover:text-accent transition-colors">Human Connection</h3>
                                    <p class="text-body text-muted-foreground">
                                        Technology should feel human. We design with empathy, considering not just what users need to do, 
                                        but how they feel while doing it.
                                    </p>
                                    <div class="flex gap-2">
                                        <span class="px-3 py-1 bg-muted text-foreground text-caption rounded-full">Empathy</span>
                                        <span class="px-3 py-1 bg-muted text-foreground text-caption rounded-full">Emotion</span>
                                        <span class="px-3 py-1 bg-muted text-foreground text-caption rounded-full">Care</span>
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
                                            
                                            <a href="<?php echo get_permalink(); ?>" class="btn btn-primary">Read More</a>
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

