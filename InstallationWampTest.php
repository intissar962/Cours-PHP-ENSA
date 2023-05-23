<!DOCTYPE html>
<html>
<head>
	<title>GLSI PHP</title>
</head>
<body>
	<h1>Séance 1 PHP</h1>
	<h2>Déclaration des variables / Affichage du message</h2>
<?php 
 //affichage
	echo "Bonjour <br>";

 //déclaration des variables : php est un langage intéligent detecte le type des variables
	$num1 = 5;
	$num2 = 3;
	$num3 = $num1 + $num2;
	echo 'La somme des deux nombres est : ' .$num3;
?>
</body>
</html>