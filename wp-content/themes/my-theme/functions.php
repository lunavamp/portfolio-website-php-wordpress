<?php

add_action('wp_enqueue_scripts', 'portfolio_scripts');

function portfolio_scripts() {
    wp_enqueue_style('main', get_stylesheet_uri());
    wp_enqueue_style('main_styles', get_template_directory_uri() . '/assets/css/style.css', array('main'), null);

    wp_enqueue_style('glide-css', 'https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/css/glide.core.min.css', array(), '3.2.0', 'all');
    wp_enqueue_style('glide-theme-css', 'https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/css/glide.theme.min.css', array(), '3.2.0', 'all');
  
}


function enqueue_svg_sprite() {
    
    wp_enqueue_script('svg-sprite', get_template_directory_uri() . '/assets/svg/sprite.svg', array(), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_svg_sprite');

function add_footer_scripts() {
    wp_enqueue_script('glide-js', 'https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/glide.min.js');
    wp_enqueue_script('main_script', get_template_directory_uri() . '/assets/js/index.js');
    $sprite = file_get_contents(get_template_directory() . '/assets/svg/sprite.svg');
    echo $sprite;
}
add_action('wp_footer', 'add_footer_scripts');


?>

