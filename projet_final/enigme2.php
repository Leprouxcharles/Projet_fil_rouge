<?php
	session_start();
 ?>
<html>
	<head>
		<head>
			<meta charset='utf-8'>
			<!-- <link rel= "stylesheet" type="text/css" href="index.css"/> -->
			<link rel="stylesheet" href="css/bootstrap.min.css"/>
			<link rel="stylesheet" href="css/projet.css"/>
			<link rel="stylesheet" href="css/enigme2.css"/>
			<link rel="stylesheet" href="css/bouton.css"/>
			<link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
			<script type="application/javascript" src="js/jquery-2.1.1.min.js"></script>
			<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
			<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
			<script type="text/javascript" src="js/enigme2.js"></script>
			<script type="application/javascript" src="js/bootstrap.min.js"></script>
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>Enigme 2</title>
		</head>
	</head>
	<body onclick="ScorIng2()">

<!-- Petit menu qui suit la page -->
		<div class="row" id="menu">
				<div class="col-sm-12">
					<div>
						<button id="bouton" data-toggle="dropdown" class="btn dropdown-toggle">
						<span class="glyphicon glyphicon-align-justify"></span>
						</button>
						<ul class="dropdown-menu">
							<li><a href="connexion.php"> Accueil </a></li><br>
							<li><a href="story.php"> Histoire </a></li><br>
							<li><a href="score.php"> Scores </a></li><br>
							<li id="deco"><a href="deconnexion.php"> Déconnexion </a></li>
						</ul>
					</div>
				</div>
		</div>

	<div class="container" id="ecran">
		<div class="row">
					<div class="col-md-6">
						<h3>Score : <span class="score2"></span></h3>
					</div>
			<div class="col-md-6 zone">
				<center>
					<h1>Enigme 2</h1>
				</center>
			</div>
		</div>

	<div class="row">
		<div class="col-cs-12">
			<div id="limitation" class="d">

					<div class="drag p1" id="piece1">
					</div>
					<div class="drag p2">
					</div>
					<div class="drag p3">
					</div>
					<div class="drag p4">
					</div>
					<div class="foret decor p5">
					</div>
					<div class="arbredpl decor p5b">
					</div>
					<div class="montagne decor p6" id="mont">
					</div>

					<br>

					<div class="mag r1">
					</div>
					<div class="mag r2">
					</div>
					<div class="mag r3">
					</div>
					<div class="mag r4">
					</div>
			</div>
		</div>

	</div>
	</div>
					 <!-- Trigger the modal with a button -->
					 <button type="button" id="victoire" class="btn btn-info btn-lg gagne" data-toggle="modal" data-target="#myModal">Open Modal</button>

					 <!-- Modal -->
					 <div class="modal fade" id="myModal" role="dialog">
						 <div class="modal-dialog">

							 <!-- Modal content-->
							 <div class="modal-content">
								 <div class="modal-header">
									 <h4 class="modal-title" align="center">Bien joué enigme 2 terminée !!!</h4>
								 </div>
								 <span>Score  :</span>
								 <div class="modal-body" align="center">
									 <form action="php/updateEnigme3.php" method="post">
										<input type="text" name="scoreEnigme2" class="scoreInput2" value="">
										<button class="btn btn-default" type="submit" id="boutonmodal">Poursuivre</button>
									 </form>
								 </div>
							 </div>

						 </div>
					 </div>

<script type="text/javascript" src ="js/scoring.js"></script>
<script type="text/javascript" src ="js/enigme2.js"></script>

</body>
</html>
