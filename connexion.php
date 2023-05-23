<?php
try
{
    $dbName = 'glsi_produits';
    $username='root';
    $password = '';
    $con = new PDO("mysql:host=localhost; dbname=$dbName; port=3306; charset=utf8", $username, $password);
}
catch(Exception $e) 
{
    echo 'Message: ' .$e->getMessage();
}
?>