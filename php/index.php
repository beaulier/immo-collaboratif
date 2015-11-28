<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Immobilier collaboratif</title>
		<link rel="stylesheet" href="../css/style_main.css">
		<link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.css" />
		<link href='https://api.mapbox.com/mapbox.js/v2.2.3/mapbox.css' rel='stylesheet' />
	</head>
			
	<body>
		<header id="header">
			<h1 class="col-2">InSTRiiT </h1>
			<div class="col-2" id="inscription">Pas encore inscrit ? Ca se passe <a href="http://127.0.0.1/projet-immo/php/inscription.php">ici</a> !</div>
		</header>
		<section>
			<div id="map"></div>
		</section>
		<footer>
		<p>Le renouveau de l'immobilier</p>
			<script type="text/javascript" src="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.js"></script>
			<script src='https://api.mapbox.com/mapbox.js/v2.2.3/mapbox.js'></script>
			
			<?php include("connexion.php"); ?>
			<script type="text/javascript" src="../javascript/locate.js"></script>
		</footer>
	</body>
</html>
