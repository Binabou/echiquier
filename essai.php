<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form method="post" action="resultat.php">
<p>Colonne <input type="number" name="col"></p>
<p>Ligne <input type="number" name="lig"></p>


<p>Choisissez la 1ere couleur : <input type="color" name="couleur1"></p>
<p>Choisissez la 2eme couleur : <input type="color" name="couleur2"></p>
<input type="submit" name="submit" value="Envoyer!"/>
</form>

<?php include ("resultat.php");?>


</body>
</html>