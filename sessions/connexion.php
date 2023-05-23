<?php
session_start();
$_SESSION['nom'] = $_POST['nom'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['password'] = $_POST['password'];
if(isset($_POST['souvener_moi']))
{
    setcookie('nom', $_SESSION['nom'], time()+3600, null, null, false, true);
    setcookie('email', $_SESSION['email'], time()+3600, null, null, false, true);
    setcookie('password', $_SESSION['password'], time()+3600, null, null, false, true);

}
header('Location:profile.php');

?>