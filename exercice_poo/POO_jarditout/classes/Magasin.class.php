<?php
class Magasin{
    public $Nom;
    public $Adresse;
    public $Code_Postal;
    public $Ville;
    public $Restaurant;

    public function e_magasin(){
        return $this->Nom;
    }

    public function resto(){
        if($this->$Restaurant == "non"){
            echo "vous aurait des ticker resto pour mange le midi";
        }
    }
}
?>