<!doctype html>
<html lang="fr">
    <head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="../css/style_pro.css">
		<?php $id = $_GET["identifiant"];
		$dsn = 'mysql:dbname=profils;host=127.0.0.1';
		$user = 'root';
		$password = '';
		try {
			$bdd = new PDO($dsn, $user, $password);
			} catch (PDOException $e) {
			echo 'Connexion échouée : ' . $e->getMessage();
			}
		$reponse = $bdd->query("select * from profils where id='$id'");
		$donnees = $reponse->fetch();		
				?>
		<meta charset="utf-8">
		<title>Profil de <?php echo $donnees['nom']; ?></title>
		
    </head>
	<body>
		<header id="header">
			<h1><i class="fa fa-file"></i><?php echo $donnees['nom']; ?></h1>
		</header>
		<section class="col-2" id="content">
			<p><i class="fa fa-user"></i> Age: <?php echo $donnees['age']; ?></p>
			<p><i class="fa fa-home"></i> Adresse: <?php echo $donnees['adresse']; ?></p>
			<p><i class="fa fa-archive"></i> Métier: <?php echo $donnees['metier']; ?></p>
			<p><i class="fa fa-futbol-o"></i> Sport: <?php echo $donnees['sport']; ?></p>
			<p><i class="fa fa-film"></i> Film: <?php echo $donnees['film']; ?></p>
			<p><i class="fa fa-star"></i><div id="identifiant"> Id:<?php $identifiant = $_GET["identifiant"];echo $identifiant;?> </div></p>
			<p><i class="fa fa-bar-chart"></i> Score:</p>
			<div id="page"></div>
		</section>
		<section class="col-2">
			<img id="image" src=<?php echo $donnees['image_profil']?> alt="Photo de l'appartement"/><br />
		</section>
		<footer id="footer">
		</footer>
	</body>
</html>