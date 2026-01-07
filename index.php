<?php get_header(); ?>

<?php 
$user = wp_get_current_user();
$is_admin = in_array('administrator', $user->roles) || in_array('staff', $user->roles);
$is_cliente = in_array('cliente', $user->roles);
?>

<?php if ($is_admin): ?>
<script>window.location.href = '<?php echo home_url('/admin'); ?>';</script>
<?php elseif ($is_cliente): ?>
<script>window.location.href = '<?php echo home_url('/account'); ?>';</script>
<?php endif; ?>

<div class="hero-wrap min-vh-100 d-flex align-items-center justify-content-center bg-gradient" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">
  <div class="container text-center">
    <div class="logo-lz mb-5" style="font-size: 4rem; font-weight: 900; color: #10b981; text-shadow: 0 4px 8px rgba(0,0,0,0.1);"><?php bloginfo('name'); ?></div>
    
    <?php if (!is_user_logged_in()): ?>
    <div class="row g-4 justify-content-center">
      <div class="col-md-5">
        <a href="<?php echo home_url('/admin'); ?>" class="btn btn-lg w-100 shadow-lg mb-3 p-4 fs-4 fw-bold rounded-4" style="background: linear-gradient(135deg, #3b82f6, #1d4ed8); color: white;">
          👩‍💼 Admin Dashboard
        </a>
      </div>
      <div class="col-md-5">
        <a href="<?php echo home_url('/account'); ?>" class="btn btn-lg w-100 shadow-lg p-4 fs-4 fw-bold rounded-4" style="background: linear-gradient(135deg, #10b981, #059669); color: white;">
          👩‍🎨 Area Clienti
        </a>
      </div>
    </div>
    <?php else: ?>
    <div class="alert alert-success fs-3">
      Benvenuto, <?php echo $user->display_name; ?>!
      <br><a href="<?php echo wp_logout_url(home_url()); ?>" class="btn btn-outline-danger btn-lg mt-3">Logout</a>
    </div>
    <?php endif; ?>
  </div>
</div>

<script>
$('#btn-login-index').click(function(e) {
  e.preventDefault();
  $('#btn-open-login').click(); // Modal Ultimate Member header
});
</script>

<?php get_footer(); ?>
