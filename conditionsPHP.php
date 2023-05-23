<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Les conditions, les boucles et les fonctions en PHP</title>
	<meta charset="utf-8">
</head>
<body>
<h1>Séance 3 PHP : les conditions et les boucles en PHP</h1>
<h2>Les conditions :</h2>
<h3>Exercice 1 : Switch avec conditions</h3>
<?php 

//Switch
//Si on a des conditions dans le swicth a tester, au lieu d'utiliser la condition avec un variable met un 'true'
$number = 0;
switch(true)
{
	case  ($number> 0 ): 
	echo "Nombre positive <br>";
	break;
	case ($number==0) : 
	echo "Nombre null <br>";
	break;
	case ($number<0) : 
	echo "Nombre negative <br>";
	break;

}
?>
<h3>Exercice 2 : Vérification d'un nombre boolean</h3>
<?php
//Teste de vérification d'un nombre boolean 

//Methode 1 : avec if/else

$variable = 5;
if($variable=='true')
	echo "Methode 1 : La variable égale a true <br>";
else 
	echo "Methode 1 : La variable égale a false <br>";

//Methode 2 : avec switch

switch($variable)
{
	case 'true' : 
		echo "Methode 2 : La variable égale a true <br>";
		break;
	default : 
		echo "Methode 2 : La variable égale a false <br>";
		break;
}

//Methode 3 : fonction is_bool
if(is_bool($variable))
	echo "Methode 3 : La variable égale a true <br>";
else 
	echo "Methode 3 : La variable égale a false <br>";
?>

<h2>Les boucles : </h2>
<h3>Exercice : Boucle qui calcul le factoriel</h3>
<?php 

//formulaire du factoriel n! = n*(n-1)!  3! = 3*2*1 = 6

$nombre = 9;
$factoriel = 1;
for($i=1; $i<=$nombre; $i++)
{
	$factoriel = $factoriel * $i;
}
echo 'Le factoriel du nombre ' .$nombre .' est = ' .$factoriel . '<br>';
?>

<h2>Les fonctions : </h2>
<h3>Exercice 1 : Fonction somme de deux nombres</h3>
<?php 
//Les parametres : au moment de la déclaration de la fontion
//Les arguments : au moment de l'appel de la fonction
// declare(strict_types=1); 
function Somme(int $n1, int $n2)
{
	return $n1+$n2;
}
echo 'La somme de deux nombres est : '.Somme(6,7). '<br>';
?>


</body>
</html>