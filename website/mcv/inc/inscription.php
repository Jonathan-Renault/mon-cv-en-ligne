<?php

$error_reg = array();
// Lors de la soumission du formulaire
if (!empty($_POST['submit_register'])) {

// fonction declarant et nettoyant (expace au debut et à la fin & supprimant les caractère pouvant créer un script) une variable

$nom      = clean('nom');
$prenom   = clean('prenom');
$mail     = clean('mail');
$pwd1     = clean('pwd1');
$pwd2     = clean('pwd2');


if(!empty($nom)) {
  if(strlen($nom) < 3 ) {
    $error_reg['nom'] = 'Ce champs est trop court.(minimum 3 caractères)';
  } elseif(strlen($nom) > 20) {
      $error_reg['nom'] = 'Ce champs est trop long.(maximum 20 caractères)';
    } $inscrit = 1;
} else {
    $error_reg['nom'] = 'Veuillez renseigner ce champs';
  }
if(!empty($prenom)) {
  if(strlen($prenom) < 3 ) {
    $error_reg['prenom'] = 'Ce champs est trop court.(minimum 3 caractères)';
  } elseif(strlen($prenom) > 20) {
      $error_reg['prenom'] = 'Ce champs est trop long.(maximum 20 caractères)';
    } $inscrit .= 2;
    } else {
        $error_reg['prenom'] = 'Veuillez renseigner ce champs';
      }

if(!empty($mail)) {
  if(!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
    $error_reg['mail'] = 'Ceci n\'est pas une adresse mail.';
  } else {

    $testmail = testmail($mail);

    if (!empty($testmail)) {
        $error_reg['mail'] =  'Cet email est déjà pris';
    } $inscrit .= 3;
  }
} else {
  $error_reg['mail'] = 'Veuillez renseigner ce champs';
}

// test le mot de passe si il peut être inclut dans la base de donnée
if(!empty($pwd1) && !empty($pwd2)) {
  if($pwd1 != $pwd2) {
    $error_reg['pwd1'] = 'Les mots de passe sont différents';
  }
  $inscrit .= 4;
  }

if (validationEmail($error_reg,$mail,'mail')) {

  $testmail = testmail($mail);

 }else  {

   $error_reg['pwd1'] = 'Veuillez renseigner ce champs';
  }


  if (count($error_reg)==0) {
    $hash     = password_hash($pwd1 , PASSWORD_DEFAULT);
    $token    = generateRandomString(120);

    insert_inscription($nom, $prenom, $mail, $hash,$token );
  }
}
