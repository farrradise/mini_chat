<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$req = $bdd->prepare('INSERT INTO minichat (pseudo, message) VALUES (?, ?)');
$req->execute(array($_POST['pseudo'],$_POST['message']));

$req->closeCursor();


// Puis rediriger vers minichat.php comme ceci :
header('Location: minichat.php');


?>
