<?php

add_action('wp_enqueue_scripts', 'portfolio_scripts');

function portfolio_scripts() {
    wp_enqueue_style('main', get_stylesheet_uri());
    wp_enqueue_style('main_styles', get_template_directory_uri() . '/assets/css/style.css', array('main'), null);

    wp_enqueue_style('glide-css', 'https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/css/glide.core.min.css', array(), '3.2.0', 'all');
    wp_enqueue_style('glide-theme-css', 'https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/css/glide.theme.min.css', array(), '3.2.0', 'all');
  
}

add_theme_support( 'post-thumbnails' );

function add_footer_scripts() {
    wp_enqueue_script('glide-js', 'https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/glide.min.js');
    wp_enqueue_script('main_script', get_template_directory_uri() . '/assets/js/index.js');
    wp_enqueue_script( 'gsap-js', 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js', array(), false, true );
    wp_enqueue_script( 'gsap-st', 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js', array('gsap-js'), false, true );
    $sprite = file_get_contents(get_template_directory() . '/assets/svg/sprite.svg');
    echo $sprite;
}
add_action('wp_footer', 'add_footer_scripts');

?>

