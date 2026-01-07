<?php get_header(); ?>

<!-- CSS INLINE -->
<style>
html { scroll-behavior: smooth; }
body { font-family: 'Montserrat', Arial, sans-serif; }
.ftco-section { padding: 100px 0; }
.bg-light { background: #f8f9fa !important; }
.service-card { 
    background: white; 
    padding: 40px; 
    border-radius: 15px; 
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    margin-bottom: 30px;
    text-align: center;
    transition: all 0.3s;
    height: 100%;
}
.service-card:hover { 
    transform: translateY(-10px); 
    box-shadow: 0 10px 30px rgba(249,109,0,0.2);
}
.service-icon { 
    font-size: 70px; 
    margin-bottom: 20px;
    display: block;
}
.heading { 
    font-size: 24px; 
    color: #333; 
    font-weight: 600;
    margin-bottom: 15px;
}
.nav-link.active { color: #F96D00 !important; }
</style>

<!-- SERVIZI -->
<section id="servizi" class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8 text-center" data-aos="fade-up">
                <h2 style="font-size: 42px; color: #333; margin-bottom: 20px; font-weight: 700;">I Nostri Servizi</h2>
                <p style="color: #666; font-size: 18px;">Trattamenti professionali per la tua bellezza.</p>
            </div>
        </div>
        <div class="row">
            <!-- SERVIZIO 1 -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card">
                    <span class="service-icon">💇‍♀️</span>
                    <h3 class="heading">Skin & Beauty Care</h3>
                    <p style="color: #666; line-height: 1.8;">Trattamenti viso e corpo personalizzati per ogni tipo di pelle.</p>
                </div>
            </div>
            
            <!-- SERVIZIO 2 -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card">
                    <span class="service-icon">💄</span>
                    <h3 class="heading">Makeup Pro</h3>
                    <p style="color: #666; line-height: 1.8;">Trucco professionale per eventi speciali e matrimoni.</p>
                </div>
            </div>
            
            <!-- SERVIZIO 3 -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="service-card">
                    <span class="service-icon">✂️</span>
                    <h3 class="heading">Hair Style</h3>
                    <p style="color: #666; line-height: 1.8;">Tagli, colorazioni e acconciature personalizzate.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- TEAM -->
<section id="team" class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8 text-center" data-aos="fade-up">
                <h2 style="color: #333; font-size: 42px; margin-bottom: 20px; font-weight: 700;">Il Nostro Team</h2>
                <p style="color: #666; font-size: 18px;">Professionisti esperti al tuo servizio.</p>
            </div>
        </div>
        <div class="row">
            <?php 
            $team = [
                ['nome' => 'Lidia Zucaro', 'ruolo' => 'Founder & Stylist', 'img' => 'person_1.jpg'],
                ['nome' => 'Maria Rossi', 'ruolo' => 'Makeup Artist', 'img' => 'person_2.jpg'],
                ['nome' => 'Anna Bianchi', 'ruolo' => 'Colorist', 'img' => 'person_3.jpg'],
                ['nome' => 'Giulia Verdi', 'ruolo' => 'Nail Specialist', 'img' => 'person_4.jpg']
            ];
            $delay = 100;
            foreach ($team as $member) : 
            ?>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>">
                <div style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 5px 20px rgba(0,0,0,0.1); transition: transform 0.3s;" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0)'">
                    <div style="background: url('<?php echo get_template_directory_uri(); ?>/images/<?php echo $member['img']; ?>') center/cover; height: 300px;"></div>
                    <div style="padding: 25px; text-align: center;">
                        <h3 style="font-size: 20px; color: #333; margin-bottom: 8px; font-weight: 600;"><?php echo $member['nome']; ?></h3>
                        <span style="color: #F96D00; font-size: 14px; font-weight: 600;"><?php echo $member['ruolo']; ?></span>
                    </div>
                </div>
            </div>
            <?php 
            $delay += 100;
            endforeach; 
            ?>
        </div>
    </div>
</section>

<!-- GALLERY -->
<section id="gallery" class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8 text-center" data-aos="fade-up">
                <h2 style="color: #333; font-size: 42px; margin-bottom: 20px; font-weight: 700;">I Nostri Lavori</h2>
                <p style="color: #666; font-size: 18px;">Portfolio delle nostre migliori acconciature.</p>
            </div>
        </div>
        <div class="row">
            <?php 
            $delay = 100;
            for ($i = 1; $i <= 6; $i++) : 
            ?>
            <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-delay="<?php echo $delay; ?>">
                <div style="border-radius: 15px; overflow: hidden; box-shadow: 0 5px 20px rgba(0,0,0,0.1); height: 300px; transition: transform 0.3s;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/work-<?php echo $i; ?>.jpg" 
                         style="width: 100%; height: 100%; object-fit: cover;" 
                         alt="Lavoro <?php echo $i; ?>">
                </div>
            </div>
            <?php 
            $delay += 100;
            endfor; 
            ?>
        </div>
    </div>
</section>

<!-- FORM PRENOTAZIONE -->
<section id="contatti" style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('<?php echo get_template_directory_uri(); ?>/images/bg_3.jpg') center/cover; padding: 100px 0; background-attachment: fixed;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4 mb-4" data-aos="fade-right">
                <div style="background: rgba(255,255,255,0.15); backdrop-filter: blur(10px); padding: 40px; border-radius: 15px; text-align: center; color: white;">
                    <h3 style="color: white; margin-bottom: 25px; font-size: 24px;">📍 Dove Siamo</h3>
                    <p style="font-size: 16px; line-height: 1.8; margin-bottom: 30px;">Via Example 123<br>20100 Milano (MI)</p>
                    <h3 style="color: white; margin-bottom: 20px; font-size: 24px;">📞 Contatti</h3>
                    <p style="font-size: 20px; font-weight: 600; margin-bottom: 15px;">+39 123 456 789</p>
                    <p style="font-size: 16px;">info@tuosalone.it</p>
                </div>
            </div>
            <div class="col-md-8" data-aos="fade-left">
                <div style="background: white; padding: 50px; border-radius: 15px; box-shadow: 0 10px 40px rgba(0,0,0,0.3);">
                    <h3 style="color: #F96D00; font-size: 32px; margin-bottom: 30px; font-weight: 700;">Prenota Appuntamento</h3>
                    <form method="post" action="">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <input type="text" name="nome" class="form-control" placeholder="Nome" required 
                                       style="padding: 15px; border: 2px solid #f0f0f0; border-radius: 8px; font-size: 16px;">
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="text" name="cognome" class="form-control" placeholder="Cognome" required 
                                       style="padding: 15px; border: 2px solid #f0f0f0; border-radius: 8px; font-size: 16px;">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <input type="email" name="email" class="form-control" placeholder="Email" required 
                                       style="padding: 15px; border: 2px solid #f0f0f0; border-radius: 8px; font-size: 16px;">
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="tel" name="telefono" class="form-control" placeholder="Telefono" required 
                                       style="padding: 15px; border: 2px solid #f0f0f0; border-radius: 8px; font-size: 16px;">
                            </div>
                        </div>
                        <div class="mb-3">
                            <textarea name="messaggio" class="form-control" placeholder="Servizio richiesto / Note" rows="4" 
                                      style="padding: 15px; border: 2px solid #f0f0f0; border-radius: 8px; font-size: 16px;"></textarea>
                        </div>
                        <button type="submit" class="btn btn-block" 
                                style="background: #F96D00; color: white; border: none; padding: 18px; font-size: 18px; font-weight: 600; border-radius: 8px; cursor: pointer; transition: all 0.3s;" 
                                onmouseover="this.style.background='#e55e00'" 
                                onmouseout="this.style.background='#F96D00'">
                            Invia Richiesta
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>