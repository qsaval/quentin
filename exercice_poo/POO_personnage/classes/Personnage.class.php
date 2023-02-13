<?php
class Personnage{
    private $nom;
    private $prenom;
    private $age;
    private $sexe;

    public function setNom($nom){
        $this->nom = $nom;

        echo $this->nom . "<br>";
    }

    public function setPrenom($prenom){
        $this->prenom = $prenom;
        
        echo $this->prenom;
    }

}
?>