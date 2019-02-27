<?php
session_start();
$_SESSION = array();
session_destroy();
header('location: index.php');








?>
<!-- Il y a une div class container autour du body  -->














<?php include('inc/footer.php'); ?>
