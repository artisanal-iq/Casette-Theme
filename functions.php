<?php
/**
 * Cassette Brutal Grid Theme Functions
 * 
 * @package CassetteBrutalGrid
 * @since 1.0.0
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme Setup
 */
function cassette_brutal_setup() {
    // Add theme support for various features
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    
    // Add support for responsive embeds
    add_theme_support('responsive-embeds');
    
    // Add support for editor styles
    add_theme_support('editor-styles');
    add_editor_style('assets/css/editor-style.css');
    
    // Add support for wide and full alignment
    add_theme_support('align-wide');
    
    // Add support for block editor color palette
    add_theme_support('editor-color-palette', array(
        array(
            'name'  => esc_html__('Primary', 'cassette-brutal'),
            'slug'  => 'primary',
            'color' => '#1A1A1A',
        ),
        array(
            'name'  => esc_html__('Accent', 'cassette-brutal'),
            'slug'  => 'accent',
            'color' => '#3B82F6',
        ),
        array(
            'name'  => esc_html__('Surface', 'cassette-brutal'),
            'slug'  => 'surface',
            'color' => '#FFFFFF',
        ),
        array(
            'name'  => esc_html__('Muted', 'cassette-brutal'),
            'slug'  => 'muted',
            'color' => '#6B7280',
        ),
    ));
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => esc_html__('Primary Menu', 'cassette-brutal'),
        'footer'  => esc_html__('Footer Menu', 'cassette-brutal'),
    ));
}
add_action('after_setup_theme', 'cassette_brutal_setup');

/**
 * Enqueue Scripts and Styles
 */
