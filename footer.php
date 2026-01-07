<footer class="ftco-footer ftco-section" style="background: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8)), url('<?php echo get_template_directory_uri(); ?>/images/bg_4.jpg') center/cover; color: white; padding: 60px 0 30px;">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-4">
        <h2 style="color: white; font-size: 24px; margin-bottom: 20px; font-weight: 700;"><?php bloginfo('name'); ?></h2>
        <p style="color: rgba(255,255,255,0.7); line-height: 1.8; margin-bottom: 30px;"><?php bloginfo('description'); ?></p>
        <div>
          <a href="#" style="display: inline-block; width: 40px; height: 40px; background: rgba(255,255,255,0.1); border-radius: 50%; text-align: center; line-height: 40px; margin-right: 10px; color: white; text-decoration: none; transition: all 0.3s;" onmouseover="this.style.background='#F96D00'" onmouseout="this.style.background='rgba(255,255,255,0.1)'">
            <span>📘</span>
          </a>
          <a href="#" style="display: inline-block; width: 40px; height: 40px; background: rgba(255,255,255,0.1); border-radius: 50%; text-align: center; line-height: 40px; margin-right: 10px; color: white; text-decoration: none; transition: all 0.3s;" onmouseover="this.style.background='#F96D00'" onmouseout="this.style.background='rgba(255,255,255,0.1)'">
            <span>📷</span>
          </a>
          <a href="#" style="display: inline-block; width: 40px; height: 40px; background: rgba(255,255,255,0.1); border-radius: 50%; text-align: center; line-height: 40px; color: white; text-decoration: none; transition: all 0.3s;" onmouseover="this.style.background='#F96D00'" onmouseout="this.style.background='rgba(255,255,255,0.1)'">
            <span>🐦</span>
          </a>
        </div>
      </div>
      <div class="col-md-4">
        <h3 style="color: white; font-size: 20px; margin-bottom: 20px; font-weight: 600;">Link Rapidi</h3>
        <ul style="list-style: none; padding: 0;">
          <li style="margin-bottom: 10px;"><a href="#home" style="color: rgba(255,255,255,0.7); text-decoration: none; transition: color 0.3s;" onmouseover="this.style.color='#F96D00'" onmouseout="this.style.color='rgba(255,255,255,0.7)'">Home</a></li>
          <li style="margin-bottom: 10px;"><a href="#servizi" style="color: rgba(255,255,255,0.7); text-decoration: none; transition: color 0.3s;" onmouseover="this.style.color='#F96D00'" onmouseout="this.style.color='rgba(255,255,255,0.7)'">Servizi</a></li>
          <li style="margin-bottom: 10px;"><a href="#team" style="color: rgba(255,255,255,0.7); text-decoration: none; transition: color 0.3s;" onmouseover="this.style.color='#F96D00'" onmouseout="this.style.color='rgba(255,255,255,0.7)'">Team</a></li>
          <li style="margin-bottom: 10px;"><a href="#gallery" style="color: rgba(255,255,255,0.7); text-decoration: none; transition: color 0.3s;" onmouseover="this.style.color='#F96D00'" onmouseout="this.style.color='rgba(255,255,255,0.7)'">Gallery</a></li>
          <li style="margin-bottom: 10px;"><a href="#contatti" style="color: rgba(255,255,255,0.7); text-decoration: none; transition: color 0.3s;" onmouseover="this.style.color='#F96D00'" onmouseout="this.style.color='rgba(255,255,255,0.7)'">Contatti</a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <h3 style="color: white; font-size: 20px; margin-bottom: 20px; font-weight: 600;">Contatti</h3>
        <ul style="list-style: none; padding: 0; color: rgba(255,255,255,0.7); line-height: 2;">
          <li style="margin-bottom: 15px;">
            <span style="color: #F96D00; margin-right: 10px;">📍</span>
            Via Example 123, Milano (MI)
          </li>
          <li style="margin-bottom: 15px;">
            <span style="color: #F96D00; margin-right: 10px;">📞</span>
            <a href="tel:+39123456789" style="color: rgba(255,255,255,0.7); text-decoration: none;">+39 123 456 789</a>
          </li>
          <li>
            <span style="color: #F96D00; margin-right: 10px;">✉️</span>
            <a href="mailto:info@tuosalone.it" style="color: rgba(255,255,255,0.7); text-decoration: none;">info@tuosalone.it</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-center" style="padding-top: 30px; border-top: 1px solid rgba(255,255,255,0.1);">
        <p style="color: rgba(255,255,255,0.5); margin: 0;">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Tutti i diritti riservati.</p>
      </div>
    </div>
  </div>
</footer>

