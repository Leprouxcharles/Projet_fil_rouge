<?php
  // foreach ($_POST as $key => $val) echo '$_POST["'.$key.'"]='.$val.'<br/>';
  ini_set("display_errors",0);error_reporting(0);

  try {
    $bdd = new PDO ('mysql:host=localhost;dbname=projet;charset=utf8', 'root', 'root');

    $pseudo = $_POST['pseudo'];
    $mdp = $_POST['password'];

    if ($pseudo != null && $mdp != null) {
      $sql = 'INSERT INTO tjoueur (pseudo, mdp) VALUES (\''.$pseudo.'\', \''.$mdp.'\')';
      $bdd->exec($sql);
			echo "Votre compte a bien été créé ";
    }
		$bdd = null;        // Deconnexion
  }
  catch(PDOException $e) {
    echo $e->getMessage("");
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
		<title>Accueil</title>
		<?php //require "connexion_sql.php"; ?>
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
				<h1>Se connecter</h1>
				<form class="" action="connexion.php" method="post">
          <div class="form-group">
          	<label for="pseudo"><h2>Ton pseudo:</h2></label>
          	<input type="text" required class="form-control" name="pseudo" placeholder="Pseudo" value="" id="pseudo">
          </div>
          <div class="form-group">
            <label for="mdp"><h2>Ton mot de passe:</h2></label>
            <input type="password" required class="form-control" name="mdp" placeholder="Mot de passe" value="" id="mdp">
          </div>
      		<input id="connexion" type="submit" name="connexion" class="btn btn-default" value="Connexion"/><br><br>
      		<a href="inscription.php" title="inscription" id="inscription">Tu n'as pas de compte?</a>
				</form>
  	 </center>
    </div>
	 </div>
	</div>
</body>
</html>
