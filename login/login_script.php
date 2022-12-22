<?php
    session_start();

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
        echo "retaper votre adresse mail et votre mot de passe";
        exit;
    }

    if ( isset($_SESSION["auth"]) ) 
    {
        header("Location:login_site.php");
        exit;
    }
?>