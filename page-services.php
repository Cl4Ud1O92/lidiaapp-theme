<?php
/*
Template Name: Servizi
*/
get_header(); ?>

<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <h2 class="mb-4">I Nostri Servizi</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 ftco-animate">
        <div class="media d-block text-center block-6 services">
          <div class="icon d-flex mb-3"><span class="flaticon-facial-treatment"></span></div>
          <div class="media-body">
            <h3 class="heading">Skin & Beauty Care</h3>
            <?php the_content(); ?>
          </div>
        </div>      
      </div>
      <div class="col-md-4 ftco-animate">
        <div class="media d-block text-center block-6 services">
          <div class="icon d-flex mb-3"><span class="flaticon-cosmetics"></span></div>
          <div class="media-body">
            <h3 class="heading">Makeup Pro</h3>
            <p>Trucco professionale per eventi speciali e matrimoni.</p>
          </div>
        </div>      
      </div>
      <div class="col-md-4 ftco-animate">
        <div class="media d-block text-center block-6 services">
          <div class="icon d-flex mb-3"><span class="flaticon-curl"></span></div>
          <div class="media-body">
            <h3 class="heading">Hair Style</h3>
            <p>Tagli, pieghe, acconciature e colorazioni personalizzate.</p>
          </div>
        </div>    
      </div>
    </div>
    
    <!-- Tabella Prezzi -->
    <div class="row justify-content-center mt-5">
      <div class="col-md-10">
        <h3 class="text-center mb-4">Prezzi</h3>
        <div class="row">
          <div class="col-md-3 ftco-animate">
            <div class="pricing-entry pb-5 text-center">
              <h3 class="mb-4">Basic</h3>
              <p><span class="price">€25</span></p>
              <ul>
                <li>Taglio Donna</li>
                <li>Shampoo</li>
              </ul>
              <p><a href="#appointment" class="btn btn-primary btn-outline-primary px-4 py-3">Prenota</a></p>
            </div>
          </div>
          <!-- altri 3 piani... -->
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
