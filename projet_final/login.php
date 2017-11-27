<form method="post" action="">
  <legend>Connexion au panel</legend>

  <div class="form-group">
    <label class="control-label">Login</label>
    <div>
      <input type="text" class="form-control" name="login" placeholder="Login">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label">Password</label>
    <div>
      <input type="password" name="password" class="form-control" placeholder="Password">
    </div>
  </div>

  <button type="submit" name="submit" class="btn btn-primary">Connexion</button>
</form>

<?php

  try {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $bdd = new PDO('mysql:host=localhost;dbname=projet', 'root', 'root', $pdo_options);

    // On recupere tout le contenu de la table Client
      $reponse = $bdd->query('SELECT url FROM tjoueur, tpartie, tenigme WHERE tpartie.id_enigme=tenigme.id_enigme AND tpartie.id_joueur = tjoueur.id_joueur and tjoueur.pseudo = "Cop"');
    $reponse->setFetchMode(PDO::FETCH_OBJ);
    // On affiche le resultat
    while ($donnees = $reponse->fetch()) {
      ?>
        <a href= " <?php echo $donnees['url'] ?>">Continuer</a>
      <?php
    }

    $reponse->closeCursor();
    }
    catch(Exception $e) {
      die('Erreur : '.$e->getMessage());
  }
?>
