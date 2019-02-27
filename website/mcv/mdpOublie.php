<?php
include('dashboard_vaccin/inc/request.php');
include('inc/pdo.php');
include('inc/fonctions.php');
$title = 'MDP oublié';
$body = '';

$error = array();

if(!empty($_POST['submitted'])) {

  $mail = clean('mail');


  if(!empty($mail)) {
    if(!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
      $error['mail'] = 'Ceci n\'est pas une adresse mail.';
    } else {

      $user = testmail($mail);

      if (!empty($user)) {
        $body = '<p>Veuillez cliquer sur ce lien</p>';
        $body .= '<a href="mdpoublienew.php?mail='.urlencode($user['mail']) .'&token='.  urlencode($user['token']).'">ici</a>';

      }else {
        $error['mail'] = 'Mail non existant';
      }
    }
  } else {
    $error['mail'] = 'Veuillez renseigner ce champs';
  }
}





include('inc/header.php');


?>
<!-- Il y a une div class container autour du body  -->
<div class="contact">
  <h2>Mot de passe oublié</h2>
  <div class="form">
    <form class="formulaire" action="" method="post">
  <form  class="formulaire" action="" method="post">
    <input type="text" name="mail" placeholder="Votre email" value="<?php value('mail') ?>">
    <span><?php spanError($error,'mail') ?></span>
    <input class="button" type="submit" name="submitted" value="Modifier le mot de passe">
  </form>
  <div class="clear"></div>
</div>
</div>



<?php
echo $body;
 include('inc/footer.php');
