<!doctype html>
<html lang="fr">
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">	  		
		<meta charset="utf-8">
		<title>Mon profil</title>
		<link rel="stylesheet" href="style_appart.css">
		<?php $id = $_GET["identifiant"];
		$dsn = 'mysql:dbname=profils;host=127.0.0.1';
		$user = 'root';
		$password = '';
		try {
			$bdd = new PDO($dsn, $user, $password);
			} catch (PDOException $e) {
			echo 'Connexion échouée : ' . $e->getMessage();
			}
		$reponse = $bdd->query("select * from zones where id='$id'");
		$donnees = $reponse->fetch();		
		?>
	</head>
	<body>
		<header>
			<h1>Discutez de l'appartement</h1>
		</header>
		<div id="entete">Donnez vie à votre projet</div>
		<section class="col-2" id="tchat">
			<div id="titre">Tchat</div><br />
			<div id="tchat_content">Cette section est reservee au tchat</div>
		</section>
		<section class="col-2" id="presentation">
			<div id="contenu">
			<img id="image" src=<?php echo $donnees['URL_IMAGE']?> alt="Photo de l'appartement"/><br />
			<div id="text">
			<p> Infos -> <?php echo $donnees['INTITULE']?> </p>
			<p> Adresse -> <?php echo $donnees['ADRESSE']?> </p>
			<p> Prix -> <?php echo $donnees['PRIX']?> euros </p>
			<p> Taille -> <?php echo $donnees['TAILLE']?> m² </p>
			</div>
			</div>
		</section>
		<div id="footer">
		Instriit
		</div>
		<footer>
			<script src="script.js"></script>
		</footer>
		
	</body>
	
</html>