function cassette_brutal_scripts() {
    // Enqueue main stylesheet
    wp_enqueue_style(
        'cassette-brutal-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );
    
    // Enqueue custom JavaScript
    wp_enqueue_script(
        'cassette-brutal-script',
        get_template_directory_uri() . '/assets/js/theme.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );
    
    // Enqueue comment reply script
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'cassette_brutal_scripts');

/**
 * Register Widget Areas
 */
function cassette_brutal_widgets_init() {
    register_sidebar(array(
        'name'          => esc_html__('Sidebar', 'cassette-brutal'),
        'id'            => 'sidebar-1',
        'description'   => esc_html__('Add widgets here to appear in your sidebar.', 'cassette-brutal'),
        'before_widget' => '<section id="%1$s" class="widget %2$s mb-8">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title text-headline mb-4">',
        'after_title'   => '</h3>',
    ));
    
    register_sidebar(array(
        'name'          => esc_html__('Footer', 'cassette-brutal'),
        'id'            => 'footer-1',
        'description'   => esc_html__('Add widgets here to appear in your footer.', 'cassette-brutal'),
        'before_widget' => '<section id="%1$s" class="widget %2$s mb-6">',
        'after_widget'  => '</section>',
        'before_title'  => '<h4 class="widget-title text-subhead mb-3">',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'cassette_brutal_widgets_init');

/**
 * Excerpt Length
 */
function cassette_brutal_excerpt_length($length) {
    return 25;
}
add_filter('excerpt_length', 'cassette_brutal_excerpt_length');

/**
 * Excerpt More
 */
function cassette_brutal_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'cassette_brutal_excerpt_more');

/**
 * Add Custom Body Classes
 */
function cassette_brutal_body_classes($classes) {
    // Add class for the design system
    $classes[] = 'cassette-brutal-theme';
    
    // Add class based on post type
    if (is_singular()) {
        $classes[] = 'single-' . get_post_type();
    }
    
    return $classes;
}
add_filter('body_class', 'cassette_brutal_body_classes');

/**
 * Add Theme Customizer Options
 */
function cassette_brutal_customize_register($wp_customize) {
    // Hero Section
    $wp_customize->add_section('cassette_brutal_hero', array(
        'title'       => esc_html__('Hero Section', 'cassette-brutal'),
        'description' => esc_html__('Customize the hero section content.', 'cassette-brutal'),
        'priority'    => 30,
    ));
    
    // Hero Title
    $wp_customize->add_setting('hero_title', array(
        'default'           => 'Design that',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage',
    ));
    
    $wp_customize->add_control('hero_title', array(
        'label'       => esc_html__('Hero Title (Black Text)', 'cassette-brutal'),
        'description' => esc_html__('First part of the hero title in black.', 'cassette-brutal'),
        'section'     => 'cassette_brutal_hero',
        'type'        => 'text',
    ));
    
    // Hero Title Accent
    $wp_customize->add_setting('hero_title_accent', array(
        'default'           => 'speaks first',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage',
    ));
    
    $wp_customize->add_control('hero_title_accent', array(
        'label'       => esc_html__('Hero Title (Blue Accent Text)', 'cassette-brutal'),
        'description' => esc_html__('Second part of the hero title in blue accent color.', 'cassette-brutal'),
        'section'     => 'cassette_brutal_hero',
        'type'        => 'text',
    ));
    
    // Hero Subtitle
    $wp_customize->add_setting('hero_subtitle', array(
        'default'           => 'Clean, bright, open — with just the right hint of playful provocation. Where grid meets grace, and structure finds its subtle rebellion.',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport'         => 'postMessage',
    ));
    
    $wp_customize->add_control('hero_subtitle', array(
        'label'       => esc_html__('Hero Subtitle', 'cassette-brutal'),
        'description' => esc_html__('Subtitle text below the main headline.', 'cassette-brutal'),
        'section'     => 'cassette_brutal_hero',
        'type'        => 'textarea',
    ));
    
    // Primary Button Text
    $wp_customize->add_setting('hero_button_primary', array(
        'default'           => 'Start Creating',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage',
    ));
    
    $wp_customize->add_control('hero_button_primary', array(
        'label'       => esc_html__('Primary Button Text', 'cassette-brutal'),
        'description' => esc_html__('Text for the primary call-to-action button.', 'cassette-brutal'),
        'section'     => 'cassette_brutal_hero',
        'type'        => 'text',
    ));
    
    // Secondary Button Text
    $wp_customize->add_setting('hero_button_secondary', array(
        'default'           => 'Explore Design',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage',
    ));
    
    $wp_customize->add_control('hero_button_secondary', array(
        'label'       => esc_html__('Secondary Button Text', 'cassette-brutal'),
        'description' => esc_html__('Text for the secondary call-to-action button.', 'cassette-brutal'),
        'section'     => 'cassette_brutal_hero',
        'type'        => 'text',
    ));
    
    // Design Philosophy Section
    $wp_customize->add_section('cassette_brutal_philosophy', array(
        'title'       => esc_html__('Design Philosophy', 'cassette-brutal'),
        'description' => esc_html__('Customize the design philosophy section.', 'cassette-brutal'),
        'priority'    => 35,
    ));
    
    // Philosophy Title
    $wp_customize->add_setting('philosophy_title', array(
        'default'           => 'Design Philosophy',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage',
    ));
    
    $wp_customize->add_control('philosophy_title', array(
        'label'       => esc_html__('Philosophy Section Title', 'cassette-brutal'),
        'section'     => 'cassette_brutal_philosophy',
        'type'        => 'text',
    ));
    
    // Philosophy Subtitle
    $wp_customize->add_setting('philosophy_subtitle', array(
        'default'           => 'Where Stefan Sagmeister meets Jony Ive — confident, intelligent, and quietly opinionated.',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport'         => 'postMessage',
    ));
    
    $wp_customize->add_control('philosophy_subtitle', array(
        'label'       => esc_html__('Philosophy Section Subtitle', 'cassette-brutal'),
        'section'     => 'cassette_brutal_philosophy',
        'type'        => 'textarea',
    ));
    
    // Colors Section
    $wp_customize->add_section('cassette_brutal_colors', array(
        'title'       => esc_html__('Theme Colors', 'cassette-brutal'),
        'description' => esc_html__('Customize the theme color scheme.', 'cassette-brutal'),
        'priority'    => 40,
    ));
    
    // Accent Color
    $wp_customize->add_setting('accent_color', array(
        'default'           => '#3B82F6',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
    ));
    
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'accent_color', array(
        'label'       => esc_html__('Accent Color', 'cassette-brutal'),
        'description' => esc_html__('Main accent color used throughout the theme.', 'cassette-brutal'),
        'section'     => 'cassette_brutal_colors',
    )));
    
    // Typography Section
    $wp_customize->add_section('cassette_brutal_typography', array(
        'title'       => esc_html__('Typography', 'cassette-brutal'),
        'description' => esc_html__('Customize typography settings.', 'cassette-brutal'),
        'priority'    => 45,
    ));
    
    // Typography Title
    $wp_customize->add_setting('typography_title', array(
        'default'           => 'Typography Scale',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'postMessage',
    ));
    
    $wp_customize->add_control('typography_title', array(
        'label'       => esc_html__('Typography Section Title', 'cassette-brutal'),
        'section'     => 'cassette_brutal_typography',
        'type'        => 'text',
    ));
}
add_action('customize_register', 'cassette_brutal_customize_register');

/**
 * Enqueue Customizer Scripts
 */
function cassette_brutal_customize_preview_js() {
    wp_enqueue_script(
        'cassette-brutal-customizer',
        get_template_directory_uri() . '/assets/js/customizer.js',
        array('customize-preview'),
        wp_get_theme()->get('Version'),
        true
    );
}
add_action('customize_preview_init', 'cassette_brutal_customize_preview_js');

/**
 * Remove WordPress Version from Head
 */
remove_action('wp_head', 'wp_generator');

/**
 * Output a styled button element.
 *
 * @param string $text       Button text.
 * @param string $variant    Variant slug (primary, secondary, brutal, minimal, etc).
 * @param string $size       Size slug (sm, md, lg).
 * @param string $classes    Additional classes.
 * @param array  $attributes Extra attributes for the anchor tag.
 * @return string            Button markup.
 */
function cassette_brutal_button($text, $variant = 'primary', $size = 'md', $classes = '', $attributes = array()) {
    $allowed_variants = array('primary', 'secondary', 'ghost', 'brutal', 'minimal');
    $allowed_sizes    = array('sm', 'md', 'lg');

    $variant = in_array($variant, $allowed_variants, true) ? $variant : 'primary';
    $size    = in_array($size, $allowed_sizes, true) ? $size : 'md';

    $attr_string = '';
    foreach ($attributes as $key => $value) {
        $attr_string .= ' ' . sanitize_key($key) . '="' . esc_attr($value) . '"';
    }

    $class_string = trim('btn btn-' . $variant . ' btn-' . $size . ' ' . $classes);

    return '<a class="' . esc_attr($class_string) . '"' . $attr_string . '>' . esc_html($text) . '</a>';
}

/**
 * Output a card component wrapper.
 *
 * @param string $content     Card content HTML.
 * @param string $variant     Card variant (default, elevated, brutal, minimal).
 * @param bool   $interactive Whether to apply the interactive class.
 * @param string $classes     Additional classes.
 * @return string             Markup for the card.
 */
function cassette_brutal_card($content, $variant = 'default', $interactive = false, $classes = '') {
    $allowed_variants = array('default', 'elevated', 'brutal', 'minimal');
    $variant          = in_array($variant, $allowed_variants, true) ? $variant : 'default';

    $class_string  = 'card';
    if ('default' !== $variant) {
        $class_string .= ' card-' . $variant;
    }

    if ($interactive) {
        $class_string .= ' interactive';
    }

    if (!empty($classes)) {
        $class_string .= ' ' . $classes;
    }

    return '<div class="' . esc_attr(trim($class_string)) . '">' . wp_kses_post($content) . '</div>';
}

/**
 * Wrap content in a responsive container.
 *
 * @param string $content Container inner HTML.
 * @param string $size    Optional size modifier class.
 * @param string $classes Additional classes.
 * @return string         Markup for the container.
 */
function cassette_brutal_container($content, $size = '', $classes = '') {
    $size_class   = $size && 'default' !== $size ? ' max-w-' . sanitize_html_class($size) : '';
    $class_string = trim('container' . $size_class . ' ' . $classes);

    return '<div class="' . esc_attr($class_string) . '">' . wp_kses_post($content) . '</div>';
}

/**
 * Output a grid wrapper.
 *
 * @param string $content  Grid content HTML.
 * @param int    $cols     Number of columns.
 * @param string $gap      Gap size slug.
 * @param string $classes  Additional classes.
 * @return string          Markup for the grid.
 */
function cassette_brutal_grid($content, $cols = 12, $gap = '4', $classes = '') {
    $cols_class = 'grid-cols-' . absint($cols);
    $gap_class  = $gap ? 'gap-' . sanitize_html_class($gap) : '';
    $class_string = trim('grid ' . $cols_class . ' ' . $gap_class . ' ' . $classes);

    return '<div class="' . esc_attr($class_string) . '">' . wp_kses_post($content) . '</div>';
}

/**
 * Display next/previous post links wrapped in theme markup.
 */
function cassette_brutal_post_navigation() {
    ob_start();
    the_post_navigation(array(
        'next_text' => '<span class="sr-only">' . esc_html__('Next post:', 'cassette-brutal') . '</span><span aria-hidden="true">%title →</span>',
        'prev_text' => '<span class="sr-only">' . esc_html__('Previous post:', 'cassette-brutal') . '</span><span aria-hidden="true">← %title</span>',
    ));
    $navigation = ob_get_clean();

    if ($navigation) {
        echo '<div class="post-navigation py-16 border-t border-border">' . cassette_brutal_container($navigation) . '</div>';
    }
}
?>

