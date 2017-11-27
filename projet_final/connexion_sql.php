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
