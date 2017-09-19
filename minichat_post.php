<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$pseudo = htmlspecialchars($_POST['pseudo']);
$message = htmlspecialchars($_POST['message']);


if (isset($_POST['pseudo']) AND isset($_POST['message']) AND $pseudo != "" AND $message != "") {

$req = $bdd->prepare('INSERT INTO minichat (pseudo, message) VALUES (?, ?)');
$req->execute(array($pseudo, $message));

$req->closeCursor();

}

// Puis rediriger vers minichat.php comme ceci :
header('Location: minichat.php');


?>
