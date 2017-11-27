<?php
	session_start();

	try {
		$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
		$bdd = new PDO('mysql:host=localhost;dbname=projet', 'root', 'root', $pdo_options);
		$sql = "SELECT * FROM tpartie WHERE id_joueur = '".$_SESSION['id_joueur']."'";
		$scoreEnigme3 = $_POST['scoreEnigme3'];
		$result = $bdd->query($sql);
			while($row = $result->fetch()) {
				$partie = $row['id_partie'];
			}
			$sql2 = 'SELECT tpartie.score_joueur FROM tpartie, Tjoueur WHERE tpartie.id_partie = \''.$partie.'\' AND  tpartie.id_joueur = \''.$_SESSION['id_joueur'].'\' FOR UPDATE';
			// echo $scoreEnigme2;
		// On recupere l'url du joueur connecté.
		$selectforScore = $bdd->query($sql2);

		// while($row = $result->fetch()) {
		// 	$score = $row['id_partie'];
		// }

		$reponseScore = $bdd->exec('UPDATE tpartie SET score_joueur = score_joueur + \''.$scoreEnigme3.'\'');
		$reponse2 = $bdd->exec('UPDATE tpartie SET id_enigme = 5 WHERE id_partie = \''.$partie.'\' AND id_joueur = \''.$_SESSION['id_joueur'].'\'');
		// On affiche le resultat

		}
		catch(Exception $e) {
			die('Erreur : '.$e->getMessage());
	}

	header ("Location:http://localhost/projet/scoresRegister.php");
?>
