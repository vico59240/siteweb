<?php

session_start();

if(isset($_COOKIE['sid'])) // Si $_COOKIE['sid'] existe
{
   
    $sid = $_COOKIE['sid'];
    $sth=$bdd->prepare("SELECT * FROM connexion WHERE sid = ?"); //On prepare la requete pour aller selectionner les données utilisateur
    $sth->execute(array($sid)); // Onexecute la requete
    $donnees = $sth->fetchAll();
    
    //On affecte aux variables $_SESSION les données utilisateur
    if(!empty($donnees))
    {
        if($sid == $donnees['0']['sid'])
        {
            $connecte = true;
        $_SESSION['user']=$donnees['0']['username'];
        $_SESSION['mdp']=$donnees['0']['password'];
        $_SESSION['nom'] = $donnees['0']['Nom'];
        $_SESSION['prenom'] = $donnees['0']['Prenom'];
        $_SESSION['mail'] = $donnees['0']['mail'];
        $_SESSION['id_user'] = $donnees['0']['id'];
        $_SESSION['statut']=1;
        }
    }
}

?>