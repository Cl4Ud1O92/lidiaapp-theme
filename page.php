<?php get_header(); ?>

<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <h2 class="mb-4"><?php the_title(); ?></h2>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-8">
        <?php
        while (have_posts()) : the_post();
          the_content();
        endwhile;
        ?>
      </div>
      <div class="col-lg-4">
        <!-- Sidebar con servizi principali -->
        <div class="sidebar">
          <div class="widget">
            <h3>I Nostri Servizi</h3>
            <ul class="list-unstyled">
              <li><a href="<?php echo get_permalink(get_page_by_path('services')); ?>">Taglio e Piega</a></li>
              <li><a href="<?php echo get_permalink(get_page_by_path('services')); ?>">Colorazione</a></li>
              <li><a href="<?php echo get_permalink(get_page_by_path('services')); ?>">Trattamenti</a></li>
              <li><a href="<?php echo get_permalink(get_page_by_path('services')); ?>">Manicure/Pedicure</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
