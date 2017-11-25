<?php
	session_start();
	try {
		$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
		$bdd = new PDO('mysql:host=localhost;dbname=projet', 'root', 'root', $pdo_options);
		$sql = "SELECT * FROM tpartie WHERE id_joueur = '".$_SESSION['id_joueur']."'";
		$scoreEnigme2 = $_POST['scoreEnigme2'];
		echo $scoreEnigme2;
		$result = $bdd->query($sql);
			while($row = $result->fetch()) {
				$partie = $row['id_partie'];
			}
			// echo $scoreEnigme2;
		// On recupere l'url du joueur connecté.
		$selectforScore = $bdd->query('SELECT tpartie.score_joueur FROM tpartie, tjoueur WHERE tpartie.id_partie = \''.$partie.'\' \''.$_SESSION['id_joueur'].'\'');
		// while($row = $result->fetch()) {
		// 	$score = $row['id_partie'];
		// }
		$reponse = $bdd->exec('UPDATE tpartie SET score_joueur = score_joueur + \''.$scoreEnigme2.'\'');
		$reponse2 = $bdd->exec('UPDATE tpartie SET id_enigme = 4 WHERE id_partie = \''.$partie.'\' AND id_joueur = \''.$_SESSION['id_joueur'].'\'');
		// $reponse3 = $bdd->exec('UPDATE tpartie SET score_joueur = \''.$scoreEnigme2.'\' WHERE id_partie = \''.$partie.'\' AND id_joueur = \''.$_SESSION['id_joueur'].'\'');
		// On affiche le resultat
		}
		catch(Exception $e) {
			die('Erreur : '.$e->getMessage());
	}

	header ("Location:http://localhost/projet/enigme3.php");

?>
