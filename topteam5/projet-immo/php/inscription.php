<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<link rel="stylesheet" href="../css/jform.css">
        <title>Inscription à Instriit</title>
    </head>
    <body>
    	<header class="container"><h1>Inscription</h4></header>
	    <div class="container" id="text">
	    	<form action="cible.php" method="post" enctype="multipart/form-data">
	    		<div class="form-group">
				    <label>Prénom:</label>
				    <input type="text" name="name" placeholder="name">
				</div>
				<div class="form-group">
				    <label>Age:</label>
				    <input type="text" name="age" placeholder="age">
				</div>
				<div class="form-group">
				    <label>Adresse:</label>
				    <input type="text" name="adresse" placeholder="adresse">
				</div>
				<div class="form-group">
				    <label>Métier:</label>
				    <input type="text" name="metier" placeholder="metier">
				</div>
				<div class="form-group">
				    <label>Film préféré:</label>
				    <input type="text" name="film" placeholder="film">
				</div>
				<div class="form-group">
				    <label>Sport pratiqué:</label>
				    <input type="text" name="sport" placeholder="sport">
				</div>
				<button type="submit" class="btn">Valider</button>
	    	</form>
		</div>
		<div id="validation"></div>
		<footer>
		<h2>InSTRiiT</h2>
		</footer>
	</body>
</html>