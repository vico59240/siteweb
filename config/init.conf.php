<?php

error_reporting(E_ALL); //affiche toutes les erreurs

ini_set("display_errors", 1);

define('nombre_article_page', 1); // On affecte la valeur 1 à la constante nombre_article_page

date_default_timezone_set('Europe/Paris'); //On déclare notre timezone



if (!empty($_GET['p'])) {
    $page = $_GET['p'];
} else {

    $_GET['p'] = 1;
    $page = $_GET['p'];
}