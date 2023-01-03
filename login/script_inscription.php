<?php
    session_start();

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $login = $_POST['login'];
    $mdp = $_POST['mdp'];


    function complex_password($mdp){
        $rgx = "/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/";
        
        if(preg_match($rgx, $mdp)){
            return true;
        }
        else{
            return false;
        }
    }

    function verif_email($login){
        $rgx = "/^[a-z0-9.-]+@[a-z0-9.-]{2,}.[a-z]{2,4}$/";

        if(preg_match($rgx, $login)){
            return true;
        }
        else{
            return false;
        }
    }

    $vmdp = complex_password($mdp);

    $vlogin = verif_email($login);

    if($vmdp && $vlogin){
        $_SESSION['auth'] = "ok";
    }
    else{
        unset ($_SESSION['auth']);
        header("Location: login_form_inscription.php");
        exit;
    }

    $hmdp = password_hash($mdp, PASSWORD_DEFAULT);

    require "db.php"; 
    $db = connexionBase();

    try {
        
        $requete = $db->prepare("INSERT INTO user (user_nom, user_prenom, user_mail, user_mdp) VALUES (:nom, :prenom, :login, :mdp);");
    
        $requete->bindValue(":nom", $nom, PDO::PARAM_STR);
        $requete->bindValue(":prenom", $prenom, PDO::PARAM_STR);
        $requete->bindValue(":login", $login, PDO::PARAM_STR);
        $requete->bindValue(":mdp", $hmdp, PDO::PARAM_STR);

        $requete->execute();
    
        $requete->closeCursor();
    }

    catch (Exception $e) {
        var_dump($requete->queryString);
        var_dump($requete->errorInfo());
        echo "Erreur : " . $requete->errorInfo()[2] . "<br>";
        die("Fin du script (script_inscription.php)");
    }

    header("Location: login_form_connexion.php");

    exit;
?>