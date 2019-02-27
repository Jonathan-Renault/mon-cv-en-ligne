<?php
function listvaccins(){
  global $pdo;

  $sql = "SELECT *
          FROM v5_vaccin";
  $query = $pdo -> prepare($sql);
  $query -> execute();
  return $query -> fetchAll();
}

function vaccinfaits($id){
  global $pdo;

  $sql = "SELECT * FROM v5_vaccin AS v
          LEFT JOIN v5_relation AS pivot
          ON v.id = pivot.vaccin_id
          WHERE pivot.user_id = $id";
  $query = $pdo -> prepare($sql);
  $query -> execute();
  return  $query -> fetchAll();
}

function listVaccinObligatoires(){
  global $pdo;

  $sql = "SELECT *
          FROM v5_vaccin
          WHERE obligatoire = 1";
  $query = $pdo -> prepare($sql);
  $query -> execute();
  return  $query -> fetchAll();
}

function vaccinNonObligatoires($id){
  global $pdo;

  $sql = "SELECT * FROM v5_vaccin AS v
           LEFT JOIN v5_relation AS pivot
           ON v.id = pivot.vaccin_id
           WHERE pivot.user_id = $id
           AND v.obligatoire = 0";
   $query = $pdo -> prepare($sql);
   $query -> execute();
  return  $query -> fetchAll();
}

function vaccinObligatoires($id){
  global $pdo;

  $sql = "SELECT * FROM v5_vaccin AS v
          JOIN v5_relation AS pivot
          ON v.id = pivot.vaccin_id
          WHERE pivot.user_id = $id
          AND v.obligatoire = 1";
  $query = $pdo -> prepare($sql);
  $query -> execute();
  return  $query -> fetchAll();
}



function insert_vaccin($id, $vaccin_id, $date_injection, $rappel){
    global $pdo;

    $sql = "INSERT INTO v5_relation (user_id, vaccin_id, date_injection, rappel, created_at ) VALUES (:user_id , :vaccin_id ,:date_injection, :rappel, NOW())";

    $query= $pdo -> prepare($sql) ;
    $query-> bindvalue(':user_id' , $id , PDO::PARAM_STR );
    $query-> bindvalue(':vaccin_id' , $vaccin_id , PDO::PARAM_STR );
    $query-> bindvalue(':date_injection' , $date_injection );
    $query-> bindvalue(':rappel' , $rappel );
    return $query-> execute();
}

function delete_vaccin($id, $vaccin_id){
    global $pdo;

    $sql = "DELETE FROM v5_relation WHERE user_id = :user_id AND vaccin_id = :vaccin_id";

    $query= $pdo -> prepare($sql) ;
    $query-> bindvalue(':user_id' , $id , PDO::PARAM_STR );
    $query-> bindvalue(':vaccin_id' , $vaccin_id , PDO::PARAM_STR );
    return $query-> execute();
}




function update_password($hash, $token, $user){
  global $pdo;

  $sql = "UPDATE v5_users SET mdp = :password ,token= :token, updated_at = NOW() WHERE id= :id";
  $query= $pdo -> prepare($sql) ;
  $query-> bindvalue(':password' , $hash , PDO::PARAM_STR );
  $query-> bindvalue(':token' , $token , PDO::PARAM_STR );
  $query-> bindvalue(':id' , $user['id'] , PDO::PARAM_INT );
  return $query-> execute();
}

function mdpoublienew($mail, $token){
  global $pdo;

  $sql="SELECT id FROM v5_users WHERE mail = :mail AND token = :token";
  $query= $pdo -> prepare($sql) ;
  $query-> bindValue(':mail' , $mail , PDO::PARAM_STR );
  $query-> bindValue(':token' , $token , PDO::PARAM_STR );
  $query-> execute();
  return $query -> fetch();
}


