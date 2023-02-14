<?php

function getBillets($idBillet){
    $bdd= getBdd();
    $billet=$bdd->prepare('SELECT BIL_ID as id, BIL_DATE as date, BIL_TITRE as titre, BIL_CONTENU as contenu FROM T_BILLET WHERE BIL_ID =?;');
    $billet->execute(array($idBillet));

    if($billet->rowCount() == 1){
        return $billet->fetch();
    }
    else{
        throw new Exception("Aucun billet ne correspond à cet identifiant");
    }
}

function getBdd()
{
    include 'db.php';
    $bdd = ConnexionBase();

    return $bdd;
}


function getComments($idBillet): bool|PDOStatement
{
    $bdd = getBdd();
    $comments = $bdd->prepare('SELECT COM_ID as id, COM_DATE as date, COM_AUTEUR as auteur, COM_CONTENU as contenu FROM T_COMMENTAIRE WHERE BIL_ID =?');
    $comments->execute(array($idBillet));
    return $comments;
}