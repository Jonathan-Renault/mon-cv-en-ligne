<?php
include('../inc/pdo.php');
include('../inc/fonctions.php');
include('inc/request.php');

require '../vendor/autoload.php';

use JasonGrimes\Paginator;
// Gestion de la pagination
$nomTable = 'v5_vaccin';
$nbreItem = compteItem($nomTable);
$itemPerPage = 15;
$page = 1;
$offset = 0;
$urlPattern = '?page=(:num)';

if (!empty($_GET['page']) && is_numeric($_GET['page'])) {
    $page = $_GET['page'];
    $offset = $page * $itemPerPage - $itemPerPage;
}

$paginator = new Paginator($nbreItem, $itemPerPage, $page, $urlPattern);
//Requete de la liste des Vaccins
$tableauVaccins =  requeteListe($nomTable,$offset,$itemPerPage);

include('inc/header.php');
include('inc/sidebar.php');
?>
<!-- Breadcrumb  -->
<section class="content-header">
  <h1>
    Liste des vaccins
  </h1>
  <ol class="breadcrumb">
    <li><a href="index.php"><i class="fa fa-dashboard"></i>Home</a></li>
    <li class="active">Liste des vaccins</li>
  </ol>
</section>
<!-- Tableau de la liste des Vaccins -->
<div class="box">
  <div class="box-header"></div>
    <div class="box-body table-responsive no-padding">
      <table class="table table-hover">
        <tr>
          <th>Id</th>
          <th>Nom</th>
          <th>Obligatoire</th>
          <th>Fréquences d'injection</th>
          <th>Date de création</th>
          <th>Date de modification</th>
          <th>Modifier</th>
          <th>Supprimer</th>
        </tr>
      <?php foreach ($tableauVaccins as $tableauVaccin) {
          echo '<tr><td>'.$tableauVaccin['id']
          .'</td><td>'
          .$tableauVaccin['nom']
          .'</td>';
          if ($tableauVaccin['obligatoire'] == 1){
             echo '<td><span class="label label-success"</span>Obligatoire</td>';
          } else {
            echo '<td><span class="label label-danger">Non obligatoire</span></td>';
          }
          echo '</td><td>'
          .$tableauVaccin['frequences_injections']
          .'</td><td>';
          changementDate($tableauVaccin,'created_at');
          echo '</td><td>';
          changementDate($tableauVaccin,'updated_at');
          echo '</td><td><a href="modification_vaccins.php?id='.$tableauVaccin['id'].'" class=".btn.btn-app"><i class="fa fa-edit"></i></a></td>
          <td>
            <a href="delete_vaccins.php?id='.$tableauVaccin['id'].'" onclick="return confirm(\'Êtes-vous sûr de vouloir supprimer?\')">
              <i class="fa fa-trash-o"></i>
            </a>
          </td></tr>';
      }?>
    </table>
    <!--Affichage de la Pagination -->
    <?php echo $paginator ?>
  </div>
  <!-- /.box-body -->
</div>

<?php
  include('inc/footer.php');
