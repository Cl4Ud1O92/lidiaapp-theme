<?php get_header(); ?>

<?php 
// Check login status
$user = wp_get_current_user();
$is_admin = in_array('um_amministratore', $user->roles);
$is_cliente = in_array('um_cliente', $user->roles);
?>

<?php if ($is_admin) : ?>
  <!-- ADMIN LOGGATO: Redirect dashboard -->
  <script>window.location.href = '<?php echo home_url('/admin'); ?>';</script>
<?php elseif ($is_cliente) : ?>
  <!-- CLIENTE LOGGATO: Redirect account -->
  <script>window.location.href = '<?php echo home_url('/account'); ?>';</script>
<?php endif; ?>

<div class="hero-wrap-landing text-center py-5" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); min-height: 70vh; display: flex; align-items: center;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <!-- Logo -->
        <?php if (has_custom_logo()) : 
          $custom_logo_id = get_theme_mod('custom_logo');
          $logo = wp_get_attachment_image_src($custom_logo_id , 'medium');
        ?>
          <img src="<?php echo esc_url($logo[0]); ?>" alt="<?php bloginfo('name'); ?>" class="mb-4" style="max-height: 120px;">
        <?php else : ?>
          <h1 class="logo-lz mb-4"><?php bloginfo('name'); ?></h1>
        <?php endif; ?>

        <h2 class="display-4 fw-bold text-slate-800 mb-4">Area Riservata</h2>
        <p class="lead text-slate-600 mb-5">Accedi alla tua dashboard personalizzata</p>

        <?php if (!is_user_logged_in()) : ?>
        <div class="row justify-content-center g-4">
          <div class="col-md-5">
            <a href="<?php echo home_url('/admin'); ?>" class="btn btn-lg w-100 mb-3 shadow-lg" style="background: linear-gradient(135deg, #3b82f6, #1d4ed8); color: white; border-radius: 15px; padding: 15px; font-weight: 600; font-size: 18px;">
              🔐 Admin Dashboard
            </a>
          </div>
          <div class="col-md-5">
            <a href="<?php echo home_url('/account'); ?>" class="btn btn-lg w-100 shadow-lg" style="background: linear-gradient(135deg, #10b981, #059669); color: white; border-radius: 15px; padding: 15px; font-weight: 600; font-size: 18px;">
              👥 Area Clienti
            </a>
          </div>
        </div>
        <div class="mt-5">
          <a href="#" id="btn-login-index" class="btn btn-outline-primary btn-lg px-5 py-3 rounded-pill">Oppure Accedi</a>
        </div>
        <?php else : ?>
        <div class="alert alert-info">
          Benvenuto <?php echo $user->display_name; ?>! 
          <a href="<?php echo wp_logout_url(home_url()); ?>" class="btn btn-sm btn-outline-danger">Logout</a>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>

<!-- SERVIZI BREVE (mantenuti ma compatti) -->
<section class="ftco-section bg-white py-5">
  <div class="container">
    <h2 class="text-center mb-5">I Nostri Servizi</h2>
    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="text-center p-4 border rounded-3 shadow-sm h-100">
          <div class="icon mb-3"><span class="flaticon-facial-treatment" style="font-size: 3rem; color: #10b981;"></span></div>
          <h3>Skin Care</h3>
          <p>Trattamenti viso personalizzati.</p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="text-center p-4 border rounded-3 shadow-sm h-100">
          <div class="icon mb-3"><span class="flaticon-cosmetics" style="font-size: 3rem; color: #f59e0b;"></span></div>
          <h3>Makeup</h3>
          <p>Trucco professionale eventi.</p>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="text-center p-4 border rounded-3 shadow-sm h-100">
          <div class="icon mb-3"><span class="flaticon-curl" style="font-size: 3rem; color: #3b82f6;"></span></div>
          <h3>Capelli</h3>
          <p>Tagli e colorazioni.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FORM PRENOTA SEMPLICE -->
<section class="ftco-section ftco-appointment py-5 bg-light">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 text-center">
        <h3>Prenota il tuo Appuntamento</h3>
        <form action="#" class="row g-3 justify-content-center mt-4">
          <div class="col-md-3"><input type="text" class="form-control" placeholder="Nome"></div>
          <div class="col-md-3"><input type="tel" class="form-control" placeholder="Telefono"></div>
          <div class="col-md-3">
            <input type="date" class="form-control" placeholder="Data">
          </div>
          <div class="col-md-3">
            <button type="submit" class="btn btn-primary w-100 py-3 rounded-pill">Prenota</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- Trigger Login dal landing -->
<script>
$('#btn-login-index').click(function(e) {
  e.preventDefault();
  $('#btn-open-login').click(); // Modal header
});
</script>

<?php get_footer(); ?>
