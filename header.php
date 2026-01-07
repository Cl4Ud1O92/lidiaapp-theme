<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>
    
    <!-- CSS HERO MOBILE -->
    <style>
    /* Hero ottimizzato mobile */
    .hero-wrap {
        background-attachment: scroll !important; /* Fix iOS */
        min-height: 100vh !important;
        display: flex !important;
        align-items: center !important;
    }
    
    .hero-content {
        width: 100%;
        padding: 40px 20px;
    }
    
    .hero-logo {
        max-width: 120px;
        height: auto;
        margin: 0 auto 15px;
        display: block;
    }
    
    .hero-title {
        color: white;
        font-weight: 700;
        line-height: 1.2;
        margin: 0 0 15px;
        word-wrap: break-word;
        font-size: 32px;
    }
    
    .hero-subtitle {
        color: white;
        font-weight: 300;
        line-height: 1.3;
        margin-bottom: 15px;
        font-size: 22px;
    }
    
    /* Navbar compatta */
    .navbar {
        padding: 10px 0 !important;
        min-height: 60px;
    }
    
    .navbar-brand {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 5px 0;
        font-size: 16px !important;
        line-height: 1.2 !important;
    }
    
    .navbar-brand img {
        height: 35px !important;
        width: auto;
    }
    
    .navbar-brand-text {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        max-width: 200px;
    }
    
    /* Mobile responsive */
    @media (max-width: 768px) {
        .hero-wrap {
            min-height: 70vh !important;
        }
        
        .hero-logo {
            max-width: 90px;
        }
        
        .hero-title {
            font-size: 26px !important;
            padding: 0 10px;
        }
        
        .hero-subtitle {
            font-size: 18px !important;
        }
        
        .navbar-brand {
            font-size: 14px !important;
            max-width: 70%;
        }
        
        .navbar-brand img {
            height: 30px !important;
        }
        
        .navbar-brand-text {
            max-width: 150px;
        }
    }
    
    @media (max-width: 480px) {
        .hero-title {
            font-size: 22px !important;
        }
        
        .hero-subtitle {
            font-size: 16px !important;
        }
        
        .navbar-brand {
            font-size: 13px !important;
        }
    }
    </style>
</head>
<body <?php body_class(); ?>>

<!-- HERO OTTIMIZZATO MOBILE -->
<div class="hero-wrap" id="home" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/bg_1.jpg'); background-size: cover; background-position: center;">
  <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0,0,0,0.4);"></div>
  <div class="container" style="position: relative; z-index: 2;">
    <div class="row justify-content-center">
      <div class="col-12 col-md-10 text-center hero-content">
        <a href="<?php echo home_url(); ?>" style="text-decoration: none; display: block;">
          
          <!-- LOGO -->
          <?php if (has_custom_logo()) : 
            $custom_logo_id = get_theme_mod('custom_logo');
            $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
            if ($logo) : ?>
              <img src="<?php echo esc_url($logo[0]); ?>" alt="<?php bloginfo('name'); ?>" class="hero-logo">
            <?php endif;
          elseif (file_exists(get_template_directory() . '/images/logo.png')) : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>" class="hero-logo">
          <?php else : ?>
            <span style="font-size: 60px; color: #F96D00; display: block; margin-bottom: 15px;">🌸</span>
          <?php endif; ?>
          
          <!-- TITOLO -->
          <h1 class="hero-title"><?php bloginfo('name'); ?></h1>
        </a>
        
        <!-- SOTTOTITOLO -->
        <h2 class="hero-subtitle">
          <?php 
          $description = get_bloginfo('description');
          echo $description ? $description : 'Beauty Salon Professionale';
          ?>
        </h2>
        
        <p style="color: rgba(255,255,255,0.9); font-size: 16px; margin-bottom: 25px;">Beauty Salon</p>
        
        <a href="#servizi" class="btn btn-light px-4 py-3" style="background: white; color: #333; text-decoration: none; border-radius: 5px; font-weight: 600; display: inline-block; box-shadow: 0 4px 15px rgba(0,0,0,0.2);">
          Scopri i Servizi
        </a>
      </div>
    </div>
  </div>
</div>

<!-- NAVBAR COMPATTA -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="ftco-navbar" style="position: sticky; top: 0; z-index: 1000; box-shadow: 0 2px 10px rgba(0,0,0,0.2);">
  <div class="container">
    <a class="navbar-brand" href="<?php echo home_url(); ?>" style="color: #F96D00; font-weight: 700; text-decoration: none;">
      
      <!-- LOGO NAVBAR -->
      <?php if (has_custom_logo()) : 
        $custom_logo_id = get_theme_mod('custom_logo');
        $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
        if ($logo) : ?>
          <img src="<?php echo esc_url($logo[0]); ?>" alt="<?php bloginfo('name'); ?>">
        <?php endif;
      elseif (file_exists(get_template_directory() . '/images/logo.png')) : ?>
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>">
      <?php endif; ?>
      
      <!-- NOME ABBREVIATO MOBILE -->
      <span class="navbar-brand-text"><?php bloginfo('name'); ?></span>
    </a>
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a href="#home" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="#servizi" class="nav-link">Servizi</a></li>
        <li class="nav-item"><a href="#team" class="nav-link">Team</a></li>
        <li class="nav-item"><a href="#gallery" class="nav-link">Gallery</a></li>
        <li class="nav-item"><a href="#contatti" class="nav-link">Contatti</a></li>
        
        <!-- PULSANTE LOGIN -->
        <li class="nav-item">
          <a href="#" id="btn-open-login" class="nav-link btn-login">
            <span style="margin-right: 5px;">🔐</span> Accedi
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- SMOOTH SCROLL SCRIPT -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            const target = document.querySelector(targetId);
            if (target) {
                const offset = 60;
                const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - offset;
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
    
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
    const navCollapse = document.querySelector('.navbar-collapse');
    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            if (navCollapse && navCollapse.classList.contains('show')) {
                navCollapse.classList.remove('show');
            }
        });
    });
    
    window.addEventListener('scroll', () => {
        let current = '';
        const sections = document.querySelectorAll('section[id]');
        sections.forEach(section => {
            const sectionTop = section.offsetTop - 100;
            if (window.pageYOffset >= sectionTop) {
                current = section.getAttribute('id');
            }
        });
        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href') === '#' + current) {
                link.classList.add('active');
            }
        });
    });
});
</script>