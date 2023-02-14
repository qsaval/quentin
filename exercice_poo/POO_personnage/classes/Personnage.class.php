<?php
class Personnage{
    private $nom;
    private $prenom;
    private $age;
    private $sexe;

    public function setNom($nom){
        $this->nom = $nom;

        return $this->nom;
    }

    public function setPrenom($prenom){
        $this->prenom = $prenom;
        
        return $this->prenom;
    }

}
?>