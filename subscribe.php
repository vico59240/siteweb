<?php

//require_once("index.php");
require_once "config/init.conf.php";
require_once "include/fonctions.inc.php"; //avertis des erreurs , doit être placer en premier sinon il n'affichera pas les erreurs des lignes situées au dessus
require_once "config/bdd.conf.php";
include_once "include/header.inc.php";
require_once('smarty/libs/Smarty.class.php');
require_once "config/autoconnect.php";

if (!empty($_POST['user'])) { // Si $_POST['user'] existe
    //On récupère les données du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $user = $_POST['user'];
    $mdp = sha1($_POST['mdp']); // On encrypte le mot de passe à l'aide de la fonction sha1()
    $mail = $_POST['mail'];


    $requete = $bdd->prepare("INSERT INTO connexion" . "(nom,prenom,username,password,mail)" . " VALUES(:nom,:prenom,:username,:password,:mail)"); // On prépare la requête pour insérer les données dans la table connexion
    $requete->bindValue(':nom', $nom, PDO::PARAM_STR); //biendvalue : permet de verifier que les données sont bien du type attendu
    $requete->bindValue(':prenom', $prenom, PDO::PARAM_STR);
    $requete->bindValue(':username', $user, PDO::PARAM_STR); //biendvalue : permet de verifier que les données sont bien du type attendu
    $requete->bindValue(':password', $mdp, PDO::PARAM_STR);
    $requete->bindValue(':mail', $mail, PDO::PARAM_STR);
    $requete->execute(); // On éxecute la requête


    $inscription_reussie = 1;

    echo "Inscription réussie";
}


$smarty = New smarty; //Création d'un nouvel objet smarty 
$smarty->setTemplateDir('templates/'); //Définission du dossier contenant les templates
$smarty->setCompileDir('templates_c/'); //Définission du dossier contenant le code compilé


if (isset($inscription_reussie)) { // Si $inscription_reussie existe
    $smarty->assign('inscription_reussie', $inscription_reussie); //On affecte la valeur de $inscription_reussie à la variable smarty inscription_reussie
}
if (isset($_SESSION)) {  // Si $_SESSION existe
    $smarty->assign('SESSION', $_SESSION); //On affecte la valeur de $_SESSION à la variable smarty SESSION
}


$smarty->display('smarty/templates/smarty-subscribe.tpl'); // On affiche la template
?>




