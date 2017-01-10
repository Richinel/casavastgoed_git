<?php
	$title = "Home"; 
	include('includes/header.php'); 
?>

	<div class="main_slider">
		<h2>Casa Vastgoed</h2>
	</div>

	<div class="main_info">
		<img class="cv" src="assets/images/cv_logo_notext.png">

		<div class="wrapper">
			<div class="bar">
				<h4>Our solution is your solution</h4>
			</div>

			<div class="row">
				<div class="col">
					Casa-vastgoed is een dynamisch bedrijf met veel specialistische kennis in huis op het gebied van makelaardij in onroerend goed. Wij werken intensief samen met onafhankelijke professionals die hun sporen hebben verdiend in het vakgebied van de financiële dienstverlening.
					Wij bemiddelen bij aan-en verkoop van woningen en hebben daarnaast ENL specialisatie in de huur-en verhuur van woonruimte. Voor het verkopen van uw woning hanteren wij een scherp werktarief en werken wij op basis van No Cure No Pay.
				</div>

				<div class="col margin_col">
				 	Wilt u een woning aankopen en wenst u professionele begeleiding, dan kunt u ons inschakelen als aankopend makelaar. Indien u ons inschakelt kunt u ten alle tijde rekenen op persoonlijke en professionele begeleiding.
					Overweegt u uw woning te verkopen of te verhuren dan kunt u ons bellen voor een gratis waardebepaling. Een eerste afspraak is altijd kosteloos en geheel vrijblijvend.<br>
				</div>
			</div>

			<div class="btn">
				Lees meer
			</div>
		</div>
	</div>

	<div class="fp_offers">
		<div class="wrapper">

			<div class="bar">
				<h4>Laatste woningen</h4>
			</div>
	
			<div class="row between">
				<?php include('controllers/woningen.php'); ?>
			</div>

			<div class="btn">
				Bekijk alles
			</div>
		</div>
	</div>

	<div class="contact_div">
		<div class="wrapper">
			<h3>Weet u niet waar u moet beginnen, of heeft u een vraag over een woning?</h3>

			<a href="contact">
				<div class="btn_white">
					Neem direct contact op
				</div>
			</a>
		</div>
	</div>

	<div class="information_blocks">
		<div class="wrapper">
			<div class="row between">
				<div class="col">
					<i class="fa fa-home" aria-hidden="true"></i>

					<h4>Woning huren?</h4>
						<hr>
					<p>
						Bent u geïnteresseerd in een woning op onze website? Wilt u meer informatie of een afspraak maken om de woning te bezichtigen? Neem dan contact met ons op per telefoon.
					</p>

					<div class="btn-sm">
						Meer info
					</div>
				</div>

				<div class="col">
					<i class="fa fa-eur" aria-hidden="true"></i>

					<h4>Woning kopen?</h4>
						<hr>
					<p>
						Het begint altijd met een enthousiast, goed en vrijblijvend kennismakingsgesprek en een gratis waarde bepaling. In een persoonlijk gesprek stellen wij ons graag aan u voor, luisteren naar uw wensen en beantwoorden we al uw vragen.
					</p>

					<div class="btn-sm">
						Meer info
					</div>
				</div>

				<div class="col">
					<i class="fa fa-wrench" aria-hidden="true"></i>

					<h4>Renovatie</h4>
						<hr>
					<p>
						Ook renoveren wij woningen die wij vervolgens beschikbaar stellen om te huren of te kopen. Neem voor meer informatie contact met ons op.
					</p>

					<div class="btn-sm">
						Meer info
					</div>
				</div>
			</div>
		</div>
	</div>

<?php include('includes/footer.php'); ?>