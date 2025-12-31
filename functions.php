<?php
if ( ! defined('ABSPATH') ) exit;

add_action('after_setup_theme', function () {

    add_theme_support('editor-styles');
    add_theme_support('wp-block-styles');
    add_theme_support('align-wide');
    add_theme_support('responsive-embeds');

    // Enable block templates only if supported
    if ( function_exists('wp_is_block_theme') ) {
        add_theme_support('block-templates');
    }
});

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style(
        'hybridflex-style',
        get_stylesheet_uri(),
        [],
        wp_get_theme()->get('Version')
    );
});
