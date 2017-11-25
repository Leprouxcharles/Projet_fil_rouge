<?php

	//pour info

	echo '';
		print_r($_SERVER);
	echo '/';

	// le script en lui même

	$chaine = $_SERVER['HTTP_REFERER'];
	$lg_max=strlen($_SERVER['HTTP_HOST']);

	if (strlen($chaine) > $lg_max) {
		$chaine = substr($chaine, 7, $lg_max);
	}

	//echo 'resultat :'.$chaine;


	if($_SERVER['HTTP_HOST']!=$chaine){
		header('Location:http://localhost/projet/index.php');exit;
	}
	else{
		header('Location:http://localhost/projet/enigme1.php')

	?>
