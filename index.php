<?php 

session_start();
$bdd = mysqli_connect("localhost", "root", "", "livreor");

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/css/index.css">
    <title>Accueil</title>
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
          echo '<a href="./php/profil.php">Profil</a>';
          echo '<a href="./php/commentaire.php">Commentaires</a>';
        }
          ?>
          <a href="./index.php">Accueil</a>
          <a href="./php/inscription.php">Inscription</a>
          <a href="./php/connexion.php">Connexion</a>
          <a href="./php/livre-or.php">Livre d'Or</a>
        </div>
      </li>
        </ul>
        </nav>
    </header>

    <main>
    <div class="container">
    <h1 class="neon">Bienvenue sur<br>le Livre d'Or</h1>
  <div class="stack" style="--stacks: 3;">
    <span style="--index: 0;"><div>Harry Potter</div></span>
    <span style="--index: 1;"><div>Harry Potter</div></span>
    <span style="--index: 2;"><div>Harry Potter</div></span>
  </div>
</div>
    </main>
    <footer>
    <button><a href="//github.com/aurelien-adjimi/livre-or.git">github</a>
    </footer>
</body>
</html>