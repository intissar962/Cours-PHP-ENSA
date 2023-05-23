<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Les formulaires</title>
	<meta charset="utf-8">
</head>
<body>
<h1>Séance 4 PHP : les formulaires</h1>
<h3>Variable $_SERVER : </h3>
<?php 
//_SERVER : pour la sécurité, donne tous les informations liées au serveur
echo 'Le nom du serveur : '.$_SERVER['SERVER_NAME']. '<br>';
echo 'Les scryptes encours: '.$_SERVER['PHP_SELF']. '<br>';
echo 'L URL : '.$_SERVER['REQUEST_URI']. '<br>';

//GET n'est pas sécurisé, par contre post est plus sécuriser il est encapsulé
//GET pour la transmission des messages entre les pages
//GET : maximum 2000 caractères
?>
<h3>Formulaire avec la variable $_POST </h3>
<h4>Sécurité du formulaire</h4>
<p>strip_tags : élimier tous les balises</p>
<p>htmlspecialchars : élimine le code html</p>
<p>addslashes : Ajoute antislash avant l'apostrophe</p>
<p>htmlentities,cross-site scripting XCC</p>
<form action="traitement.php" method ="POST">
  <label for="nom">Nom:</label><br>
  <input type="text" id="nom" name="nom"><br>
  <label for="email">Email:</label><br>
  <input type="email" id="email" name="email" ><br><br>
  <label for="tel">Téléphone:</label><br>
  <input type="tel" id="tel" name="tel" ><br><br>
  <input type="submit" value="Envoyer">
</form> 



</body>
</html>