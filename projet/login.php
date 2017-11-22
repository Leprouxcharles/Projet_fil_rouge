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
  $db = mysqli_connect ('localhost', 'login', 'mdp');
  mysqli_select_db('projet',$db);

  if(isset($_POST) && !empty ($_POST['login']) && !empty($_POST['mdp'])){
    $_POST['mdp'] = hash("sha256", $_POST['mdp']);
    extract($_POST);

    $sql = "SELECT mdp FROM TJoueur WHERE login ='".$login."'";
    $req = mysqli_query($sql) or die ('Erreu SQL !'.$sql.'<br>'.mysql_error());

    $data = mysqli_fetch_assoc($req);

    if($data['mdp'] != $mdp){
      echo '<div class="alert-dismissable alert-success">
      <button type="button" class="close" data-dismiss="alert">x</button>
      <strong> Oh non !</strong> Mauvais login / password. Merci de recommencer !</div>';
    }
    else{
      session_start();
      $_SESSION['login'] = $login;

      echo '<div class="alert alert-dismissable alert-success">
      <button type="close" data-dismiss="alert">x</button>
      <strong> Yes !</strong> Vous êtes bien enregistré, Redirection dans 5 secondes ! <meta http-equiv="refresh" content="5";
      URL</div>;'
    }
  }

  else{
    $champs = '<p><b>(Remplissez tous les champs pour vous connecter !)</b></p>';
  }
?>
