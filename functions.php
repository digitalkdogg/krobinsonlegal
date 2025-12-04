<?php
/*
 * This is the child theme for Vantage theme, generated with Generate Child Theme plugin by catchthemes.
 *
 * (Please see https://developer.wordpress.org/themes/advanced-topics/child-themes/#how-to-create-a-child-theme)
 */
add_action( 'wp_enqueue_scripts', 'vantage_child_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'vantage_child_enqueue_scripts' );
function vantage_child_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/resources/css/style.css',
        array('parent-style')
    );
}
function vantage_child_enqueue_scripts() {
    wp_enqueue_script( 'my-script', get_stylesheet_directory_uri() . '/resources/js/legal.js', array('jquery'), '1.0', true );
    wp_enqueue_script( 'waypoints', get_stylesheet_directory_uri() . '/resources/js/waypoints.min.js', array('jquery'), '1.0', true );
    wp_enqueue_script( 'inview', get_stylesheet_directory_uri() . '/resources/js/inview.min.js', array('jquery'), '1.0', true );
    
    $my_custom_field_value = get_post_meta( get_the_ID(), 'my_custom_field_key', true );
    wp_localize_script( 'my-custom-script', 'custom_field_data', array(
        'field_value' => $my_custom_field_value,
        // Add more custom fields as needed
        'another_field' => get_post_meta( get_the_ID(), 'another_custom_field_key', true ),
    ) );
}
?>