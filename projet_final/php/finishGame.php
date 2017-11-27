<?php
	session_start();
	try {
		$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
		$bdd = new PDO('mysql:host=localhost;dbname=projet', 'root', 'root', $pdo_options);
		$sql = "SELECT * FROM tpartie WHERE id_joueur = '".$_SESSION['id_joueur']."'";
		$result = $bdd->query($sql);
			while($row = $result->fetch()) {
				$partie = $row['id_partie'];
			}

		$reponse = $bdd->exec('DELETE FROM `tpartie` WHERE id_partie = "'.$partie.'" AND id_joueur = "'.$_SESSION['id_joueur'].'"');
		// $reponse3 = $bdd->exec('UPDATE tpartie SET score_joueur = \''.$scoreEnigme2.'\' WHERE id_partie = \''.$partie.'\' AND id_joueur = \''.$_SESSION['id_joueur'].'\'');
		}
		catch(Exception $e) {
			die('Erreur : '.$e->getMessage());
	}

	header ("Location:http://localhost/projet/connexion.php");

?>
