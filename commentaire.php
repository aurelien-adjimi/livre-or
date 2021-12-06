<?php
session_start();

if (isset($_POST['deco'])) {
    header("location: ./connexion.php");
    session_destroy();
}
$bdd = mysqli_connect("localhost", "root", "", "livreor"); 
$log = $_SESSION['login'];
$req2 = mysqli_query($bdd, "SELECT id FROM utilisateurs WHERE login='$log'");
$res2 = mysqli_fetch_all($req2, MYSQLI_ASSOC);
$id=$res2[0]['id'];
if (isset($_SESSION['login']) && isset($_POST['envoyer'])) {
    $text = $_POST['textarea'];
    $req = mysqli_query($bdd, "INSERT INTO commentaires(commentaire, id_utilisateur, date) VALUES ('$text','$id',NOW())");
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./commentaire.css">
    <title>Commentaires</title>
</head>
<body>
<header>
<nav>
        <ul>
      <li class="menu" style="float:left">
        <a href="javascript:void(0)" class="menu1">Menu</a>
        <div class="contenu-menu">  
        <a href="./index.php">Accueil</a>
          <a href="./inscription.php">Inscription</a>
          <a href="./connexion.php">Connexion</a>
          <a href="./profil.php">Profil</a>
          <a href="./livre-or.php">Livre d'Or</a>
          <a href="./commentaire.php">Commentaires</a>
        </div>
      </li>
        </ul>
        </nav>
</header>
<main>
  <div class="form">
    <form action="#" method="post">
    <textarea name="textarea"
              rows="5" cols="30"
              maxlength="255" placeholder="Vous pouvez écrire ici"></textarea>
              <br><br>
        <input type="submit" name="envoyer" value="Ajouter un commentaire">
    </form>
    </div>
    <footer>

    </footer>
</body>
</html>