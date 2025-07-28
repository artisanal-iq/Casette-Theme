<?php
/**
 * Category router template.
 *
 * Loads slug specific category templates with fallback.
 *
 * @package CassetteBrutalGrid
 */

get_header();

$slug = get_query_var( 'category_name' );
$template = 'template-parts/category/category-' . $slug;

if ( locate_template( $template . '.php' ) ) {
    get_template_part( 'template-parts/category/category', $slug );
} elseif ( locate_template( 'template-parts/category/category-default.php' ) ) {
    get_template_part( 'template-parts/category/category', 'default' );
} else {
    get_template_part( 'template-parts/category/category', 'fallback' );
}

get_footer();
