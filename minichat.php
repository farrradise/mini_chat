<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Le Mini Chat</title>
  <!-- <link rel="stylesheet" href="style.css"> -->
  <!-- <script src="script.js"></script> -->
</head>
<body>
  <form class="" action="minichat_post.php" method="post">
    <label for="pseudo">Votre pseudo<input type="text" name="pseudo" value=""></label><br>
    <label for="message">Votre message <textarea name="message" rows="8" cols="80"></textarea></label><br>
    <input type="submit" name="envoyer" value="envoyer">
  </form>
  <main>
    <?php

// OK mettre la requête pour se connecter à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=minichat;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


// faire une requête pour afficher les 10 derniers articles 

// OK fermer la requete
$marequete->closeCursor();


     ?>
  </main>
</body>
</html>
