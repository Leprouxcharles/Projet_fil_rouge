<?php
	session_start()
 ?>
<html>
	<head>
		<meta charset='utf-8'>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" href="css/projet.css"/>
		<link rel="stylesheet" href="css/enigme1.css"/>
		<link rel="stylesheet" href="css/bouton.css"/>
		<link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
		<script type="application/javascript" src="js/jquery-2.1.1.min.js"></script>
		<script type="application/javascript" src="js/bootstrap.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Enigme 1</title>

	</head>
	<body onclick="ScorIng(event)">

		<!-- Petit menu qui suit la page -->
				<div class="row" id="menu">
						<div class="col-sm-12">
							<div>
								<button id="bouton" data-toggle="dropdown" type="button" class="btn dropdown-toggle">
								<span class="glyphicon glyphicon-align-justify"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="connexion.php"> Accueil </a></li><br>
									<li><a href="score.php"> Scores </a></li><br>
									<li id="deco"><a href="deconnexion.php"> Déconnexion </a></li>
								</ul>
							</div>
						</div>
				</div>


	<!--________________________page______________________________-->


	<div class="container back" id="ecran">
		<div class="row">
			<div class="col-md-12 jeu">
				<center>
					<h1 id="color">Enigme 1</h1>
				</center>
			</div>
		</div>
		<div class="row" class="enigne1row">
			<div class="col-md-12" class"enigne1row">
				Score : <span class="score"></span>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 zone">
				<textarea  onclick="dansetexte(event)" onkeypress="dansetexte1(event); victoireEnigme(event)"  id="nuage" class="azerty"></textarea>
				<button class="perso" onclick="choisiPerso(event)" onkeypress="movePerso(event)" onkeyup="ouverturePassage(event); interrupteur(event)"></button>
				<img src="img/buisson_obs.png" class="buisson"/>
				<img src="img/Arbre2.png" class="arbre"/>
				<img src="img/arbre_depl.png" class="sortie"/>
				<img src="img/interruptUp.png" class="interrupt1"/>
				<img src="img/interruptgg.png" class="interruptgg"/>
				<img src="img/arbre_depl.png" class="deplacable"/>
				<img src="img/pancarte.png" class="pancarte">
			</div>
		</div>
	</div>
</div>
<script type="text/javascript" src ="js/scoring.js"></script>
<script type="text/javascript" src ="js/enigme1.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</body>
</html>
