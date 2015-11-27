<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Immobilier collaboratif</title>
		<link rel="stylesheet" href="style_main.css">
		<link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.css" />
		<link href='https://api.mapbox.com/mapbox.js/v2.2.3/mapbox.css' rel='stylesheet' />
	</head>
	<body>
		<header>
			<h1>L'immobilier collaboratif </h1>
		</header>
		<section>
			<div id="map"></div>
		</section>
		<footer>
			<script type="text/javascript" src="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.js"></script>
			<script src='https://api.mapbox.com/mapbox.js/v2.2.3/mapbox.js'></script>
			<?php include("connexion.php"); ?>
			<script type="text/javascript" src="locate.js"></script>
		</footer>
	</body>
</html>
