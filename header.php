<?php
require_once('libs/var.php');
?>
<!DOCTYPE php>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<title>Hotel Parimis</title>
	<meta name="description" content="Hotel de luxe Parimis, offrant de nombreuse prestation tel que le spa, restaurant" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link rel="stylesheet" href="http://cdn.jsdelivr.net/jquery.sidr/2.2.1/stylesheets/jquery.sidr.dark.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/media.css">
	<link href="https://fonts.googleapis.com/css?family=Krub" rel="stylesheet">
	<link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">


</head>

<body>

	<div class="container">
		<!-- header responsive (debut) -->
		<header>
			<div class="header">
				<a href="<?php echo home ;?>" class="logo"><img src="imgs/logo/logoParimis7.png" alt="logoParimis" class="logo"></a>
				<div class="header-right">
					<a class="active" href="pages/reservation.php">Reservation</a>
					<a class="link" href="pages/contact.php">Contact</a>
					<a class="link" href="pages/acces.php">Acces</a>
					<a href="#"><img src="imgs/icones/france.png" alt="drapeau france"></a>
					<a href="#"><img src="imgs/icones/uk.png" alt="drapeau grande-bretagne"></a> <br> <br>
					<input type="search" placeholder="Recherche dans le site">
				</div>
			</div>
			<div id="mobile-header">
				<a id="responsive-menu-button" href="#sidr-main"><i class="fas fa-bars"></i></a>
			</div>
			<!-- header responsive (fin) -->
			<!-- slider (debut) -->
			<div id="slider">
				<ul class="rslides">
					<li><img src="imgs/slide/accueil.jpg" alt="hotel parimis"></li>
					<li><img src="imgs/slide/spa-slide.jpg" alt="spa parimis"></li>
					<li><img src="imgs/slide/resto.jpg" alt="restaurant parimis"></li>
					<li><img src="imgs/slide/bedroom1.jpg" alt="chambre parimis"></li>
					<li><img src="imgs/slide/salle1.jpg" alt="salle parimis"></li>
				</ul>
			</div>
			<!-- slider (debut) -->
			<!-- Menu responsive (debut) -->
			<div id="navigation">
				<nav class="nav" id="sticker">
					<ul id="list-menu">
						<li><a href="pages/hotel.php">Hotel</a>a&
							<ul>
								<li><a href="pages/hotel.php">Qui sommes-nous?</a></li>
								<li><a href="pages/acces.php">Accès</a></li>
								<li><a href="pages/contact.php">Contact</a></li>
								<li><a href="pages/recrutement.php">Recrutement</a></li>
								<li><a href="pages/evenements.php">Evenements</a></li>
								<li><a href="pages/presse.php">Presse</a></li>
							</ul>
						</li>
						<li><a href="pages/chambres.php">Chambres</a>
							<ul>
								<li><a href="pages/chambre-classique.php">Classique</a></li>
								<li><a href="pages/chambre-confort.php">Confort</a></li>
								<li><a href="pages/chambre-deluxe.php">Deluxe</a></li>
								<li><a href="pages/chambre-suite.php">Suite</a></li>
							</ul>
						</li>
						<li><a href="pages/restaurant.php">Restaurant</a>
							<ul>
								<li><a href="pages/restaurant.php">Carte Brasserie</a></li>
								<li><a href="pages/restaurant.php">Carte Dégustation</a></li>
								<li><a href="pages/restaurant.php">Carte Restaurant</a></li>
							</ul>
						</li>
						<li><a href="pages/spa.php">Spa</a>
							<ul>
								<li><a href="pages/spa.php">Soin Détente</a></li>
								<li><a href="pages/spa.php">Soin Découverte</a></li>
								<li><a href="pages/spa.php">Soin Relaxant</a></li>
								<li><a href="pages/spa.php">Soin Plaisir</a></li>
								<li><a href="pages/spa.php">Soin Evasion</a></li>
							</ul>
						</li>

						<li><a href="pages/actualites.php">Actualités</a></li>
						<li><a href="pages/avis.php">Avis</a></li>
					</ul>

				</nav>
			</div>
			<!-- Menu responsive (fin) -->
		</header>
