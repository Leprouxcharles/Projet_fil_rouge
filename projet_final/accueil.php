<?php
  ini_set("display_errors",0);error_reporting(0);

  try {
    $bdd = new PDO ('mysql:host=localhost;dbname=projet;charset=utf8', 'root', 'root');

    $pseudo = htmlentities($_POST['pseudo'],ENT_QUOTES, "ISO-8859-1");
    $mdp = $_POST['password'];
    // $sql = "SELECT pseudo FROM tjoueur WHERE pseudo = '".$_POST['pseudo']."'";
    // $verif = $bdd->query($sql);
    //   while($row = $result->fetch_assoc()) {
    //     $joueur['pseudo']=$row['joueur'];
    //   }
    // if ($joueur == $_POST['pseudo']) {
    //   echo "Le pseudo est déja utilisé"
    // }
    if ($pseudo != null && $mdp != null) {
      $sql = 'INSERT INTO tjoueur (pseudo, mdp) VALUES (\''.$pseudo.'\', \''.$mdp.'\')';
      $bdd->exec($sql);
			echo "Votre compte a bien été créé ";
    }
		$bdd = null;  // Deconnexion
  }
  catch(PDOException $e) {
    echo $e->getMessage("");
  }
?>

<html>
	<head>
		<meta charset='utf-8'>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" href="css/projet.css"/>
		<link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
		<script type="application/javascript" src="js/jquery-2.1.1.min.js"></script>
		<script type="application/javascript" src="js/bootstrap.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Accueil</title>
	</head>
	<body>
    <br><br>
	<div class="container">
		<div class="row">
			<div class="col-md-12 zone">
        <center>
				<h1>Se connecter</h1>
				<form class="" action="connexion.php" method="post">
          <div class="form-group">
          	<label for="pseudo"><h2>Ton pseudo:</h2></label>
          	<input type="text" required class="form-control" name="pseudo" placeholder="Pseudo" value="" id="pseudo">
          </div>
          <div class="form-group">
            <label for="mdp"><h2>Ton mot de passe:</h2></label>
            <input type="password" required class="form-control" name="mdp" placeholder="Mot de passe" value="" id="mdp">
          </div>
      		<input id="connexion" type="submit" name="connexion" class="btn btn-default" value="Connexion"/><br><br>
      		<a href="inscription.php" title="inscription" id="inscription">Tu n'as pas de compte?</a>
				</form>
  	 </center>
    </div>
	 </div>
	</div>
</body>
</html>
