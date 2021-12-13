<?php

session_start();

   $login = $_SESSION['login'];
   $bdd = mysqli_connect("localhost", "root", "", "livreor");
   $dn = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE login = '$login'");
   $array = mysqli_fetch_all($dn, MYSQLI_ASSOC);

foreach($array as $key=>$value);

   if(isset($_POST['submit'])) {

      $log = $_POST['login'];
      $mdp = $_POST['password1'];
      $pw = $_POST['password2'];
      $req=mysqli_query($bdd, "UPDATE utilisateurs SET login ='$log', password= '$mdp' WHERE login= '$login'");
      $_SESSION['login'] = $_POST['login'];
      $_SESSION['password1'] = $_POST['password1'];
      header('refresh: 0,');
      if($mdp != $pw) {
         echo 'Mot de passe différents';
      }
   }

   if (isset($_POST['deco'])) {
session_start();
session_destroy();
header('location: ../php/connexion.php');
exit;
   }
   

?>
<html>
   <head>
      <title>Profil</title>
      <meta charset="utf-8">
      <link rel="stylesheet" href="../asset/css/profil.css">
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
    </header>
<main>
   <div id="form">
   <form action="" method="post" align="center">
   <p>Profil de <?php echo $login?></p>
         <br /><br />
      <h2>Nom d'utilisateur</h2>
         <input type="text" name="login" id="login" value='<?php echo $login ?>'>

      <h2>Mot de passe</h2>
         <input type="password" name="mdp" id="mdp" value='<?php echo $value['password'] ?>'>

      <h2>Modifier mot de passe</h2>
         <input placeholder="Mot de passe" type="password" name="password1" id="password1">
                <br><br><br>

         <input type="password" placeholder="Confirmation" name="password2" id="password2">
                <br><br><br>
         <input name="submit" id="btnsubmit" type="submit" value="Modifier votre profil">
   
         <input name="deco" id="btndeco" type="submit" value="Déconnexion">
      </form>
   </div>
</main>   
   </body>

   <footer>
      
   </footer>
</html>
