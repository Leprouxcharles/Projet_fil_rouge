<html>
	<head>
		<meta charset='utf-8'>
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
		<br><br><br>
	<div class="container">
		<div class="row">
        	<div class="col-md-12 zone">
        		<center>
              <h2>S'inscrire</h2>
                <!-- <div class="checkbox">
                  <label><input type="checkbox"> Se souvenir de moi</label>
                </div> -->
                                    <!-- lancer une pop-up?-->
							<form class="" action="accueil.php" method="post">
								<div class="form-group">
									<label for="pseudo"><h2>Ton pseudo:</h2></label>
									<input type="text" required class="form-control" name="pseudo" placeholder="Pseudo" value="" id="pseudo">
								</div>
								<div class="form-group">
									<label for="mdp"><h2>Ton mot de passe:</h2></label>
									<input type="password" required class="form-control" name="password" placeholder="Mot de passe" value="" id="mdp">
								</div>
								<input type="submit" class="btn btn-default"/><br><br>
								<a href="accueil.php" title="accueil" id="inscription">Tu as déjà un compte?</a>
							</form>
						</center>
					</div>
				</div>
			</div>
	</body>
</html>
