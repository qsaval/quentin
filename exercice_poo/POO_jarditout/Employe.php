<?php 
include 'classes/Magasin.class.php';
include 'classes/Employe.class.php';

$em = new Employe();
$ma = new Magasin();

$em->Nom = "Saval";
$em->Prenom = "Quentin";
$em->Date_embauche = "2020-07-25";
$em->Poste = "developpeur";
$em->Salaire = 3500;
$em->Service = "commercial";
$em->nbr_enfant = 3;
$em->age_enfant = array(16, 14, 5);

$ma->Nom = "mama mobil";
$ma->Adresse = "16 rue de la poupee qui touse";
$ma->Code_Postal = 80000;
$ma->Ville = "Amiens";
$ma->$Restaurant = "non";

$em->Magasin = $ma->Nom;

$ma->resto();
echo "<br>";
$em->cheque_noel();
echo "<br>";
$em->Anciennete();
echo "<br>";
$em->Prime();
echo "<br>";
$em->cheque_vacance();
