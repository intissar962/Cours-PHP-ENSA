<?php
include('connexion.php');
$idProduit = htmlspecialchars($_POST['idProduit']);
$nomProduit = htmlspecialchars($_POST['nomProduit']);
$prixProduit = htmlspecialchars($_POST['prixProduit']);
if(isset($idProduit) && isset($nomProduit) && isset($prixProduit))
{
    if(!empty($idProduit) && !empty($nomProduit) && !empty($prixProduit))
    {
        $requete = $con->prepare('INSERT INTO produit VALUES(?,?,?)');
        $requete->execute(array($idProduit, $nomProduit, $prixProduit));
        echo "Données bien inséreés";
    }
    else
    {
        echo "Données vides";
    }
}
else
{
    echo "Données n esxistent pas";
}


    

?>