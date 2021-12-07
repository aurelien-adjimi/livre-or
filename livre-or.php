<?php
session_start();
if (isset($_POST['deco'])) {
    header("location:./connexion.php");
    session_destroy();
}
$bdd = mysqli_connect("localhost", "root", "", "livreor"); 
$req = mysqli_query($bdd, "SELECT commentaires.commentaire, commentaires.date, utilisateurs.login FROM commentaires INNER JOIN utilisateurs ON commentaires.id_utilisateur=utilisateurs.id ORDER BY date DESC");
$res = mysqli_fetch_all($req, MYSQLI_ASSOC);

if (isset($_POST['deco'])) {
  session_start();
  session_destroy();
  header('location: ./connexion.php');
  exit;
     }

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./livre-or.css">
    <title>Livre d'Or</title>
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
          echo ' <a href="./profil.php">Profil</a>';
          echo '<a href="./commentaire.php">Commentaires</a>';
        }
          ?>
          <a href="./index.php">Accueil</a>
          <a href="./inscription.php">Inscription</a>
          <a href="./connexion.php">Connexion</a>
          <a href="./livre-or.php">Livre d'Or</a>
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
    <?php
    echo "<div class='comm'>";  
    for ($i = 0; isset($res[$i]); $i++) {
        $date = strtotime($res[$i]['date']);
        $login = $res[$i]['login'];
        $commentaires = $res[$i]['commentaire'];
        $commentaires = htmlentities($commentaires);
        echo '<p><b>Posté le ' . date("d/m/Y", $date) . ' par ' . $login;
        echo "<br/>$commentaires</b></p>";
    }
    echo "</div>";
    if (isset($_SESSION['login'])) {
        echo "<a href='commentaire.php'><button>Postez votre commentaire magique</button></a>";
    }
    ?>
</main>
<footer>

</footer> 
</body>
</html>
