<?php


require_once "config/init.conf.php";
require_once "include/fonctions.inc.php";//avertis des erreurs , doit être placer en premier sinon il n'affichera pas les erreurs des lignes situées au dessus
require_once "config/bdd.conf.php";
require_once('smarty/libs/Smarty.class.php');
require_once "config/autoconnect.php";



$smarty = New smarty; //Création d'un nouvel objet smarty 
$smarty->setTemplateDir('templates/'); //Définission du dossier contenant les templates
$smarty->setCompileDir('templates_c/'); //Définission du dossier contenant le code compilé



if(isset($_SESSION)){ //Si $_SESSION existe
$smarty->assign('SESSION',$_SESSION);  //On assigne le valeur de $_SESSION à la variable smarty SESSION
}


$smarty->display('smarty/templates/smarty-header.inc.tpl'); //On affiche la template

?>