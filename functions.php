<?php
/*
 * This is the child theme for Vantage theme, generated with Generate Child Theme plugin by catchthemes.
 *
 * (Please see https://developer.wordpress.org/themes/advanced-topics/child-themes/#how-to-create-a-child-theme)
 */
add_action( 'wp_enqueue_scripts', 'vantage_child_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'my_custom_scripts' );
function vantage_child_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}
function my_custom_scripts() {
    wp_enqueue_script( 'my-script', get_stylesheet_directory_uri() . '/legal.js', array('jquery'), '1.0', true );
}
/*
 * Your code goes below
 */