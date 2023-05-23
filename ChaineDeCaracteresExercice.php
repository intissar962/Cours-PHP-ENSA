<!DOCTYPE html>
<html>
<head>
	<title>Traitement de chaîne de caratères</title>
	<meta charset="utf-8">
</head>
<body>
<h1>Séance 2 PHP : Traitement de chaîne des caractères  et les tableaux:</h1>
<h2>Chaîne des caractères</h2>
<?php 
	//Déclaration et affichage d'une chaine de caractères
	$message = 'Bonjour tout le monde';
	echo "$message <br>";

	//Affichez la longueur de la chaîne de caractères à l'aide de la fonction strlen()
	echo '<b>La longeur du cette chaîne est :</b> ', strlen($message), '<br>';

	//Concaténez la chaîne de caractères "Comment ça va ?" à la fin de message à l'aide de l'opérateur de concaténation 

	//methode 1 : déclaration d'un autre variable
	$message2 = ' comment ça va ?';
	$resultat = $message.$message2;
	echo '<b>Concaténation de deux châines : </b>', $resultat,' <br>';

	//methode 2 : utilisation direct de l'opérateur point '.'
	echo $message.' comment ça va ? <br>';

	//Trouvez et affichez la sous-chaîne "tout le monde" dans la chaîne message à l'aide de la fonction substr()
	echo '<b>Tout le monde se trouve dans :</b> ', substr($message, 8), '<br>';

	//Remplacez la sous-chaîne "tout le monde" par "tous les amis" à l'aide de la fonction str_replace()
	echo '<b>Remplacer une châine de caractères : </b>', str_replace('tout le monde', 'Tous les amis', $message);

?>
<h2>Les tableaux</h2>
<?php

//Methodes de déclaration initialisation des tableaux indexes
echo "<h3>Les tableaux indexés</h3>";
//Methode 1 : 
$age[0] = 12;
$age[1] = 18;
echo '<b>Tableau 1</b> :',$age[1], '<br>';

//Methode 2 : 
$note[] = 14;
$note[] = 15; 
echo '<b>Tableau 2 :</b>',$note[1], '<br>';

//Methode 3 :
$nombre = array(1,5,9);
echo '<b>Tableau 3 :</b>',$nombre[1], '<br>';


//tableaux associatifs
echo "<h3>Les tableaux associatifs</h3>";

//methode 1 :
$notes['Hamid']= 12;
$notes['Salma'] = 14;
echo 'La note de Salma de : ', $notes['Salma'],'<br>';

//methode 2 :
$Ages = array('Asmae'=>20, 'Mohamed'=>12, 'Karim'=>6);
echo 'L\'age de Karim est : ', $Ages['Karim'],'<br>';


//tableaux multidimentionnels
echo "<h3>Les tableaux multidimentionnels</h3>";
$etudiants = array(array('Hamid', 12, 18), array('Salima', 15, 24), array('Jamal', 17, 30));
echo 'La note de Hamid est : ', $etudiants[0][1], ' est son age est : ', $etudiants[0][2], '<br>' ;

?>

</body>
</html>