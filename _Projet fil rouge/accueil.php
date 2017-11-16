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
		<title>Accueil</title>
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
							<a class="navbar-brand" href="accueil.html"><img class="logohome" src="./images/logohome.png" title="Accueil" height="70px"></a>
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
			<div class="col-md-12 zone"><center>
				<h1 id="color">Se connecter</h1>
		
                  		<div class="form-group">
                    		<label for="pseudo"><h2>Ton pseudo:</h2></label>
                    		<input type="pseudo" class="form-control" id="pseudo">
                  		</div>

                        <div class="form-group">
                          <label for="mdp"><h2>Ton mot de passe:</h2></label>
                          <input type="mdp" class="form-control" id="mdp">
                        </div>
                              
                                    
                                    <div class="checkbox">
                                      <label><input type="checkbox"> Se souvenir de moi</label>
                                    </div>
<!--si l'identification est correcte--> <a href="champion.html"><button type="submit" class="btn btn-default">Envoyer</button><br><br>
                                        <a href="inscription.html" title="inscription" id="inscription">Tu n'as pas de compte?</a>

	</center></div>

				

		<script type="text/javascript">
        			$("#color").mouseover(function(){
                	$("#color").css({"color":"blue"});
                });

                	$("#color").mouseout(function(){
                	$("#color").css({"color":"black"});
            	});
        </script>
</body>
</html>
