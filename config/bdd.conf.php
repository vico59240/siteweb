<?php

//Connexion à la base de données

try {
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
    $bdd->exec("set names utf8");
    // $bdd->setAttribute(, $bdd);
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

