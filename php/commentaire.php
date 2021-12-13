<?php
session_start();

if (isset($_POST['deco'])) {
    header("location: ../php/connexion.php");
    session_destroy();
}
$bdd = mysqli_connect("localhost", "root", "", "livreor"); 
$log = $_SESSION['login'];
$req2 = mysqli_query($bdd, "SELECT id FROM utilisateurs WHERE login='$log'");
$res2 = mysqli_fetch_all($req2, MYSQLI_ASSOC);
$id=$res2[0]['id'];
if (isset($_SESSION['login']) && isset($_POST['envoyer'])) {
    $text = addslashes($_POST['textarea']);
    $req = mysqli_query($bdd, "INSERT INTO commentaires(commentaire, id_utilisateur, date) VALUES ('$text','$id',NOW())");
    header('location: ../php/livre-or.php');
}

if (isset($_POST['deco'])) {
  session_start();
  session_destroy();
  header('location: ../php/connexion.php');
  exit;
     }

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/css/commentaire.css">
    <title>Commentaires</title>
</head>
<body>
<header>
        <nav>
        <ul>
      <li class="menu" style="float:left">
        <a href="javascript:void(0)" class="menu1">Menu</a>
        <div class="contenu-menu">  
          <?php 
          
          if(isset($_SESSION['login'])) {
          echo ' <a href="../php/profil.php">Profil</a>';
          echo '<a href="../php/commentaire.php">Commentaires</a>';
        }
          ?>
          <a href="../index.php">Accueil</a>
          <a href="../php/inscription.php">Inscription</a>
          <a href="../php/connexion.php">Connexion</a>
          <a href="../php/livre-or.php">Livre d'Or</a>
        </div>
      </li>
        </ul>
        </nav>
        <?php if (isset($_SESSION['login'])) {
        echo '<form action="" method="post">
        <input name="deco" id="btndeco" type="submit" value="Déconnexion">
        </form>';
    }
        ?>
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