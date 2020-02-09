
<?php
//include('index.php');

require_once "config/init.conf.php";
require_once "include/fonctions.inc.php";//avertis des erreurs , doit être placer en premier sinon il n'affichera pas les erreurs des lignes situées au dessus
require_once "config/bdd.conf.php";
require_once "config/autoconnect.php";
include_once "include/header.inc.php";
require_once('smarty/libs/Smarty.class.php');

if(!empty($_POST['user'])) //Si $_POST['user'] existe
{  
$user = $_POST['user'];
$mdp = sha1($_POST['mdp']);


$sth = $bdd->prepare('SELECT * FROM connexion WHERE username = ? AND password = ?'); //On prépare la requête pour selectionner les données de l'utilisateur
$sth->execute(array($user, $mdp)); //On execute la requete 
$donnees = $sth->fetchAll(); //On assigne à $donnees le resultat de la requete

if (!empty($donnees)) //Si $donnees existe
{
    if ($donnees['0']['username'] == $user and $donnees['0']['password'] == $mdp) //On vérifie que les identifiants de connexion renseigné sont les memes que ceux stocker dans la base
    {   
        // On stock les données récupérer 
        $mail = $donnees['0']['mail'];
        $nom = $donnees['0']['Nom'];
        $prenom = $donnees['0']['Prenom'];
        $user = $donnees['0']['username'];
        $id_user = $donnees['0']['id'];
        
        // On affecte les données utilisateur aux variables $_SESSION
        $_SESSION['user'] = $user; 
        $_SESSION['mdp'] = $mdp;
        $_SESSION['mail'] = $mail;
        $_SESSION['nom'] = $nom;
        $_SESSION['prenom'] = $prenom;
        $_SESSION['id_user'] = $id_user;
        $_SESSION['statut'] = 1;

        echo "Connexion reussie"; //On afficje "Connexion reussie"
       

        


        if(isset($_POST['stay_connected'])) //Si $_POST['stay_connected'] existe
        {
            $sid = $donnees['0']['id'] . time();      //on crée le sid

            $sth = $bdd->prepare('UPDATE connexion SET sid = ? WHERE id=?'); // On prépare la requete pour mettre à jour le sid dans la base
            $sth->execute(array($sid, $donnees['0']['id'])); //On execute la requete 

            setcookie('sid',$sid,time()+3600); // On utilise setcookie() afin de créer un cookie sur la machine client
        }

        exit();

        }

}
    

    else
    {
    echo "Nom de compte ou mot de passe incorect"; // Si les identifiants ne sont pas correct on affiche un message d'erreur
    }
}


$smarty = New smarty; //On crée un objet smarty
$smarty->setTemplateDir('templates/');//Définission du dossier contenant les templates
$smarty->setCompileDir('templates_c/');//Définission du dossier contenant le code compilé

if(isset($_SESSION)) //Si $_SESSION existe 
{
$smarty->assign('SESSION',$_SESSION); //On assigne la valeur de $_SESSION à la variable smarty SESSION
}
if(isset($donnees)){ //Si $donnees existe
$smarty->assign('donnees',$donnees); //On assigne la valeur de $donnees à la variable smarty donnees
}
//** un-comment the following line to show the debug console
//$smarty->debugging = true;

$smarty->display('smarty/templates/smarty-connection.tpl'); // On affiche la template
 ?>

