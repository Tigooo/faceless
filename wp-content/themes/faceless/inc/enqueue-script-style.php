<?php
add_action( 'wp_enqueue_scripts', 'template_script_style' );
function template_script_style() {
    wp_enqueue_style( 'tw-style', get_template_directory_uri() . '/assets/css/tw-style.css' );
    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.min.css' );
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script(
        'youtube-iframe-api',
        'https://www.youtube.com/iframe_api',
        array(),
        null,
        true
    );
    wp_enqueue_script( 'scripts', get_template_directory_uri() . '/assets/js/scripts.min.js', array(), null, true );
}