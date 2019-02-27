<?php
include('inc/fonctions.php');
include('inc/pdo.php');
include('dashboard_vaccin/inc/request.php');

// titre de la page
$title = 'profil';

// si la personne est connecté
if(is_logged()){

// requete on selectionne tout de la table v5_users de la personne connecté selon son id
    $id = $_SESSION['user']['id'];
    $profil = id_search($id);

    if(!empty($profil)) {

      $listVaccinObligatoires= listVaccinObligatoires();

// Requete des vaccins non obligatoires

      $vaccinNonObligatoires = vaccinNonObligatoires($id);



// Requete des vaccins obligatoires

      $vaccinObligatoires= vaccinObligatoires($id);

      $tableauId = array();
      foreach ($vaccinObligatoires as $v) {
            $tableauId[] = $v['vaccin_id'];
      }


    }else {
        header("Location: 404.php");
    }
}
else {
    header("Location: 404.php");
}

// creation d'un lien Modifier qui emmene vers une nouvelle page ou il ya un formulaire avec nom prenom etc pour modifier les informations


include('inc/header.php'); ?>

<div class="modif_vaccin">
    <h2>Description</h2>
    <div class="form table_vaccin">
        <ul class="description">
              <li>  Nom : <?php echo $profil['nom'] ;?> </li>
              <li>  Prénom : <?php echo $profil['prenom'] ; ?></li>
              <li>  Sexe : <?php echo $profil['sexe'] ; ?> </li>
              <li>  Mail :  <?php echo $profil['mail'] ; ?> </li>
              <li>  Date de Naissance : <?php echo $profil['date_naissance'] ;?></li>

        </ul>
        <div class="button_div">
          <a class="button" href="modifier_profil.php">Modifier profil</a>
        </div>
    </div>
</div>


<div class="button_div bla">

  <a class="button center" href="modif_vaccin.php">Ajouts et retraits de vaccins</a>
</div>

<?php if ($vaccin_id = $tableauId) {
  ?><div class="modif_vaccin">

    <h2>Vaccins obligatoires effectués</h2>
      <table class="form table_vaccin">

        <tr>
          <th class="parent"><p class="enfant">Nom</p></th>
          <th class="parent"><p class="enfant">Fréquence d'injections</p></th>
          <th class="parent"><p class="enfant">Rappel</p></th>
        </tr>

        <?php foreach ($vaccinObligatoires as $vaccinObligatoire):
          ?> <tr> <?php
          echo '<td class="parent"><p class="enfant">' .$vaccinObligatoire['nom']. '</p></td>';

            // if(in_array($vaccinObligatoire['id'],$tableauId)) {
            //   echo '<td class="parent"><img class="enfant" src="assets/image/icon_fait.svg" alt="Fait"></td>';
            // } else {
            //   echo '<td class="parent"><img class="enfant" src="assets/image/icon_non_fait.svg" alt="Fait"></td>';
            // }

          echo '<td class="parent"><p class="enfant">' .$vaccinObligatoire['frequences_injections']. '</p></td>';
          echo '<td class="parent"><p class="enfant">' .$vaccinObligatoire['rappel']. '</p></td>';
             ?> </tr> <?php
            endforeach; ?>
      </table>

      <h2>Vaccins non obligatoires effectués</h2>
      <table class="form table_vaccin">

        <tr>
          <th class="parent"><p class="enfant">Nom</p></th>
          <th class="parent"><p class="enfant">Fréquence d'injections</p></th>
          <th class="parent"><p class="enfant">Rappel</p></th>
        </tr>

        <?php foreach ($vaccinNonObligatoires as $vaccinNonObligatoire):
          ?> <tr> <?php
              echo '<td class="parent"><p class="enfant">' .$vaccinNonObligatoire['nom']. '</p></td>';
              echo '<td class="parent"><p class="enfant">' .$vaccinNonObligatoire['frequences_injections']. '</p></td>';
              echo '<td class="parent"><p class="enfant">' .$vaccinNonObligatoire['rappel']. '</p></td>';
         ?> </tr> <?php
        endforeach; ?>

      </table>

      <div class="button_div">
        <a class="button" href="index.php">Retour</a>
      </div>
  </div><?php

} ?>

<?php include('inc/footer.php');
