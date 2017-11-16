<html>
	<head>
		<meta charset='utf-8'>
		<link rel= "stylesheet" type="text/css" href="index.css">
		<link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="./bootstrap/css/main.css"/>
		<link rel="stylesheet" href="./bootstrap/css/projet.css"/>
		<link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
		<script type="application/javascript" src="./bootstrap/js/jquery-2.1.1.min.js"></script>
		<script type="application/javascript" src="./bootstrap/js/bootstrap.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Histoire</title>
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
							<a class="navbar-brand" href="accueil.php"><img class="logohome" src="./images/logohome1.png" title="Accueil" height="70px"></a>
						</div>
						<div class="collapse navbar-collapse" id="menu">
							<ul class="nav navbar-nav">
								<a href="enigme1.php" title="Enigme 1">
									<button  type="button" class="btn btn-primary btn-lg"><li>Enigme 1</li></button>
								</a>
								<a href="enigme2.php" title="Enigme 2">
									<button  type="button" class="btn btn-primary btn-lg"><li>Enigme 2</li></button>
								</a>
								<a href="enigme3.php" title="Enigme 3">
									<button  type="button" class="btn btn-primary btn-lg"><li>Enigme 3</li></button>
								</a>
								<a href="scores.php" title="Table des scores">
									<button  type="button" class="btn btn-primary btn-lg"><li>Table des scores </li></button>
								</a>
							</ul>
						</div>
					</div>
				</div>
			</div>
		
	</nav>

	<!--________________________page______________________________-->


	<div class="container">
		<div class="row">
			<div class="col-md-12 zone"><center>
				<h1 id="color">Histoire:</h1>
					<div class="espace">
					</div>
					
						<div class="histoire">
							Il y a bien longtemps, dans un monde lointain, très lointain...
						</div>
				<div class="espace">
				</div>
						<div class="histoire">
							C'est une époque de guerre civile.
						</div>
				<div class="espace">
				</div>
						<div class="histoire">
							Tu es la seule personne de ton village encore en vie.<br>
							Tu dois trouver la sortie!
						</div>
				<div class="espace">
				</div>
						<div class="histoire">
							Que la force de la forêt soit avec toi ...
						</div>
				<div class="espace">
				</div>
                  		
					<a href="enigme1.php"><button type="submit" class="btn btn-default">Tu es prêt ?</button></a>
				<div class="espace50">
				</div>
						<div class="histoire">
							ou
						</div>
				<div class="espace50">
				</div>
					<!-- lancer une pop-up?-->
                    <a href="accueil.php"><button type="submit" class="btn btn-default">Tu trembles de peur ?</button></a><br><br>
                    <!-- lancer une pop-up?-->
                    <div class="espace">
					</div>

	</center></div>

				

		</div>
	</div>
	<script type="text/javascript">
        			$("#color").mouseover(function(){
                	$("#color").css({"color":"#8B0000"});
                });

                	$("#color").mouseout(function(){
                	$("#color").css({"color":"black"});
            	});
        </script>
</body>
</html>
