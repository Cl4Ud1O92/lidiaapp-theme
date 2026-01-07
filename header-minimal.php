<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#f8f9fa">
    <?php wp_head(); ?>
    
    <!-- Tailwind + Montserrat (già in style.css/functions.php) -->
    <style>
        /* Minimal dashboard styles */
        html, body { 
            margin: 0; padding: 0; height: 100%; overflow-x: hidden; 
            font-family: 'Montserrat', sans-serif;
        }
        .dashboard-page { 
            min-height: 100vh; 
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        }
        /* Mobile viewport units */
        @media (max-width: 768px) {
            .mobile-bottom-nav { 
                bottom: env(safe-area-inset-bottom, 1rem); 
            }
        }
        /* Nascondi scroll bar elegante */
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: #f1f1f1; }
        ::-webkit-scrollbar-thumb { background: #c1c1c1; border-radius: 3px; }
    </style>
</head>
<body <?php body_class('dashboard-body'); ?>>
    <!-- No hero/navbar: diretto al contenuto dashboard -->
    
    <!-- PWA Meta (opzionale) -->
    <link rel="manifest" href="<?php echo home_url('/manifest.json'); ?>">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
