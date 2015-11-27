<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Inscription à Instriit</title>
    </head>
    <body>
		<?php
			$dsn = 'mysql:dbname=profils;host=127.0.0.1';
			$user = 'root';
			$password = '';
			try {
				$bdd = new PDO($dsn, $user, $password);
				} catch (Exception $e) {
				echo 'Connexion échouée : ' . $e->getMessage();
				}
			$nom = $_POST['name'];
			$age = $_POST['age'];
			$adresse = $_POST['adresse'];
			$film = $_POST['film'];
			$sport = $_POST['sport'];
			$metier = $_POST['metier'];
			$state = '1';
			$bdd->exec("insert into profils(nom, age, adresse, metier, sport, film, state)values('$nom', '$age', '$adresse', '$metier', '$sport', '$film', '$state')");
		?>
			<div> Inscription effectuee !</div>
			<a href="http://127.0.0.1/projet-immo/immo.php">Retourner a Instriit</a>
	</body>
</html>