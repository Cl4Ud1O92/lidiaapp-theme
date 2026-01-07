jQuery(document).ready(function($) {
    let currentTab = 'clienti';
    
    // Switch tabs (mobile/desktop)
    window.switchTab = function(tab) {
        currentTab = tab;
        $('.tab-btn').removeAttr('data-active');
        $(event.target).attr('data-active', 'true');
        
        const $content = $('#tab-content');
        $content.fadeOut(200, function() {
            switch(tab) {
                case 'clienti':
                    $content.html(`
                        <h3 class="text-xl font-bold mb-4 text-slate-800">👥 Clienti</h3>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover w-full">
                                <thead class="bg-slate-50 rounded-t-xl">
                                    <tr>
                                        <th class="p-3 font-semibold">Nome</th>
                                        <th class="p-3 font-semibold">Email</th>
                                        <th class="p-3 font-semibold">Tel</th>
                                        <th class="p-3 font-semibold">Appunt.</th>
                                        <th class="p-3 font-semibold">Fidelity</th>
                                        <th class="p-3 font-semibold">Azioni</th>
                                    </tr>
                                </thead>
                                <tbody id="clienti-tbody">
                                    <!-- Carica UM via AJAX -->
                                    <tr class="hover:bg-slate-50">
                                        <td class="p-3 font-medium">Lidia Zucaro</td>
                                        <td class="p-3">lidia@parrucchieri.it</td>
                                        <td class="p-3">+39 123 456</td>
                                        <td class="p-3">15</td>
                                        <td class="p-3"><span class="bg-green-100 text-green-800 px-2 py-1 rounded-full text-sm">8/10</span></td>
                                        <td class="p-3">
                                            <button class="btn btn-sm btn-primary mr-1">Edit</button>
                                            <button class="btn btn-sm btn-danger">Del</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="mt-4 text-center">
                            <button class="btn btn-success px-6 py-2 rounded-xl font-bold">+ AGGIUNGI CLIENTE</button>
                        </div>
                    `);
                    break;
                case 'fidelity':
                    $content.html(`
                        <h3 class="text-xl font-bold mb-4 text-slate-800">💳 Fidelity Cards</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                            <!-- Cards placeholder -->
                            <div class="bg-gradient-to-r from-blue-500 to-indigo-600 text-white p-6 rounded-2xl shadow-xl">
                                <h4 class="font-bold text-lg mb-2">Lidia Z.</h4>
                                <div class="text-3xl font-black mb-2">8/10</div>
                                <button class="btn btn-light px-4 py-2 rounded-xl w-full mb-2">+1 Timbro</button>
                                <button class="btn btn-warning px-4 py-2 rounded-xl w-full">Reset</button>
                            </div>
                        </div>
                    `);
                    break;
                case 'agenda':
                    $content.html(`
                        <h3 class="text-xl font-bold mb-4 text-slate-800">📅 Agenda Oggi</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <!-- Salon Booking integration -->
                            <iframe src="[salon_calendar_iframe]" class="w-full h-96 rounded-2xl border-0 shadow-lg"></iframe>
                        </div>
                    `);
                    break;
            }
            $content.fadeIn(300);
            AOS.refresh(); // Refresh animazioni
        });
    };
    
    // Search clienti (placeholder)
    window.svuotaCerca = function() {
        $('#search-clienti').val('');
        // Ricarica tabella completa
    };
    
    // Default: CLIENTI attivo
    switchTab('clienti');
});
