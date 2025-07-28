<?php
/**
 * Template Name: Resources Page
 *
 * Modular resources landing page.
 *
 * @package CassetteBrutalGrid
 */

get_header();

get_template_part('resources/intro');
get_template_part('resources/cards');
get_template_part('resources/posts');
get_template_part('resources/media');
get_template_part('resources/cta');

get_footer();
