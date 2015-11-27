<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Inscription à Instriit</title>
        <link rel="stylesheet" type="text/css" href="jform.css">
    </head>
    <body>
    	<header class="container"><h4>Inscription</h4></header>
	    <div class="container">
	    	<form action="cible.php" method="post">
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
		</footer>
	</body>
</html>