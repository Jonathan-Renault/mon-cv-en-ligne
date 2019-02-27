<?php
include('dashboard_vaccin/inc/request.php');
include('inc/pdo.php');
include('inc/fonctions.php');
$title = 'MDP oublié New';

$error = array();

if(!empty($_GET['mail']) && !empty($_GET['token'])){
    $mail   = urldecode($_GET['mail']);
    $token  = urldecode($_GET['token']);

    $user = mdpoublienew($mail, $token);

    if(!empty($user)){

      if (!empty($_POST['submitted'])) {

        $password      = clean('password');
        $password2     = clean('password2');

        if(!empty($password) && !empty($password2)) {
          if($password != $password2) {
            $error['password'] = 'Les mots de passe sont différents';
          }
        }

        if (count($error)==0) {
          $hash     = password_hash($password , PASSWORD_DEFAULT);
          $token    = generateRandomString(120);

          update_password($hash, $token, $user);

debug($user);
          header('location: index.php');

    }
  }
    }else{
      header('location:404.php');
    }
  }else {
    header('location:404.php');
  }

include('inc/header.php');

?>
<!-- Il y a une div class container autour du body  -->

<div class="contact">
  <h2>Nouveau mot de passe</h2>
  <div class="form">
    <form class="formulaire" action="" method="post">
  <input type="password" name="password" placeholder="Nouveau mot de passe" value="">
  <input type="password" name="password2" placeholder="Confirmation du mot de passe" value="">
  <span><?php spanError($error,'password') ?></span>

  <input class="button" type="submit" name="submitted" value="Envoyer">

</form>
</div>
</div>

<?php include('inc/footer.php');
