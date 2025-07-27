<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package CassetteBrutalGrid
 */

get_header(); ?>

<div class="min-h-screen bg-background">
    <section class="py-32">
        <div class="container">
            <div class="card card-minimal">
                <div class="text-center py-16">
                    <h1 class="text-headline mb-6"><?php esc_html_e('Oops! That page can\'t be found.', 'cassette-brutal'); ?></h1>
                    <p class="text-body text-muted-foreground mb-8">
                        <?php esc_html_e('It looks like nothing was found at this location. Maybe try a search?', 'cassette-brutal'); ?>
                    </p>
                    <?php get_search_form(); ?>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>
