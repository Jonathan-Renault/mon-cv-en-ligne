<?php
include('../inc/pdo.php');
include('../inc/fonctions.php');

$error = array();

if(!empty($_GET['id']) && is_numeric($_GET['id'])) {
	$id = $_GET['id'];} else { $id= ''; }
// Condition de soumission du formulaire
  if (!empty($_POST['submitted'])){
    //Protection contre les failles xss
    $nom = clean('nom');
    //error index indefini
    $injections = clean('frequences_injections');
    //Recupere la valeur de radio et verification
    if (isset($_POST['optionsRadios'])){
    $obligatoire = $_POST['optionsRadios'];
    }else {
      $error['optionsRadios'] = 'Veuillez selectionnez une option';
    }
    //Verification contenu
    if (!empty($nom)){
      if(strlen($nom) < 3 ) {
        $error['nom'] = 'Le nom du vaccin est trop court. (minimum 3 caractères)';
      } elseif(strlen($nom) > 40) {
        $error['nom'] = 'Le nom du vaccin est trop long.  (maximum 40 caractères)';
      }
    }else {
      $error['nom'] = 'Veuillez entrer le nom du vaccin';
    }
    //verification content
    if (!empty($injections)){
        if(strlen($injections) < 3 ) {
    $error['frequences_injections'] = 'Votre contenu est trop court. (minimum 3 caractères)';
        }
    } else {
      $error['frequences_injections'] = 'Veuillez renseigner un contenu';
    }
    //Condition pas d'erreur
  if (count($error) == 0){
/*    $sql = "UPDATE v5_vaccin SET nom = :nom, obligatoire = :obligatoire, frequences_injections = :injections, updated_at = NOW() WHERE id = :id";
    // preparation de la requête
    $stmt = $pdo->prepare($sql);
    // Protection injections SQL
    $stmt->bindValue(':nom',$nom, PDO::PARAM_STR);
    $stmt->bindValue(':obligatoire',$obligatoire, PDO::PARAM_INT);
    $stmt->bindValue(':injections',$injections, PDO::PARAM_STR);
    $stmt->bindValue(':id',$id, PDO::PARAM_INT);
    // execution de la requête preparé
    $stmt->execute();*/

    header("Location: liste_vaccin.php");
  }
}else {
  $sql= "SELECT * FROM v5_vaccin WHERE id=:id";
  $query = $pdo -> prepare($sql);
  $query->bindValue(':id',$id, PDO::PARAM_STR);
  $query -> execute();
  $vaccin = $query -> fetch();

  if(!empty($vaccin)) {
    $nom = $vaccin['nom'];
    $injections = $vaccin['frequences_injections'];
  }
}

include('inc/header.php');
include('inc/sidebar.php');
?>
  <section class="content-header">
    <h1>
      <?php if(!empty($_POST['nom'])) { echo $_POST['nom']; } else { echo $nom; } ?>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
      <li><a href="liste_vaccin.php"><i class="fa fa-dashboard"></i>liste des vaccins</a></li>
      <li class="active"><?php if(!empty($_POST['nom'])) { echo $_POST['nom']; } else { echo $nom; } ?></li>
    </ol>
    </section>
    <section class="content">
    <div class="box box-primary">
      <!-- debut du formulaire -->
      <form action="" method="POST" role="form">
        <div class="box-body">
          <!-- input du nom -->
          <div class="form-group">
            <label for="nom">Nom du vaccin</label>
            <input type="text" class="form-control" id="inputError" name="nom" placeholder="Nom du vaccin..." value="<?php if(!empty($_POST['nom'])) { echo $_POST['nom']; } else { echo $nom; } ?>">
            <span class="error"><?php spanError($error,'nom');?></span>
          </div>
          <!-- input Fréquence d'injection -->
          <div class="form-group">
            <label for="frequences_injections">Fréquence d'injection : </label>
                  <span class="error"><?php if(!empty($error['frequences_injections'])) { echo $error['frequences_injections']; } ?></span>
                      <textarea name="frequences_injections" class="form-control" rows="5" id="content"><?php if(!empty($_POST['frequences_injections'])) { echo $_POST['frequences_injections']; } else { echo $injections; } ?></textarea>
                     </div>

          <div class="form-group">
            <div class="radio">
              <label>
                <input type="radio" name="optionsRadios" id="optionsRadios1" value="1"
                <?php
                if (empty($_POST['submitted'])){
                    if ($vaccin['obligatoire'] == 1) {
                      echo 'checked ="checked"';
                    }
                  }
                 ?>
                >
                Obligatoire
              </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="optionsRadios" id="optionsRadios2" value="0"
                <?php if (empty($_POST['submitted'])){
                  if ($vaccin['obligatoire'] == 0) {
                      echo 'checked ="checked"';
                    }}
                    ?>>
                Optionnel
              </label>
            </div>
            <span class="error"><?php spanError($error,'optionsRadios');?></span>
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <input type="submit" name="submitted" class="btn btn-primary" value="Sauvegarder" >
        </div>
      </form>
    </div>
  </section>
</div>

<?php
  include('inc/footer.php');
