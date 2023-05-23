<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Base de données MySQL - PHP</title>
	<meta charset="utf-8">
</head>
<body>
<h1>Séance 5 PHP : Base de données MySQL - PHP</h1>
<?php 
//MySQL est le plus rapide
//Methodes pour la connexion à la base de données :
//$con = mysqli_connect('serveur', 'username','password','BDDname');
//$con = new PDO("mysql:host=localhost; dbname=BDDname; port=3306; charset=utf8", 'username', 'password');
//Requete SQL : 
//$req =$con->query('SELECT * FROM tableName');
?>
<h4>Affichage</h4>
<form action="affichage.php" method="POST">
<input type="text" id="idProduit" name="idProduit" placeholder='Donner un id'>    
<input type="submit" value="Afficher">
</form>
<h4>Insertion</h4>
<form method="POST" action="insertion.php">
<label for="idProduit">Id :</label><br>
  <input type="text" id="idProduit" name="idProduit"><br><br>
  <label for="nomProduit">Nom :</label><br>
  <input type="text" id="nomProduit" name="nomProduit" ><br><br>
  <label for="prixProduit">Prix :</label><br>
  <input type="text" id="prixProduit" name="prixProduit" ><br><br>
  <input type="submit" value="Insérer">
</form>




</body>
</html>