<?php

session_start();
 
$bdd = mysqli_connect("localhost", "root", "", "livreor");
 
if(isset($_POST['formconnexion'])) {

   $loginconnect = ($_POST['loginconnect']);
   $mdpconnect = ($_POST['mdpconnect']);
   $res = mysqli_query($bdd,"SELECT * FROM utilisateurs");
   $array= mysqli_fetch_all($res,MYSQLI_ASSOC);

   foreach($array as $key =>$value)

if ($mdpconnect == $value['password'] && $loginconnect == $value['login']) {
      $_SESSION['login'] = $loginconnect;
      header ('Location: ./commentaire.php');
   }

   if($mdpconnect!=$value['password']) {
      echo 'Mauvais mot de passe';
   }
}
      

?>
<html>
   <head>
      <title>Connexion</title>
      <meta charset="utf-8">
      <link rel="stylesheet" href="./connexion.css">
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
<div class="words word-1">
  <span>C</span>
  <span>O</span>
  <span>N</span>
  <span>N</span>
  <span>E</span>
  <span>X</span>
  <span>I</span>
  <span>O</span>
  <span>N</span>
</div>
   <div id="formulaire" align=center>
         <form method="POST" action="">
            <div class="inp">
            <input  type="text" name="loginconnect" placeholder="Entrez votre login" />
            <input  type="password" name="mdpconnect" placeholder="Mot de passe" />
            </div>
            <br /><br />
            <div class="inp2">
               <input type="submit" name="formconnexion" value="Se connecter !" />
            </div>
         </form>
         <?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>
</main>
</div>
      </div>
   </body>
</html>