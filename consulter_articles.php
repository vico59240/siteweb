<?php
//require_once('index.php');
require_once "config/init.conf.php";
require_once "include/fonctions.inc.php";//avertis des erreurs , doit être placer en premier sinon il n'affichera pas les erreurs des lignes situées au dessus
require_once "config/bdd.conf.php";
include_once "include/header.inc.php";
require_once('smarty/libs/Smarty.class.php');
require_once "config/autoconnect.php";




if(isset($_GET['page']))    //Si $_GET['page'] existe
{
    $page = $_GET['page'];  // Alors on assigne à $page la valeur $_GET['page']
    
}


$nombre_article = compter_article($bdd); //On assaigne le résultat de la fonction compter_article() à $nombre_article
$nombre_article_page = nombre_article_page; //On assaigne la valeur de la constante nombre_article_page à $nombre_article_page

if(isset($_POST['nombre_article_page'])) //Si $_POST['nombre_article_page'] existe
{    
   $nombre_article_page = $_POST['nombre_article_page'];  //On assaigne la valeur de $_POST['nombre_article_page'] à $nombre_article_page
}
elseif(isset($_GET['nombre_article_page'])) //Si $_POST['nombre_article_page'] existe
{
    $nombre_article_page = $_GET['nombre_article_page']; //On assaigne la valeur de $_GET['nombre_article_page'] à $nombre_article_page
}

if(isset($_POST['commenter']) and isset($_POST['commentaire']) and $_POST['username'] != "" and $_POST['adresse_mail'] != "")  //Si les champs POST du formulaire sont complet
{
    $requete = $bdd->prepare("INSERT INTO commentaires" .  "(commentaire,id_user,id_article)" . " VALUES(:commentaire,:id_user,:id_article)");  //on prépare la requête
    $requete->bindValue(':commentaire',$_POST['commentaire'],PDO::PARAM_STR); //biendvalue : permet de verifier que les données sont bien du type attendu
    $requete->bindValue(':id_user',$_SESSION['id_user'],PDO::PARAM_STR);
    $requete->bindValue(':id_article',$_POST['id_article'],PDO::PARAM_STR);
    $requete->execute();  //On exécute la requête
}


$index = index($page,$nombre_article_page); //On assaigne le résultat de la fonction index($page,$nombre_article_page) à $index
$nombre_page = $nombre_article/$nombre_article_page;  //On assaigne le résultat de $nombre_article/$nombre_article_page à $nombre_page




if(isset($_POST['id_article_supprimer']))  //Si $_POST['id_article_supprimer'] existe
{
    $requete = $bdd->prepare("DELETE FROM articles WHERE id = :id_article_supprimer");         //On prépare la requête pour supprimer l'artcile
    $requete->bindValue(':id_article_supprimer',$_POST['id_article_supprimer'],PDO::PARAM_INT);
    $requete->execute(); //On exécute la requête
    
    $requete = $bdd->prepare("DELETE FROM commentaires WHERE id_article = :id_article_supprimer");  //On prépare la requête pour supprimer les commentaires liés à l'article
    $requete->bindValue(':id_article_supprimer',$_POST['id_article_supprimer'],PDO::PARAM_INT);
    $requete->execute(); //On exécute la requête
}




 
$requete = $bdd->prepare("SELECT * FROM articles LEFT JOIN commentaires ON articles.id=commentaires.id_article LIMIT :index, :nombre_article_page"); //On prépare la requête pour selectionner les articles
$requete->bindValue(':index',$index,PDO::PARAM_INT);
$requete->bindValue(':nombre_article_page',$nombre_article_page,PDO::PARAM_INT);
$requete->execute(); //On exécute la requête
$donnees = $requete->fetchAll(); //on affecte à $donnees le résultat de la requête
   


$smarty = New smarty;  //Création d'un nouvel objet smarty 
$smarty->setTemplateDir('templates/'); //Définission du dossier contenant les templates
$smarty->setCompileDir('templates_c/'); //Définission du dossier contenant le code compilé
$smarty->assign('index',$index); //On assigne la valeur de $index à la variable smarty index
$smarty->assign('nombre_page',$nombre_page); //On assigne la valeur de $nombre_page à la variable smarty nombre_page
$smarty->assign('nombre_article',$nombre_article); //On assigne la valeur de $nombre_article à la variable smarty nombre_article
$smarty->assign('nombre_article_page',$nombre_article_page); //On assigne la valeur de $nombre_article_page à la variable smarty nombre_article_page
$smarty->assign('donnees',$donnees); //On assigne la valeur de $donnees à la variable smarty donnees
$smarty->assign('post',$_POST); //On assigne la valeur de $_POST à la variable smarty post

if(isset($_SESSION))  //Si $_SESSION existe
{
$smarty->assign('SESSION',$_SESSION); //On assigne la valeur de $_SESSION à la variable smarty SESSION
}

$smarty->display('smarty/templates/smarty-consulter_articles.tpl'); // On affiche la template



?>
