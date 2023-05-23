<?php
$nom = htmlspecialchars($_POST['nom']);
$email = htmlspecialchars($_POST['email']);
$tel = htmlspecialchars($_POST['tel']);
if(isset($nom) && isset($email) && isset($tel))
{
    if(!empty($nom) && !empty($email) && !empty($tel))
    {
        if(!preg_match('#[A-Z]#',$nom) && !preg_match("#/[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+.[a-zA-Z]{2,4}/#", $email) && !preg_match('#0[6-7][0-9]{8}#', $tel))
        {
            echo "Données invalides";
        }
        else
        {
            echo "Bonjour ". $nom;
        }
    }
    else
    {
        echo "Les variables sont vides";
    }
}
else
{
    echo "Les variables n existent pas";
}
?>