<?php
if (!defined('ABSPATH')) exit;

function salone_assets() {
    wp_enqueue_style('bootstrap-cdn', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css', [], null);
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700', [], null);
    
    // AOS Animations
    wp_enqueue_style('aos-css', get_template_directory_uri() . '/css/aos.css', [], '1.0');
    
    $css_files = ['animate.css', 'style.css', 'flaticon.css', 'icomoon.css'];
    foreach ($css_files as $css) {
        if (file_exists(get_template_directory() . '/css/' . $css)) {
            wp_enqueue_style('salone-' . str_replace('.css', '', $css), get_template_directory_uri() . '/css/' . $css, ['bootstrap-cdn'], '1.0');
        }
    }
    
    wp_enqueue_script('jquery');
    wp_enqueue_script('popper-cdn', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', ['jquery'], null, true);
    wp_enqueue_script('bootstrap-cdn', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js', ['jquery'], null, true);
    
    // AOS JS
    if (file_exists(get_template_directory() . '/js/aos.js')) {
        wp_enqueue_script('aos-js', get_template_directory_uri() . '/js/aos.js', ['jquery'], null, true);
    }
    
    if (file_exists(get_template_directory() . '/js/main.js')) {
        wp_enqueue_script('salone-main', get_template_directory_uri() . '/js/main.js', ['jquery', 'bootstrap-cdn', 'aos-js'], null, true);
    }
}
add_action('wp_enqueue_scripts', 'salone_assets');

function salone_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    register_nav_menus(['primary' => 'Menu Principale']);
}
add_action('after_setup_theme', 'salone_setup');
?>