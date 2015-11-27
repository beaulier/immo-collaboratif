<?php
			$dsn = 'mysql:dbname=profils;host=127.0.0.1';
			$user = 'root';
			$password = '';

			try {
				$bdd = new PDO($dsn, $user, $password);
			} catch (PDOException $e) {
				echo 'Connexion échouée : ' . $e->getMessage();
			}
			$reponse = $bdd->query('select * from Profils');
			echo '<div id=name hidden>';
			while($donnees = $reponse->fetch())
			{
				echo $donnees['nom'].'#';
			}
			echo '</div>';
			$reponse->closeCursor();
			$reponse = $bdd->query('select * from Profils');
			echo '<div id=adresse hidden>';
			while($donnees = $reponse->fetch())
			{
				echo $donnees['adresse'].'#';
			}
			echo '</div>';
			$reponse->closeCursor();
			$reponse = $bdd->query('select * from Profils');
			echo '<div id=state hidden>';
			while($donnees = $reponse->fetch())
			{
				echo $donnees['state'].'#';
			}
			echo '</div>';
			// Recuperation table zone
			$reponse->closeCursor();
			$reponse = $bdd->query('select * from zones');
			echo '<div id=adresse_ap hidden>';
			while($donnees = $reponse->fetch())
			{
				echo $donnees['ADRESSE'].'#';
			}
			echo '</div>';
			$reponse->closeCursor();
			$reponse = $bdd->query('select * from zones');
			echo '<div id=intitule_ap hidden>';
			while($donnees = $reponse->fetch())
			{
				echo $donnees['INTITULE'].'#';
			}
			echo '</div>';
?>