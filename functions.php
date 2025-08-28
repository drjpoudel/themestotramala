<?php

/**
 * Enqueue scripts and styles.
 */
function shreevaishnav_stotramala_scripts() {
    // Enqueue the main stylesheet.
    wp_enqueue_style( 'shreevaishnav-stotramala-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'shreevaishnav_stotramala_scripts' );

/**
 * Add theme support for title tag
 */
function shreevaishnav_stotramala_setup() {
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'shreevaishnav_stotramala_setup' );
