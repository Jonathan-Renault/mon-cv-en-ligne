<?php
include('../inc/pdo.php');
include('../inc/fonctions.php');
include('inc/request.php');

$error = array();

if(!empty($_GET['id']) && is_numeric($_GET['id'])) {
  $id = $_GET['id'];} else { $id= ''; }
// Condition de soumission du formulaire
if (!empty($_POST['submitted'])){
//Protection contre les failles xss
  $role = clean('role');
//Condition pas d'erreur
if (count($error) == 0){
/*  $sql = "UPDATE v5_users SET role = :role, updated_at = NOW() WHERE id = :id";
  // preparation de la requête
  $stmt = $pdo->prepare($sql);
  // Protection injections SQL
  $stmt->bindValue(':role',$role, PDO::PARAM_STR);
  $stmt->bindValue(':id',$id, PDO::PARAM_INT);
  // execution de la requête preparé
  $stmt->execute();*/

  header("Location: liste_utilisateurs.php");
}
}else {
/*  $sql= "SELECT * FROM v5_users WHERE id=:id";
  $query = $pdo -> prepare($sql);
  $query->bindValue(':id',$id, PDO::PARAM_STR);
  $query -> execute();
  $users= $query -> fetch();*/
}

include('inc/header.php');
include('inc/sidebar.php');
?>
  <section class="content-header">
    <h1>
      Modification utilisateurs
    </h1>
    <ol class="breadcrumb">
      <li><a href="index.php"><i class="fa fa-dashboard"></i>Home</a></li>
      <li><a href="liste_utilisateurs.php"><i class="fa fa-dashboard"></i>Listes des utilisateurs</a></li>
      <li class="active">Modification utilisateurs</li>
    </ol>
  </section>
  <section class="content">
    <div class="box box-primary">
      <!-- debut du formulaire -->
      <form action="" method="POST" role="form">
        <div class="box-body">
          <!-- input du nom -->
          <div class="form-group">
          <?php
            $role = array(
              'utilisateur' => 'Utilisateur',
              'admin' => 'administrateur'
            );
          ?>
            <label>Select</label>
            <select name ="role" class="form-control">
              <?php  foreach($role as $key => $value) {?>
                <option value="<?php echo $key; ?>"<?php if(!empty($_POST['role'])) { if($_POST['role'] == $key) { echo ' selected="selected"'; } } ?>><?php echo $value; ?></option>
                <?php } ?>
            </select>
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
