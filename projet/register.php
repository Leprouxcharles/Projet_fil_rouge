<?php
  // foreach ($_POST as $key => $val) echo '$_POST["'.$key.'"]='.$val.'<br/>';
  // ini_set("display_errors",0);error_reporting(0);
  //
  // try {
  //   $bdd = new PDO ('mysql:host=localhost;dbname=projet;charset=utf8', 'root', 'root');
  //
  //   $pseudo = $_POST['pseudo'];
  //   $mdp = $_POST['password'];
  //
  //   if ($pseudo != null && $mdp != null) {
  //     $sql = 'INSERT INTO tjoueur (pseudo, mdp) VALUES (\''.$pseudo.'\', \''.$mdp.'\')';
  //     $count = $bdd->exec($sql);
  //   } else {
  //       echo "Le Mot de passe ou pseudo est vide ou invalide.";
  //   }
  //   // $bdd = null;        // Deconnexion
  // }
  // catch(PDOException $e) {
  //   echo $e->getMessage("sdsdsdsd");
  // }
?>
<!-- <form action="register.php" method="post">
  <legend>S'inscrire sur le site </legend>

  <div class="form-group">
    <label class="control-label"> pseudo </label>
    <div>
      <input type="text" class="form-control" name="pseudo" placeholder="pseudo">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label">Mot de passe</label>
    <div>
      <input type="text" name="password" class="form-control" placeholder="Password">
    </div>
  </div>

  <button type="submit" class="btn btn-primary">S'inscrire</button>
</form> -->

<?php
  session_start(); // à mettre tout en haut du fichier .php, cette fonction propre à PHP servira à maintenir la $_SESSION
  if(isset($_POST['connexion'])) { // si le bouton "Connexion" est appuyé
      // on vérifie que le champ "Pseudo" n'est pas vide
      // empty vérifie à la fois si le champ est vide et si le champ existe belle et bien (is set)
      if(empty($_POST['pseudo'])) {
          echo "Le champ Pseudo est vide.";
      } else {
          if(empty($_POST['mdp'])) {
              echo "Le champ Mot de passe est vide.";
          } else {
              $pseudo = htmlentities($_POST['pseudo'], ENT_QUOTES, "ISO-8859-1");
              $mdp = htmlentities($_POST['mdp'], ENT_QUOTES, "ISO-8859-1");
              $mysqli = mysqli_connect("localhost", "root", "root", "projet");
              $sql = 'INSERT INTO tjoueur (pseudo, mdp) VALUES (\''.$pseudo.'\', \''.$mdp.'\')';

              if(!$mysqli){
                  echo "Erreur de connexion à la base de données.";
              } else {
                  $Requete = mysqli_query($mysqli,$sql);
  										if(mysqli_num_rows($Requete) == 0) {
  											echo "une erreur est survenue.";
                  } else {
                      $_SESSION['pseudo'] = $Pseudo;
  										echo "Vous êtes à présent connecté !";
                  }
              }
          }
      }
  }
?>
