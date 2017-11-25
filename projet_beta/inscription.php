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
		<br><br><br>
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
