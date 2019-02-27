<?php
// Saute eune ligne
function br(){
  echo '<br>';
}
//Affiche un tableau de façon claire
function debug($array){
  echo '<pre>';
  print_r($array);
  echo '</pre>';
}
//Affiche une erreur dans le formulaire
function spanError($error, $key){
    if(!empty($error[$key])) {
    echo $error[$key]; }
}
//Ne prends pas en compte les balises html et php dans le champ
function clean($key){
  return trim(strip_tags($_POST[$key]));
}

function value($key){
	 if(!empty($_POST[$key])) {
     echo $_POST[$key]; }
}

function valueofvariable($variable,$key){
	 if(!empty($variable[$key])) {
     echo $variable[$key]; }
}

//valide un texte, comme un pseudo, nom ou message (necessite le array suivant : $error =array();)
function validationText($error,$value,$min,$max,$key) {
  if(!empty($value)) {
    if(strlen($value) < $min ) {
      $error[$key] = 'Ce champs est trop court.(minimum '. $min .' caractères)';
    } elseif(strlen($value) > $max) {
      $error[$key] = 'Ce champs est trop long.(maximum '. $max .'  caractères)';
    }
  }  return true;
}

//valide un mail (necessite le array suivant : $error =array();)
function validationEmail($error,$email,$key){
  if(!empty($email)) {
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $error[$key] = 'Ceci n\'est pas une adresse mail.';
    }return true;
  }
}

//valide si deux champs mot de passe sont identiques.
function validation2Password($error,$password1,$password2,$key){
  if(!empty($password1) && !empty($password2)) {
    if($password1 != $password2) {
      $error[$key] = 'Les mots de passe sont différents';
    }
   }else  {
       $error[$key] = 'Veuillez renseigner ce champs';
     }
  }

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
function is_logged(){
  if (
    !empty($_SESSION['user']['id'])
  && !empty($_SESSION['user']['nom'])
  && !empty($_SESSION['user']['prenom'])
  && !empty($_SESSION['user']['mail'])
  && !empty($_SESSION['user']['role'])
  && $_SESSION['user']['ip'] = $_SERVER['REMOTE_ADDR']){
    return true;
  }else {
  return false;
  }
}
function is_admin(){
  if (is_logged() == true && $_SESSION['user']['role'] === 'admin'){
    return true;
  }
}
function changementDate($tableau,$key){
  if ($tableau[$key] != NULL) { //Création de la variable modifier pour la date de modif dans la BDD
      $modif = date('d/m/Y', strtotime($tableau[$key]));
  }else{
      $modif = 'Il n\'a pas encore été modifié';
  }
  echo  $modif;
}
