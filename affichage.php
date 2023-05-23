<?php
include('connexion.php');
$idProduit = htmlspecialchars($_POST['idProduit']);
    $requete1 = $con->query('SELECT * FROM produit');
    $requete2 = $con->prepare('SELECT * FROM produit WHERE id_produit=?');
    $requete2->execute(array($idProduit));
    echo "<table><thead><tr><td>Id</td><td>Nom</td><td>Prix</td></tr></thead><tbody>";
    while($ligne = $requete2->fetch())
    {
        echo "<tr>";
            echo "<td>";
            echo $ligne['id_produit'];
            echo "</td>";
            echo "<td>";
            echo $ligne['nom_produit'];
            echo "</td>";
            echo "<td>";
            echo $ligne['prix_produit'];
            echo "</td>";
        echo "</td>";
        
    }
    echo "</table></tbody>";
?>