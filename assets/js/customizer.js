/**
 * Customizer Live Preview
 * 
 * @package CassetteBrutalGrid
 * @since 1.0.0
 */

(function($) {
    'use strict';

    // Hero Title (Black Text)
    wp.customize('hero_title', function(value) {
        value.bind(function(newval) {
            $('.hero-title-main').text(newval);
        });
    });

    // Hero Title Accent (Blue Text)
    wp.customize('hero_title_accent', function(value) {
        value.bind(function(newval) {
            $('.hero-title-accent').text(newval);
        });
    });

    // Hero Subtitle
    wp.customize('hero_subtitle', function(value) {
        value.bind(function(newval) {
            $('.hero-subtitle').text(newval);
        });
    });

    // Primary Button
    wp.customize('hero_button_primary', function(value) {
        value.bind(function(newval) {
            $('.hero-button-primary').text(newval);
        });
    });

    // Secondary Button
    wp.customize('hero_button_secondary', function(value) {
        value.bind(function(newval) {
            $('.hero-button-secondary').text(newval);
        });
    });

    // Philosophy Title
    wp.customize('philosophy_title', function(value) {
        value.bind(function(newval) {
            $('.philosophy-title').text(newval);
        });
    });

    // Philosophy Subtitle
    wp.customize('philosophy_subtitle', function(value) {
        value.bind(function(newval) {
            $('.philosophy-subtitle').text(newval);
        });
    });

    // Typography Title
    wp.customize('typography_title', function(value) {
        value.bind(function(newval) {
            $('.typography-title').text(newval);
        });
    });

    // Accent Color
    wp.customize('accent_color', function(value) {
        value.bind(function(newval) {
            // Update CSS custom property
            document.documentElement.style.setProperty('--accent', newval);
            
            // Update specific elements
            $('.bg-accent').css('background-color', newval);
            $('.text-accent').css('color', newval);
            $('.btn-brutal').css('background-color', newval);
        });
    });

})(jQuery);

