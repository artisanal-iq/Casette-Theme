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
} else {
    get_template_part( 'template-parts/category/category', 'default' );
}

get_footer();
