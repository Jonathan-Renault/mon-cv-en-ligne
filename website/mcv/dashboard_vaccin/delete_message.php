<?php
include('../inc/pdo.php');
include('../inc/fonctions.php');
include('inc/request.php');

$nomTable = 'v5_contact';

if(!empty($_GET['id']) && is_numeric($_GET['id'])) {
  $id = $_GET['id'];
  /*delete($nomTable,$id);*/
  header("Location: index.php");
  }
