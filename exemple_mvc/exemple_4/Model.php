<?php

function getBillets()
{
    $bdd = getBdd();
    $billets = $bdd->query('SELECT BIL_ID as id, BIL_DATE as date, BIL_TITRE as titre, BIL_CONTENU as contenu FROM T_BILLET order by BIL_ID desc');
    return $billets;
}

function getBdd()
{
    $bdd = new PDO("mysql:host=localhost;dbname=billet;charset=utf8",'saval','1234',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    return $bdd;
}
