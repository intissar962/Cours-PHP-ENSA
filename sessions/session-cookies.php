<!DOCTYPE html>
<html>
<head>
	<title>Les sessions et les cookies</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/14273d579a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="..\CSS\style.css">
</head>
<body>
<h1 class="text-center pb-5">Séance 6 PHP : Les sessions et les cookies</h1>
<h3 class="text-center pb-5">Variable $_SESSION</h3>
<!--Les sessions pour stocker les informations temporaires
1. creation de session pour chaque utilisateur
2. lorsque la session est terminée tooutes les données sotockees seront supprimees
3. session = table temporaire pour chaque utilisateur
4. les informations sont stockés au niveau de serveur
Pour utiliser la variable $_SESSION : 
1. Démarer la session : session_start();
2. $_SESSION['nom_variable'] pour stocker les données
3.détruire la session : session_destory();
4. session_unset() : pour vider la session courante
-->
<section>
    <div class="container my-5 w-50">
        <h2 class="text-center pb-5">Se connecter</h2>
        <form class="row g-2" method="POST" action="connexion.php">
		<div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="nom" class="form-control" id="nom" name="nom" value="<?php if(isset($_COOKIE['nom'])) echo $_COOKIE['nom']; ?>">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php if(isset($_COOKIE['email'])) echo $_COOKIE['email']; ?>">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password" value="<?php if(isset($_COOKIE['password'])) echo $_COOKIE['password']; ?>">
            </div>

			<div class="mb-3">
                <input class="form-check-input" type="checkbox" value="" id="oui" name="souvener_moi">
  				<label class="form-check-label" for="oui">
    				Souvener de moi
  				</label>
            </div>
			
            <button type="submit" class="btn btn-primary">Se connecter</button>
        </form>
    </div>
</section>

<h3 class="text-center pb-5">Variable $_COOKIE</h3>
<!-- 
- il vous rappelle par les informations existent dans la session
- prend une petite place dans le navigateur
- information stockée sur la machine du client
- pour personnalisé l'experience utilisateur
- ont un durée de vie

***** Comment creer un cookie



-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>