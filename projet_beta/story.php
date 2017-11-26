<?php
session_start();
	try {
		$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
		$bdd = new PDO('mysql:host=localhost;dbname=projet', 'root', 'root', $pdo_options);
		// On recupere l'url du joueur connecté.
		$reponse2 = $bdd->exec("INSERT INTO TPartie (score_joueur, id_joueur, id_enigme) VALUES (0,'".$_SESSION['id_joueur']."', 1)");
		// On affiche le resultat
		}
		catch(Exception $e) {
			die('Erreur : '.$e->getMessage());
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
		<title>Histoire</title>
		<style>
		</style>
	</head>
	<body>
		<div class="espace50">
		</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<center>
				<h1 id="color">Histoire:</h1>
					<div class="espace">
					</div>

						<div class="histoire">
							Tu t'es perdu?<br>

						</div>
					<div class="espace">
					</div>
						<div class="histoire">
							Tu n'as qu'une solution pour surivre:<br>
							Tu dois trouver la sortie!
						</div>

				<div class="espace">
				</div>
				<div class="espace">
				</div>
						<div class="histoire">
							Que la force de la forêt soit avec toi ...
						</div>
				<div class="espace">
				</div>
					<div class="histoire">
					<a href="php/updateEnigme1.php">Tu es prêt ?</a>
				<div class="espace50">
				</div>
						
							ou
						
				<div class="espace50">
				</div>

					<!-- lancer une pop-up?-->
                    <a href="connexion.php">Tu trembles de peur ?</a><br><br>
                    <!-- lancer une pop-up?-->
                    <div class="espace">
					</div>
					</div>

	</center></div>



		</div>
	</div>
	<div class="espace50">
	</div>
	<script type="text/javascript">
        			$("#color").mouseover(function(){
                	$("#color").css({"color":"#8B0000"});
                });

                	$("#color").mouseout(function(){
                	$("#color").css({"color":"white"});
            	});
        </script>

			</div>
		</div>


    </div>

</body>
</html>
