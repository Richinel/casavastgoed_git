<?php
	$title = "Contact"; 
	include('includes/header.php'); ?>

	<div class="contact">
		<div class="c_text">
			<div class="wrapper">
				<h2>Contact</h2>

				<hr>

				<p>
					Heeft u vragen over woningen, inschrijvingen, of heeft u misschien andere vragen? Neem dan contact met ons op via het onderstaande formulier. Wij zullen zo snel mogelijk contact met u op te nemen!
				</p>

			</div>
		</div>
	

		<div class="c_form">
			<div class="wrapper">
					<div class="row">
					<div class="col col-4">
						<h4>Bezoekadres</h4>
						<p>
							Nicolaas Anslijnstraat 25<br>
							1068WL Amsterdam
						</p>

						<h4>Contactinformatie</h4>
						<p>
							06 - 87 65 72 46<br>
							info@casa-vastgoed.nl
						</p>

						<p>
							<i class="fa fa-twitter" aria-hidden="true"></i>
							<i class="fa fa-facebook-official" aria-hidden="true"></i>
							<i class="fa fa-linkedin-square" aria-hidden="true"></i>
							<i class="fa fa-google-plus" aria-hidden="true"></i>
						</p>

					</div>	

					<div class="col col-8">
						<h4>Contactformulier</h4>

						<form class='contact_form' method='post'>
							<div class="row">
								<div class="col">
									<input type="text" name="fullname" placeholder="Voornaam" required>
								</div>
								<div class="col">
									<input type="text" name="fullname" placeholder="Achternaam" required>
								</div>
							</div>

							<div class="row">
								<div class="col">
									<input type="text" name="fullname" placeholder="Telefoonnummer" required>
								</div>
								<div class="col">
									<input type="text" name="fullname" placeholder="E-mailadres" required>
								</div>
							</div>

							<div class="row">
								<div class="col">
									<textarea placeholder="Uw bericht" required></textarea>			
								</div>
							</div>

							<p>
								<div class="btn">Verzenden</div>
							</p>
						</form>
					</div>		
				</div>
			</div>
		</div>

		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2436.700130849617!2d4.805797315403308!3d52.35772377978385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5e3d2398479e3%3A0xdf6ee1175a08a416!2sNicolaas+Anslijnstraat+25%2C+1068+WL+Amsterdam!5e0!3m2!1snl!2snl!4v1484010098732" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>

<?php include('includes/footer.php'); ?>