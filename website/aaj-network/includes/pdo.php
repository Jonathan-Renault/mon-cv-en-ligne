<?php

try {
    $pdo = new PDO('mysql:host=renaultjjfrenau.mysql.db; dbname=renaultjjfrenau', "renaultjjfrenau", "b5txx8UNSSxK", array(
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
    ));
}
catch (PDOException $e) {
    echo 'Erreur de connexion : ' . $e->getMessage();
}