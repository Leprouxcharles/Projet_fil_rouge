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
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<!--________________________container menu______________________________-->
				<div class="row">
					<div class="col-md-12">
						<div class="navbar-header">
							<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#menu" title="Accueil"><img src="images/boutonmenu.png" height="35px"><!--bouton reflexive--></button>
							<a class="navbar-brand" href="index.php"><img class="logohome" src="./images/logohome.png" title="Accueil" height="70px"></a>
						</div>
						<div class="collapse navbar-collapse" id="menu">
							<ul class="nav navbar-nav">
								<a href="enigme1.html" title="enigme1">
									<button  type="button" class="btn btn-primary btn-lg"><li>Enigme 1</li></button>
								</a>
								<a href="enigme2.html" title="enigme2">
									<button  type="button" class="btn btn-primary btn-lg"><li>Enigme 2</li></button>
								</a>
								<a href="enigme3.html" title="enigme3">
									<button  type="button" class="btn btn-primary btn-lg"><li>Enigme 3</li></button>
								</a>
								<a href="scores.html" title="scores">
									<button  type="button" class="btn btn-primary btn-lg"><li>Table des scores </li></button>
								</a>
							</ul>
						</div>
					</div>
				</div>
			</div>

	</nav>
	<div class="container">
		<div class="row">
			<div class="col-md-12 zone">
        <center>
  				<h1>Bienvenue <?php echo $_POST['pseudo'] ?> !</h1>

    	</center>
      </div>
		</div>
	</div>
</body>
</html>
