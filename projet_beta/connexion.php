<?php
/*
Page: connexion.php
*/
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
            $Pseudo = htmlentities($_POST['pseudo'], ENT_QUOTES, "ISO-8859-1");
            $MotDePasse = htmlentities($_POST['mdp'], ENT_QUOTES, "ISO-8859-1");
            $mysqli = mysqli_connect("localhost", "root", "root", "projet");
            if(!$mysqli){
                echo "Erreur de connexion à la base de données.";
            } else {
                $Requete = mysqli_query($mysqli,"SELECT * FROM tjoueur WHERE pseudo = '".$Pseudo."' AND mdp = '".$MotDePasse."'");
										if(mysqli_num_rows($Requete) == 0) {
											$url = 'http://localhost/projet/index.php';
											header("Location: $url");
											exit();
                } else {
                    $_SESSION['pseudo'] = $Pseudo;
                    $sql = "SELECT id_joueur FROM tjoueur WHERE pseudo = '".$Pseudo."' AND mdp = '".$MotDePasse."'";
                    $result = $mysqli->query($sql);
											while($row = $result->fetch_assoc()) {
                        $_SESSION['id_joueur']=$row['id_joueur'];
                      }
                    // $_SESSION['id_joueur'];
										echo "Vous êtes à présent connecté !";
                }
            }
        }
    }
}
?>
<html>
	<head>
		<meta charset='utf-8'>
		<link rel= "stylesheet" type="text/css" href="index.css">
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" href="css/projet.css"/>
		<link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
		<script type="application/javascript" src="js/jquery-2.1.1.min.js"></script>
		<script type="application/javascript" src="js/bootstrap.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Champion Select</title>
		<style>
		</style>
	</head>
	<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12 zone">
        <center>
  				<h1>Bienvenue <?php echo $_SESSION['pseudo'] ?> !</h1>
                </div>
                  <div class="row">
                    <div class="col-md-12 fondMenu">
                      <center>
                        <ul>
                          <li class="menu">
                            <?php
                              try {
                                $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
                                $bdd = new PDO('mysql:host=localhost;dbname=projet','root', 'root', $pdo_options);

                                // On recupere l'url du joueur connecté.
                                  $reponse = $bdd->query('SELECT url FROM tjoueur, tpartie, tenigme WHERE tpartie.id_enigme=tenigme.id_enigme AND tpartie.id_joueur = tjoueur.id_joueur and tjoueur.pseudo = "'.$_SESSION['pseudo'].'"');
                                // On affiche le resultat
                                while ($donnees = $reponse->fetch(PDO::FETCH_OBJ)) {
                                  ?>
                                    <a href= " <?php echo $donnees->url ?>">Continuer</a>
                                  <?php
                                }
                                $reponse->closeCursor();
                                }
                                catch(Exception $e) {
                                  die('Erreur : '.$e->getMessage());
                              }
                            ?>
                          </li>
                            <br>
                          <li class="menu">
                              <a href= "story.php">Nouvelle Aventure</a>
                            </li>
                            <br>
                          <li class="menu"><a href="scores.php">Scores</a></li>
                            <br>
                          <li class="menu"><a href="credits.php">Crédits</a></li>
                            <br>
                          <li class="menu"><a href="deconnexion.php">Déconnexion</a></li>
                            <br>
                        </ul>
                      </center>
                    </div>
                  </div>
        </div>

      	</center>
      </div>
		</div>
	</div>
</body>
</html>