<!-- MODAL LOGIN -->
<div id="modal-login" class="modal-overlay" style="display: none;">
  <div class="modal-container">
    <div class="modal-header">
      <h2>Area Riservata</h2>
      <button id="btn-close-modal" class="btn-close" aria-label="Chiudi">&times;</button>
    </div>
    
    <div class="modal-body">
      <form id="login-form">
        <div class="form-group">
          <label for="login-username">Username</label>
          <input 
            type="text" 
            id="login-username" 
            name="username" 
            required 
            placeholder="Inserisci username"
            autocomplete="username"
          >
        </div>
        
        <div class="form-group">
          <label for="login-password">Password</label>
          <input 
            type="password" 
            id="login-password" 
            name="password" 
            required 
            placeholder="Inserisci password"
            autocomplete="current-password"
          >
        </div>
        
        <div id="login-error" class="error-message" style="display: none;"></div>
        
        <button type="submit" id="btn-login" class="btn-submit">
          Accedi
        </button>
      </form>
      
      <div class="modal-footer">
        <p style="text-align: center; color: #999; font-size: 14px; margin-top: 20px;">
          Non hai le credenziali? Contattaci in salone.
        </p>
      </div>
    </div>
  </div>
</div>

<!-- CSS MODAL -->
<style>
/* Overlay sfondo */
.modal-overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.7);
  backdrop-filter: blur(5px);
  z-index: 99999;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 20px;
  animation: fadeIn 0.3s ease;
}

@keyframes fadeIn {
  from { opacity: 0; }
  to { opacity: 1; }
}

/* Container modal */
.modal-container {
  background: white;
  border-radius: 15px;
  max-width: 450px;
  width: 100%;
  box-shadow: 0 10px 40px rgba(0, 0, 0, 0.3);
  animation: slideUp 0.3s ease;
  max-height: 90vh;
  overflow-y: auto;
}