// Envoie un mail
function insert_mail($nom, $mail, $objet, $message){
    global $pdo;

    $sql = "INSERT INTO v5_contact (nom, mail, objet, message, created_at) VALUES (:nom,:mail,:objet,:message,NOW())";

    $query= $pdo -> prepare($sql) ;
    $query-> bindvalue(':nom' , $nom , PDO::PARAM_STR );
    $query-> bindvalue(':mail' , $mail , PDO::PARAM_STR );
    $query-> bindvalue(':objet' , $objet , PDO::PARAM_STR );
    $query-> bindvalue(':message' , $message , PDO::PARAM_STR );
    return $query-> execute();
}

//recherche un id
function id_search($id){
  global $pdo;

  $sql = "SELECT *
          FROM v5_users
          WHERE id = :id";
  $query = $pdo -> prepare($sql);
  $query-> bindvalue(':id' , $id , PDO::PARAM_INT );
  $query -> execute();
  return $query -> fetch();
}
// update profil user
function update_profil($id, $nom, $prenom, $mail, $sexe, $date_naissance ){
  global $pdo;

  $sql ="UPDATE v5_users SET mail = :mail , updated_at = NOW() , nom = :nom , prenom = :prenom , sexe = :sexe , date_naissance = :date_naissance WHERE id = :id";
  $query = $pdo->prepare($sql);
  $query->bindValue(':id', $id, PDO::PARAM_STR);
  $query->bindValue(':mail', $mail, PDO::PARAM_STR);
  $query->bindValue(':nom', $nom, PDO::PARAM_STR);
  $query->bindValue(':prenom', $prenom, PDO::PARAM_STR);
  $query->bindValue(':sexe', $sexe, PDO::PARAM_STR);
  $query->bindValue(':date_naissance', $date_naissance, PDO::PARAM_STR);
  return $query->execute();

}

function insert_inscription($nom, $prenom, $mail, $hash, $token ){
  global $pdo;

  $sql = "INSERT INTO `v5_users`(`nom`, `prenom`,`mail`, `token`, `mdp`, `role`, `created_at`) VALUES (:nom , :prenom , :mail , :token, :pwd1 ,'utilisateur' , now()) ";

  $query= $pdo -> prepare($sql) ;
  $query-> bindvalue(':nom' , $nom , PDO::PARAM_STR );
  $query-> bindvalue(':prenom' , $prenom , PDO::PARAM_STR );
  $query-> bindvalue(':mail' , $mail , PDO::PARAM_STR );
  $query-> bindvalue(':pwd1' , $hash , PDO::PARAM_STR );
  $query-> bindvalue(':token' , $token , PDO::PARAM_STR );
  return $query-> execute();
}

// test si le mail existe (connexion.php)
function testmail($mail) {
  global $pdo;

  $sql="SELECT * FROM v5_users WHERE mail =:mail "; //requete à modifier
  $query= $pdo -> prepare($sql) ;//preparer la requete
  $query-> bindvalue(':mail' , $mail , PDO::PARAM_STR );
  $query-> execute(); //execute la requete
  return $query -> fetch(); // $a variable retourner / fetchall() pour les requetes avec multiple array sinon fetch()

}

// Requete permettant de retourner tous les éléments d'une table + pagination
function requeteListe($nomTable,$offset,$itemPerPage){
  global $pdo;

  $sql = "SELECT * FROM $nomTable LIMIT $offset,$itemPerPage";
  $query= $pdo -> prepare($sql) ;
  $query-> execute();
  return $query -> fetchall();
}
//Fonction pour effacer une ligne dans la table
function delete($nomTable,$id){
  global $pdo;

  $sql="DELETE FROM $nomTable WHERE id=:id";
  $query = $pdo ->prepare($sql);
  $query -> bindValue(':id',$id,PDO::PARAM_INT);
  $query -> execute();
}
//Comptre le nombre de lignes dans une table
function compteItem($nomTable){
  global $pdo;

  $sql = "SELECT COUNT(id) FROM $nomTable ";
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  return $stmt->fetchColumn();
}
?>
