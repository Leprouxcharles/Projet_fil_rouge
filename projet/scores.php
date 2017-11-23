<?php
  $bdd = mysqli_connect('localhost', 'root', 'root', 'projet')
?>
<?php
  if($bdd = mysqli_connect('localhost', 'root', 'root', 'projet')) {

  }
  else {
  	echo 'Erreur';
  }
?>
<?php
  $resultat = mysqli_query($bdd, 'SELECT pseudo, score_joueur FROM TJoueur, TPartie, TScore WHERE TPartie.id_joueur = TJoueur.id_joueur AND TPartie.id_score = TScore.id_score ORDER BY score_joueur DESC LIMIT 10;');
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
		<title>Table des scores</title>
		<style>
		</style>
	</head>
	<body>
		<div class="espace50">
		</div>

	<!--________________________page______________________________-->

	<div class="container">
		<div class="row">
			<div class="col-md-12 zone"><center>
				<h1 id="color">Table des scores:</h1></center>
			</div>
		</div>
			<div class="row">
				<div class="col-md-4 infoscore">
					Classement
				</div>
				<div class="col-md-4 infoscore">
					Pseudo
				</div>
				<div class="col-md-4 infoscore">
					Score
				</div>
			</div>
				<div class="row">
					<?php
						while($donnees = mysqli_fetch_assoc($resultat)) {
					?>
					<div class="col-md-4 premier"></div>
					<div class="col-md-4 premier"><?php echo $donnees['pseudo'];?></div>
					<div class="col-md-4 premier"><?php echo $donnees['score_joueur'];?></div>
				</div>
				<?php } ?>
				<div class="row">
					<div class="col-md-4 deuxieme">
						2eme
					</div>
					<div class="col-md-4 deuxieme"></div>
					<div class="col-md-4 deuxieme"></div>
				</div>
				<div class="row">
					<div class="col-md-4 troisieme">
						3eme
					</div>
					<div class="col-md-4 troisieme"></div>
					<div class="col-md-4 troisieme"></div>
				</div>
				<div class="row">
					<div class="col-md-4 quatrieme">
						4eme
					</div>
					<div class="col-md-4 quatrieme"></div>
					<div class="col-md-4 quatrieme">

										</div>

									</div>

										<div class="row">

											<div class="col-md-4 cinquieme">
												5eme
											</div>

											<div class="col-md-4 cinquieme">

											</div>

											<div class="col-md-4 cinquieme">

											</div>

										</div>

											<div class="row">

												<div class="col-md-4 sixieme">
													6eme
												</div>

												<div class="col-md-4 sixieme">

												</div>

												<div class="col-md-4 sixieme">

												</div>

											</div>

													<div class="row">

														<div class="col-md-4 septieme">
															7eme
														</div>

														<div class="col-md-4 septieme">

														</div>

														<div class="col-md-4 septieme">

														</div>

													</div>

															<div class="row">

																<div class="col-md-4 huitieme">
																	8eme
																</div>

																<div class="col-md-4 huitieme">

																</div>

																<div class="col-md-4 huitieme">

																</div>

															</div>

																	<div class="row">

																		<div class="col-md-4 neuvieme">
																			9eme
																		</div>

																		<div class="col-md-4 neuvieme">

																		</div>

																		<div class="col-md-4 neuvieme">

																		</div>

																	</div>

																			<div class="row">

																				<div class="col-md-4 dixieme">
																					10eme
																				</div>

																				<div class="col-md-4 dixieme">

																				</div>

																				<div class="col-md-4 dixieme">

																				</div>

																			</div>

											<div class="row">	
												<div class="col-md-12" id="texteaccueil">
													<center><a href="menu.php">Revenir à l'accueil</a></center>
												</div>
											</div>




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