@keyframes slideUp {
  from {
    opacity: 0;
    transform: translateY(30px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

/* Header modal */
.modal-header {
  padding: 25px 30px;
  border-bottom: 1px solid #eee;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.modal-header h2 {
  margin: 0;
  color: #333;
  font-size: 24px;
  font-weight: 700;
}

.btn-close {
  background: none;
  border: none;
  font-size: 32px;
  color: #999;
  cursor: pointer;
  padding: 0;
  width: 30px;
  height: 30px;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: color 0.3s;
  line-height: 1;
}

.btn-close:hover {
  color: #F96D00;
}

/* Body modal */
.modal-body {
  padding: 30px;
}

/* Form */
.form-group {
  margin-bottom: 20px;
}

.form-group label {
  display: block;
  margin-bottom: 8px;
  color: #555;
  font-weight: 600;
  font-size: 14px;
}

.form-group input {
  width: 100%;
  padding: 12px 15px;
  border: 2px solid #e0e0e0;
  border-radius: 8px;
  font-size: 16px;
  transition: all 0.3s;
  box-sizing: border-box;
}

.form-group input:focus {
  outline: none;
  border-color: #F96D00;
  box-shadow: 0 0 0 3px rgba(249, 109, 0, 0.1);
}

/* Messaggio errore */
.error-message {
  background: #fee;
  color: #c33;
  padding: 12px 15px;
  border-radius: 8px;
  margin-bottom: 15px;
  font-size: 14px;
  border-left: 4px solid #c33;
}

/* Pulsante submit */
.btn-submit {
  width: 100%;
  padding: 15px;
  background: linear-gradient(135deg, #F96D00 0%, #ff8c00 100%);
  color: white;
  border: none;
  border-radius: 8px;
  font-size: 16px;
  font-weight: 600;
  cursor: pointer;
  transition: all 0.3s;
  box-shadow: 0 4px 15px rgba(249, 109, 0, 0.3);
}

.btn-submit:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 20px rgba(249, 109, 0, 0.4);
}

.btn-submit:active {
  transform: translateY(0);
}

.btn-submit:disabled {
  background: #ccc;
  cursor: not-allowed;
  transform: none;
  box-shadow: none;
}

/* Pulsante login navbar */
.btn-login {
  background: #F96D00 !important;
  color: white !important;
  padding: 10px 20px !important;
  border-radius: 8px !important;
  font-weight: 600 !important;
  margin-left: 15px !important;
  transition: all 0.3s !important;
  display: inline-flex !important;
  align-items: center !important;
}

.btn-login:hover {
  background: #ff8c00 !important;
  transform: translateY(-2px);
  box-shadow: 0 4px 15px rgba(249, 109, 0, 0.3);
}

/* Mobile responsive */
@media (max-width: 768px) {
  .modal-container {
    margin: 20px;
    max-width: 100%;
  }
  
  .modal-header {
    padding: 20px;
  }
  
  .modal-header h2 {
    font-size: 20px;
  }
  
  .modal-body {
    padding: 20px;
  }
  
  .btn-login {
    padding: 8px 15px !important;
    font-size: 14px !important;
    margin-left: 10px !important;
  }
}

/* Chiudi modal cliccando fuori */
.modal-overlay.closing {
  animation: fadeOut 0.3s ease;
}

@keyframes fadeOut {
  from { opacity: 1; }
  to { opacity: 0; }
}
</style>

<!-- JAVASCRIPT MODAL + LOGIN -->
<script>
(function() {
  'use strict';
  
  // Attendi che DOM sia pronto
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initModal);
  } else {
    initModal();
  }
  
  function initModal() {
    // Elementi DOM
    const modalOverlay = document.getElementById('modal-login');
    const btnOpenLogin = document.getElementById('btn-open-login');
    const btnCloseModal = document.getElementById('btn-close-modal');
    const loginForm = document.getElementById('login-form');
    const loginError = document.getElementById('login-error');
    const btnLogin = document.getElementById('btn-login');
    
    if (!modalOverlay || !btnOpenLogin) {
      console.warn('Modal login: elementi non trovati');
      return;
    }
    
    // Apri modal
    btnOpenLogin.addEventListener('click', function(e) {
      e.preventDefault();
      modalOverlay.style.display = 'flex';
      document.body.style.overflow = 'hidden';
      setTimeout(function() {
        const usernameInput = document.getElementById('login-username');
        if (usernameInput) usernameInput.focus();
      }, 100);
    });
    
    // Chiudi modal (pulsante X)
    if (btnCloseModal) {
      btnCloseModal.addEventListener('click', closeModal);
    }
    
    // Chiudi modal (click su overlay)
    modalOverlay.addEventListener('click', function(e) {
      if (e.target === modalOverlay) {
        closeModal();
      }
    });
    
    // Chiudi modal (tasto ESC)
    document.addEventListener('keydown', function(e) {
      if (e.key === 'Escape' && modalOverlay.style.display === 'flex') {
        closeModal();
      }
    });
    
    // Funzione chiusura modal
    function closeModal() {
      modalOverlay.classList.add('closing');
      setTimeout(function() {
        modalOverlay.style.display = 'none';
        modalOverlay.classList.remove('closing');
        document.body.style.overflow = '';
        if (loginForm) loginForm.reset();
        if (loginError) loginError.style.display = 'none';
      }, 300);
    }
    
    // Submit login
    if (loginForm) {
      loginForm.addEventListener('submit', async function(e) {
        e.preventDefault();
        
        const username = document.getElementById('login-username').value.trim();
        const password = document.getElementById('login-password').value;
        
        // Reset errore
        if (loginError) loginError.style.display = 'none';
        if (btnLogin) {
          btnLogin.disabled = true;
          btnLogin.textContent = 'Accesso in corso...';
        }
        
        try {
          // TODO: Sostituisci con URL API reale quando pronta
          const API_URL = 'https://api.lidiazucaroparrucchieri.it/api/auth/login';
          
          const response = await fetch(API_URL, {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json'
            },
            body: JSON.stringify({ username: username, password: password })
          });
          
          const data = await response.json();
          
          if (!response.ok) {
            throw new Error(data.error || 'Credenziali non valide');
          }
          
          // Login OK - Redirect in base al tipo utente
          const token = data.token;
          const userType = data.user.tipo;
          
          // Salva token in sessionStorage (backup)
          sessionStorage.setItem('auth_token', token);
          sessionStorage.setItem('user_data', JSON.stringify(data.user));
          
          // Redirect
          if (userType === 'admin') {
            window.location.href = 'https://admin.lidiazucaroparrucchieri.it/dashboard?token=' + encodeURIComponent(token);
          } else if (userType === 'cliente') {
            window.location.href = 'https://clienti.lidiazucaroparrucchieri.it/dashboard?token=' + encodeURIComponent(token);
          } else {
            throw new Error('Tipo utente non riconosciuto');
          }
          
        } catch (error) {
          console.error('Errore login:', error);
          if (loginError) {
            loginError.textContent = error.message || 'Errore di connessione. Riprova.';
            loginError.style.display = 'block';
          }
          if (btnLogin) {
            btnLogin.disabled = false;
            btnLogin.textContent = 'Accedi';
          }
        }
      });
    }
  }
})();
</script>

<!-- INIZIALIZZA AOS -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Inizializza AOS
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 1000,
            easing: 'ease-in-out',
            once: true,
            mirror: false,
            offset: 100
        });
    }
});
</script>

<?php wp_footer(); ?>
</body>
</html>