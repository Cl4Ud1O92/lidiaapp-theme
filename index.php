<?php get_header(); ?>

<!-- SERVIZI -->
<section class="ftco-section">
	<div class="container">
		<div class="row">
			<div class="col-md-4 ftco-animate">
				<div class="media d-block text-center block-6 services">
					<div class="icon d-flex mb-3"><span class="flaticon-facial-treatment"></span></div>
					<div class="media-body">
						<h3 class="heading">Skin & Beauty Care</h3>
						<p>Trattamenti personalizzati per ogni tipo di pelle.</p>
					</div>
				</div>      
			</div>
			<div class="col-md-4 ftco-animate">
				<div class="media d-block text-center block-6 services">
					<div class="icon d-flex mb-3"><span class="flaticon-cosmetics"></span></div>
					<div class="media-body">
						<h3 class="heading">Makeup Pro</h3>
						<p>Trucco professionale per eventi speciali.</p>
					</div>
				</div>      
			</div>
			<div class="col-md-4 ftco-animate">
				<div class="media d-block text-center block-6 services">
					<div class="icon d-flex mb-3"><span class="flaticon-curl"></span></div>
					<div class="media-body">
						<h3 class="heading">Hair Style</h3>
						<p>Tagli, colorazioni e acconciature moderne.</p>
					</div>
				</div>    
			</div>
		</div>
	</div>
</section>

<!-- APPOINTMENT FORM -->
<section class="ftco-section ftco-appointment">
	<div class="overlay"></div>
	<div class="container">
		<div class="row d-md-flex align-items-center">
			<div class="col-md-4 d-flex align-self-stretch ftco-animate">
				<div class="appointment-info text-center p-5">
					<h3 class="mb-3">Contatti</h3>
					<p>Via Example 123, Milano</p>
					<p><strong>+39 123 456 789</strong></p>
				</div>
			</div>
			<div class="col-md-8 appointment pl-md-5 ftco-animate">
				<h3 class="mb-3">Prenota Appuntamento</h3>
				<form action="#" class="appointment-form">
					<div class="row form-group">
						<div class="col-md-6"><input type="text" class="form-control" placeholder="Nome"></div>
						<div class="col-md-6"><input type="text" class="form-control" placeholder="Cognome"></div>
					</div>
					<div class="row form-group">
						<div class="col-md-6">
							<div class="input-wrap"><div class="icon"><span class="ion-md-calendar"></span></div>
							<input type="text" class="form-control" placeholder="Data">
						</div>
						<div class="col-md-6"><input type="text" class="form-control" placeholder="Telefono"></div>
					</div>
					<div class="form-group"><textarea class="form-control" placeholder="Messaggio"></textarea></div>
					<div class="form-group"><input type="submit" value="Prenota" class="btn btn-white btn-outline-white py-3 px-4"></div>
				</form>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
