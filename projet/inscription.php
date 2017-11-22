<?php
	// try {
	// 	$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
	// 	$bdd = new PDO ('mysql:host=localhost;dbname=projet;charset=utf8', 'root', 'root', $pdo_options);
	//
	// 	$bdd->query('SELECT * From tjoueur');
	// 	$reponse->setFetchMode(PDO::FETCH_OBJ);
	// 	while ($donnees = $reponse->fetch()) {
	// 		echo $donnees['pseudo'];
	// 	}
	// 	$bdd = null;        // Deconnexion
	// }
	// catch(PDOException $e) {
	// 	echo $e->getMessage("");
	// }
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
		<title>Inscription</title>
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
              <h2>S'inscrire</h2>
              <form action="index.php" method="post">
                <div class="form-group">
                  <label class="control-label"> pseudo </label>
                  <div>
                    <input type="text" required class="form-control" name="pseudo" placeholder="Pseudo">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label">Mot de passe</label>
                  <div>
                    <input type="password" required name="password" class="form-control" placeholder="Mot de Passe">
                  </div>
                </div>

                <button type="submit" class="btn btn-primary">S'inscrire</button>
              </form>
                <!-- <div class="checkbox">
                  <label><input type="checkbox"> Se souvenir de moi</label>
                </div> -->
                                    <!-- lancer une pop-up?-->
									<a href="index.php" title="accueil" id="inscription">Tu as déjà un compte?</a>
								</center>
							</div>
	</body>
</html>
