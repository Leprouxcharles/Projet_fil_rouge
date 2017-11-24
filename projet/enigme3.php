<?php
	session_start();
 ?>
<html>
	<head>
		<head>
			<meta charset='utf-8'>
			<link rel="stylesheet" href="css/bootstrap.min.css"/>
			<link rel="stylesheet" href="css/projet.css"/>
			<link rel="stylesheet" href="css/enigme3.css">
			<link rel="stylesheet" href="css/bouton.css">
			<link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
			<script type="application/javascript" src="js/jquery-2.1.1.min.js"></script>
			<script type="application/javascript" src="js/bootstrap.min.js"></script>
			<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
			<title>Enigme 3</title>
		</head>
	</head>
	<body onclick="ScorIng3(event)">

		<!-- Petit menu qui suit la page -->
				<div class="row" id="menu">
						<div class="col-sm-12">
							<div>
								<button id="bouton" data-toggle="dropdown" class="btn dropdown-toggle">
								<span class="glyphicon glyphicon-align-justify"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#index.php"> Accueil </a></li><br>
									<li><a href="#"> Histoire </a></li><br>
									<li><a href="#"> Scores </a></li><br>
									<li id="deco"><a href="deconnexion.php"> Déconnexion </a></li>
								</ul>
							</div>
						</div>
				</div>

<!--________________________container menu______________________________-->

	<div class="container">
		<div class="row">
			<div class="col-md-12 zone">
				<center>
					<h1>Enigme 3</h1>
				</center>
			</div>
			<div class="row" class="enigne1row">
			<div class="col-md-12" class"enigne1row">
				Score : <span class="score3"></span>
			</div>
		</div>
			<div id="limitation" class="d">

					<img id="feu" src="img/Fayeur.png"  class="img-responsive">

					<div id="moins" onclick="moins()" class="seau"></div>

					<div id="plus" onclick="plus()"  class="souffleur"></div>

				<input id="reponse"type="text" placeholder="Réponse...?"/>
				<button id="valid" type="button" onclick="gagne()">Valider</button>

				<div id="quizz">Je suis<br/>petit et <br/>marron...</div>
			</div>
		</div>

	</div>

</body>

<!-- <script type="text/javascript"> SERT A RIEN !!!!!!

$("#enigme").show(500);

$("#cacher").click (function(){
$("#enigme").fadeToggle(2000);
});
</script> -->
<script type="text/javascript" src="js/scoring.js"></script>
<script type="text/javascript" src ="js/enigme3.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


</html>
