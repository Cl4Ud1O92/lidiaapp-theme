<?php
if (!defined('ABSPATH')) exit;

/**
 * Child Theme: LZ Child per developapp.website
 * Eredita salone_assets + aggiunge dashboard webapp
 */

// Asset genitore (già perfetti)
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
add_action('wp_enqueue_scripts', 'salone_assets', 5); // Prima del child

// NUOVO: Dashboard specifici (Tailwind + JS solo /admin /account)
function lidiaapp_dashboard_assets() {
    if (is_page(['admin', 'account'])) {
        // Tailwind CDN
        wp_enqueue_style('tailwind-cdn', 'https://cdn.tailwindcss.com', [], '3.4.1');
        
        // Custom JS dashboard (crea js/dashboard.js dopo)
        wp_enqueue_script('dashboard-js', get_stylesheet_directory_uri() . '/js/dashboard.js', ['jquery', 'aos-js'], '1.0', true);
        
        // Inline Tailwind config brand colors
        $custom_css = "
        .logo-lz { font-family: 'Montserrat', sans-serif; font-weight: 700; }
        .stats-green { background: linear-gradient(135deg, #10b981, #059669); }
        ";
        wp_add_inline_style('tailwind-cdn', $custom_css);
    }
}
add_action('wp_enqueue_scripts', 'lidiaapp_dashboard_assets', 20); // Dopo genitore

// Setup genitore + webapp
function salone_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    register_nav_menus(['primary' => 'Menu Principale']);
}
add_action('after_setup_theme', 'salone_setup');

// NUOVO: UI minimal dashboard (no admin bar, restrict ruoli)
function lidiaapp_minimal_ui() {
    if (is_page(['admin', 'account'])) {
        show_admin_bar(false);
        
        // Solo per utenti loggati UM
        if (!is_user_logged_in() || (!current_user_can('um_amministratore') && !current_user_can('um_cliente'))) {
            wp_redirect(home_url('/login/'));
            exit;
        }
    }
}
add_action('wp', 'lidiaapp_minimal_ui');

// Rileva custom page templates (page-admin.php)
add_filter('theme_page_templates', function($templates) {
    $templates['page-admin.php'] = 'Admin Dashboard LZ';
    return $templates;
});
?>
