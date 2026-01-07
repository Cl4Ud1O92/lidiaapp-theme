<?php
/**
 * Template Name: Admin Dashboard LZ
 * Descrizione: Dashboard admin responsive mobile/desktop
 */
get_header('minimal'); // Usa header.php padre (minimal se modifichi)
?>

<div class="dashboard-page min-h-screen p-4 md:p-6">
  <!-- Logo Top Sempre Visibile -->
  <div class="text-center mb-8 pb-4">
    <h1 class="logo-lz">LZ</h1>
    <p class="text-sm text-slate-600 mt-2 font-medium">Lidia Zucaro Parrucchieri</p>
  </div>

  <!-- Contenuti Centrali -->
  <div class="max-w-4xl mx-auto space-y-6">
    <!-- Header + Stats + Search (da bozza) -->
    <div class="bg-white/80 backdrop-blur-md rounded-3xl shadow-2xl p-6 md:p-8 border">
      <h2 class="text-2xl md:text-3xl font-black text-slate-800 mb-6">Aggiungi Nuovo</h2>
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Totale Clienti Verde -->
        <div class="stats-green text-white p-8 rounded-2xl text-center">
          <div class="text-lg md:text-xl font-semibold mb-2 opacity-90">Totale Clienti</div>
          <div class="text-4xl md:text-5xl font-black mb-2">124</div> <!-- Da UM/DB -->
          <div class="text-sm opacity-90">+12 questo mese</div>
        </div>
        <!-- Cerca + Svuota Arancio -->
        <div class="flex flex-col sm:flex-row gap-4 items-end">
          <input type="text" id="search-clienti" placeholder="Cerca cliente..." 
                 class="search-input flex-1 w-full">
          <button onclick="svuotaCerca()" class="btn-svuota">Svuota</button>
        </div>
      </div>
    </div>

    <!-- Tab Content (default CLIENTI) -->
    <div id="tab-content" class="bg-white/80 backdrop-blur-md rounded-3xl shadow-2xl p-6 md:p-8 min-h-[400px]">
      <!-- Placeholder CLIENTI: Tabella UM -->
      <div id="clienti-tab">
        <h3 class="text-xl font-bold mb-4">Clienti</h3>
        <div class="table-responsive">
          <table class="table table-striped w-full">
            <thead class="bg-slate-50">
              <tr><th>Nome</th><th>Email</th><th>Telefono</th><th>Appuntamenti</th><th>Fidelity</th><th>Azioni</th></tr>
            </thead>
            <tbody>
              <!-- Fetch UM: [ultimatemember_directory roles="um_cliente"] o AJAX -->
              <tr><td>Lidia Z.</td><td>lidia@email.com</td><td>123456</td><td>5</td><td>8/10</td><td><button class="btn btn-sm btn-primary">Edit</button></td></tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <!-- Bottom Tabs (fisse mobile, static desktop) -->
  <nav class="mobile-bottom-nav fixed bottom-6 left-1/2 -translate-x-1/2 w-11/12 max-w-md lg:static lg:mt-12 lg:flex lg:justify-center bg-white/90 rounded-3xl shadow-2xl p-3 lg:p-4 gap-2">
    <button onclick="switchTab('clienti')" class="tab-btn flex-1" data-active="true">
      <i class="ion-android-people mr-2"></i> CLIENTI
    </button>
    <button onclick="switchTab('fidelity')" class="tab-btn flex-1">
      <i class="ion-card mr-2"></i> FIDELITY
    </button>
    <button onclick="switchTab('agenda')" class="tab-btn flex-1">
      <i class="ion-ios-calendar mr-2"></i> AGENDA
    </button>
  </nav>
</div>

<script>
let currentTab = 'clienti';
function switchTab(tab) {
  currentTab = tab;
  document.querySelectorAll('.tab-btn').forEach(btn => btn.removeAttribute('data-active'));
  event.target.setAttribute('data-active', 'true');
  
  const content = document.getElementById('tab-content');
  if (tab === 'clienti') {
    content.innerHTML = document.getElementById('clienti-tab').innerHTML;
  } else if (tab === 'fidelity') {
    content.innerHTML = '<h3 class="text-xl font-bold mb-4">Fidelity Cards</h3><div>Placeholder tessere clienti</div>';
  } else if (tab === 'agenda') {
    content.innerHTML = '<h3 class="text-xl font-bold mb-4">Agenda</h3><!-- [salon] qui -->';
  }
}
function svuotaCerca() {
  document.getElementById('search-clienti').value = '';
  // Filtra tabella
}
AOS.init(); // AOS dal padre
</script>

<?php get_footer('minimal'); // Minimal se modifichi ?>
