<?php
	// session_start();
  //
	// try {
	// 	$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
	// 	$bdd = new PDO('mysql:host=localhost;dbname=projet', 'root', 'root', $pdo_options);
	// 	// On recupere l'url du joueur connecté.
	// 	$reponse2 = $bdd->exec("UPDATE tpartie SET id_enigme = 4 WHERE id_joueur = '".$_SESSION['id_joueur']."'");
	// 	// On affiche le resultat
	// 	}
	// 	catch(Exception $e) {
	// 		die('Erreur : '.$e->getMessage());
	// }
  //
	header ("Location:http://localhost/projet/score.php");
?>
