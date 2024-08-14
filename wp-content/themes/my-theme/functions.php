<?php

add_action('wp_enqueue_scripts', 'portfolio_scripts');

function portfolio_scripts() {
    wp_enqueue_style('main', get_stylesheet_uri());
    wp_enqueue_style('main_styles', get_template_directory_uri() . '/assets/css/style.css', array('main'), null);

    wp_enqueue_style('glide-css', 'https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/css/glide.core.min.css', array(), '3.2.0', 'all');
    wp_enqueue_style('glide-theme-css', 'https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.2.0/css/glide.theme.min.css', array(), '3.2.0', 'all');
  
}

add_theme_support( 'post-thumbnails' );

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

function send_mail() {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = sanitize_text_field($_POST['name']);
        $email = sanitize_email($_POST['email']);
        $message = sanitize_textarea_field($_POST['message']);
    
        $to = 'karina.kolesnichenko@outlook.com'; 
        $subject = 'New message from contact form';
        $body = "Name: $name\nEmail: $email\nMessage:\n$message";
    
        $headers = array('Content-Type: text/plain; charset=UTF-8');
    
        if (wp_mail($to, $subject, $body, $headers)) {
            echo 'Your message was sent successfully!';
        } else {
            echo 'Error: Email failed to send.';
        }
    }
}

add_action('wp_enqueue_scripts', 'send_mail');

?>

