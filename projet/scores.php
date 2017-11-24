<?php
  session_start();
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
            $classement = 1;
            $css = 0;
            $couleur = array('premier', 'deuxieme', 'troisieme', 'quatrieme', 'cinquieme', 'sixieme', 'septieme', 'huitieme', 'neuvieme', 'dixieme');
            try {
              $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
              $bdd = new PDO('mysql:host=localhost;dbname=projet', 'root', 'root', $pdo_options);

              // On recupere l'url du joueur connecté.
              $reponse = $bdd->query('SELECT pseudo, score_joueur FROM TJoueur, TPartie, TScore WHERE TPartie.id_joueur = TJoueur.id_joueur AND TPartie.id_score = TScore.id_score ORDER BY score_joueur DESC LIMIT 10');
              // On affiche le resultat
              while ($donnees = $reponse->fetch(PDO::FETCH_OBJ)) {
                ?>
                <div class="row <?php echo $couleur[$css++] ?>">
                  <div class="col-md-4"><?php echo $classement++ ?></div>
                  <div class="col-md-4"><?php echo $donnees->pseudo ?></div>
                  <div class="col-md-4"><?php echo $donnees->score_joueur ?></div>
                </div>
                <?php
              }
              $reponse->closeCursor();
              }
              catch(Exception $e) {
                die('Erreur : '.$e->getMessage());
            }
           ?>
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
