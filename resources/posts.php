<section class="py-20 bg-surface-elevated">
    <div class="container">
        <h2 class="text-headline mb-8"><?php esc_html_e('Latest Articles', 'cassette-brutal'); ?></h2>
        <div class="space-y-12">
            <?php
            $query = new WP_Query( array( 'posts_per_page' => 3 ) );
            if ( $query->have_posts() ) :
                while ( $query->have_posts() ) : $query->the_post();
                    get_template_part( 'template-parts/post', 'card' );
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
    </div>
</section>
