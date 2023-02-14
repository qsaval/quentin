<?php
include "classes/Magasin.class.php";  
class Employe{
    public $Nom;
    public $Prenom;
    public $Magasin;
    public $Date_embauche;
    public $Poste;
    public $Salaire;
    public $Service;
    public $nbr_enfant;
    public $age_enfant;

    public function Anciennete(){
        $date = new DateTime($this->$Date_embauche);
        $date1 = new DateTime(date("d/m/Y"));
        $inter = $date->diff($date1);

        echo "vous avait " . $inter . "ans d'anciennete";
    
        return $inter;
    }

    public function Prime(){
        $anc = Anciennete($this->Date_embauche);

        if(date("d/m") == "30/11"){
            $prime1 = $this->Salaire * 1.05;

            $prime2 = $this->Salaire * 1.02 * $anc;

            $prime = $prime1 + $prime2;

            echo "votre prime de " . $prime . "€ sra vaiser le 30/11 sur votre compte en banque";
        }

        echo "votre prime sera calculer dans les prochains jour";
    }

    public function magasin(){
        $mag = new Magasin();

        $m =$mag->e_magasin();

        $this->Magasin = $m; 
    }

    public function cheque_vacance(){
        $anc = Anciennete($this->Date_embauche);

        if($anc >= 1){
            echo "vous avait droit au cheque vacance";
        }
        else{
            echo "vous n'avait pas droit au cheque vacance";
        }
        
    }

    public function cheque_noel(){
        $i=0;
        $a=0;
        $b=0;
        $c=0;
        while($this->nbr_enfant >= $i){
            
            if($this->age_enfant[$i] >= 0 && $this->age_enfant[$i] <= 10){
                $a = $a + 1;
            }
            elseif($this->age_enfant[$i] >= 11 && $this->age_enfant[$i] <= 15){
                $b = $b + 1;
            }
            elseif($this->age_enfant[$i] >= 16 && $this->age_enfant[$i] <= 18){
                $c = $c + 1;
            }

            $i+=1;
        }
        if($a != 0){
            echo "pour la fin d'annee vous aurait " . $a . " cheque de 20 €";
        }

        if($b != 0){
            echo "pour la fin d'annee vous aurait " . $b . " cheque de 30 €";
        }

        if($c != 0){
            echo "pour la fin d'annee vous aurait " . $c . " cheque de 50 €";
        }
    }
}