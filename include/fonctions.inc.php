<?php

function print_r2($mavariable) {
    //Affiche l'ensemble des données d'une variable

    echo '<pre>';
    print_r($mavariable);
    echo '</pre>';
    return true;
}

function notification($message, $result) {
    $_SESSION['notification']['message'] = $message; //Assigne la valeur de $message à $_SESSION['notification']['message']
    $_SESSION['notification']['result'] = $result; //Assigne la valeur de $result à $_SESSION['notification']['result']

    return true;
}

function compter_article($bdd) {
//Renvoie le nombre d'article stocker dans la table articles
    $requete = $bdd->prepare('SELECT COUNT(*) as total FROM articles WHERE publie= :publie');
    $requete->bindValue(":publie", 1);
    $requete->execute();
    $donnees = $requete->fetchall();
    $nb_article = $donnees['0']['0'];
    return $nb_article;
}

function index($page, $nombre_article) {
    //Renvois l'index en fonction de la page sur laquelle on se trouve et le nombre de page
    $index = (($page - 1) * $nombre_article);
    return $index;
}

function modifier_article($bdd, $id, $texte, $titre) {
    //Modifie l'article dans la bdd
    $requete = $bdd->prepare("UPDATE articles SET texte = :texte , titre = :titre WHERE id= :id_article_modifier"); // On prépare la requête de mise à jour de la table
    $requete->bindValue(':texte', $_POST['texte_article'], PDO::PARAM_STR);
    $requete->bindValue(':titre', $_POST['titre_article'], PDO::PARAM_STR);
    $requete->bindValue(':id_article_modifier', $_POST['id_article_modifier'], PDO::PARAM_INT);
    $requete->execute(); // On execute la requete 
}
