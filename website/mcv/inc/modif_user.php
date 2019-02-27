<?php
include('dashboard_vaccin/inc/request.php');
$id = $_SESSION['user']['id'];

$user = id_search($id);

$error = array();
// Lors de la soumission du formulaire
if (!empty($_POST['submitted'])) {

// fonction declarant et nettoyant (expace au debut et à la fin & supprimant les caractère pouvant créer un script) une variable

  $nom      = clean('nom');
  $prenom   = clean('prenom');
  $mail     = clean('mail');
  $date_naissance = clean('date_naissance');
  $sexe     = clean('sexe');


  if(!empty($nom)) {
    if(strlen($nom) < 3 ) {
      $error['nom'] = 'Ce champs est trop court.(minimum 3 caractères)';
    } elseif(strlen($nom) > 20) {
        $error['nom'] = 'Ce champs est trop long.(maximum 20 caractères)';
      }
  } else {
      $error['nom'] = 'Veuillez renseigner ce champs';
    }
  if(!empty($prenom)) {
    if(strlen($prenom) < 3 ) {
      $error['prenom'] = 'Ce champs est trop court.(minimum 3 caractères)';
    } elseif(strlen($prenom) > 20) {
        $error['prenom'] = 'Ce champs est trop long.(maximum 20 caractères)';
      }
      } else {
          $error['prenom'] = 'Veuillez renseigner ce champs';
        }

  if(!empty($mail)) {
    if(!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
      $error['mail'] = 'Ceci n\'est pas une adresse mail.';
    }
  } else {
    $error['mail'] = 'Veuillez renseigner ce champs';
  }


  if (count($error)==0) {

    update_profil($id, $nom, $prenom, $mail, $sexe, $date_naissance );

      header("Location: profil.php");

  }
}
