<?php

function understrap_scripts() {
    wp_enqueue_style( 'understrap-styles', get_stylesheet_directory_uri() . '/css/theme.min.css', array(), '0.4.7');
    wp_enqueue_script('jquery'); 
    wp_enqueue_script( 'understrap-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), '0.4.7', true );

}

add_action( 'wp_enqueue_scripts', 'understrap_scripts' );


