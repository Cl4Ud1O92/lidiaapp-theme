<!-- FINE CONTENUTO DASHBOARD -->

<!-- MODAL LOGIN (ereditato da header, ma leggero qui se serve) -->
<?php if (is_page('admin') || is_page('account')) : ?>
<div id="modal-logout" class="modal-overlay" style="display: none;">
  <div class="modal-container">
    <div class="modal-header">
      <h2>Conferma Logout</h2>
      <button id="btn-close-logout" class="btn-close">&times;</button>
    </div>
    <div class="modal-body text-center">
      <p>Vuoi davvero uscire?</p>
      <div class="mt-4 space-x-3">
        <button onclick="logoutUser()" class="btn-submit bg-red-500 hover:bg-red-600">Sì, Esci</button>
        <button onclick="closeLogoutModal()" class="btn btn-secondary px-6 py-2 rounded-xl">Annulla</button>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>

<!-- SCRIPTS ESSENZIALI DASHBOARD -->
<script>
// Logout
function logoutUser() {
  sessionStorage.clear();
  localStorage.clear();
  window.location.href = '<?php echo home_url(); ?>';
}
function closeLogoutModal() {
  document.getElementById('modal-logout').style.display = 'none';
  document.body.style.overflow = '';
}

// PWA Service Worker (opzionale)
if ('serviceWorker' in navigator) {
  navigator.serviceWorker.register('<?php echo home_url('/sw.js'); ?>')
    .then(reg => console.log('SW registrato'))
    .catch(err => console.log('SW errore', err));
}

// Fix viewport mobile tabs
window.addEventListener('resize', () => {
  if (window.innerWidth < 768) {
    document.querySelector('.mobile-bottom-nav')?.style.bottom = 'env(safe-area-inset-bottom)';
  }
});
</script>

<!-- AOS Refresh (se usato padre) -->
<script>
if (typeof AOS !== 'undefined') {
  AOS.refresh();
}
</script>

<!-- WP Footer Obbligatorio -->
<?php wp_footer(); ?>

</body>
</html>
