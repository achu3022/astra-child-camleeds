<?php
add_action( 'wp_enqueue_scripts', 'enqueue_assets' );

function enqueue_assets() {
    // Enqueue Parent Stylesheet
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

    // Enqueue Child Stylesheet
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'parent-style' ),
        wp_get_theme()->get('Version')
    );

    // Enqueue Custom CSS
    wp_enqueue_style( 'custom-style', get_stylesheet_directory_uri() . '/assets/css/main.css', array(), '1.0' );

    // Enqueue Custom JS
    wp_enqueue_script( 'custom-script', get_stylesheet_directory_uri() . '/assets/js/custom.js', array('jquery'), '1.0', true );
}
