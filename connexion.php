<?php
$serveur ='localhost';
$login ='root';
$mdp ='';
$nom_bdd='base';
 
try
{
    $bdd = new PDO('mysql:host='.$serveur.';dbname='.$nom_bdd.'', $login, $mdp);
 
}
catch (Exception $e)
{
    exit('Erreur : ' . $e->getMessage());
}
?>
