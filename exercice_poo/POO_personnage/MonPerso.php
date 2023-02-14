<?php
include 'classes/Personnage.class.php';

$p = new Personnage();
$a=$p->setNom("Lebowski");
$b=$p->setPrenom("Jeff");

echo $a . "  " . $b;

?>