<!DOCTYPE html>

<?php 
require_once "config/init.conf.php";
require_once "include/fonctions.inc.php";//avertis des erreurs , doit être placer en premier sinon il n'affichera pas les erreurs des lignes situées au dessus
require_once "config/bdd.conf.php";
include_once "include/header.inc.php";
require_once('smarty/libs/Smarty.class.php');
require_once "config/autoconnect.php";
//require_once('index.php');



if(!empty($_POST['submit'])) // Si $_POST['submit'] existe
{

  

$titre = $_POST['titre']; //On affecte la valeur de $_POST['titre'] à $titre
$texte = $_POST['texte']; //On affecte la valeur de $_POST['texte'] à $texte
$publie = $_POST['publie']; //On affecte la valeur de $_POST['publie'] à $publie
$date = date('Y-m-d'); //On affecte le resultat de la fonction date() à $date

$image = $_FILES['image']; //On affecte la valeur de $_FILES['image'] à $image


$requete = $bdd->prepare("INSERT INTO articles" .  "(titre,texte,publie,date)" . " VALUES(:titre,:texte,:publie,:date)"); //On prépare la requête pour ajouter l'article
$requete->bindValue(':titre',$titre,PDO::PARAM_STR); //biendvalue : permet de verifier que les données sont bien du type attendu
$requete->bindValue(':texte',$texte,PDO::PARAM_STR);
$requete->bindValue(':publie',$publie,PDO::PARAM_INT);
$requete->bindValue(':date',$date,PDO::PARAM_STR_CHAR);
$requete->execute(); //On execute la requête
$result = "success";
$id = $bdd->lastInsertId(); // récupère le dernier id stocker dans la base


if($image['error']==0)
{
    move_uploaded_file($_FILES['image']['tmp_name'], 'img/' . $id . '.jpg');    //renome l'image avant dans l'enregistrer dans le dossier img -> on renomme par question de sécurité. 
}


}

$smarty = New smarty;  //On crée un nouvel objet smarty
$smarty->setTemplateDir('templates/');//Définission du dossier contenant les templates
$smarty->setCompileDir('templates_c/');//Définission du dossier contenant le code compilé


$smarty->display('smarty/templates/smarty-ajouter_articles.tpl');// On affiche la template

?>


  


