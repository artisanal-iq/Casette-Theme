<?php
/**
 * Post card template part.
 *
 * Displays a single post summary used in archives and loops.
 *
 * @package CassetteBrutalGrid
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('post-entry'); ?>>
    <div class="card card-elevated interactive">
        <?php if ( has_post_thumbnail() ) : ?>
            <div class="mb-8">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail( 'large', array( 'class' => 'w-full h-64 object-cover rounded-lg' ) ); ?>
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

        <a href="<?php the_permalink(); ?>" class="btn btn-primary"><?php esc_html_e( 'Read More', 'cassette-brutal' ); ?></a>
    </div>
</article>
