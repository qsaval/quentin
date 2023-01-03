<?php
    $login = $_POST['login'];
    $mdp = $_POST['mdp'];

    include "db.php";
    $db = connexionBase();

    $requete = $db->query("SELECT * FROM user");
    $tableau = $requete->fetchAll(PDO::FETCH_OBJ);
    $requete->closeCursor();

    foreach ($tableau as $user){
        $bmail = $user->user_mail;
        $bmdp = $user->user_mdp;
         
        if($login == $bmail && password_verify($mdp, $bmdp)){
            header("Location: login_site.php");
            exit;
        }
    }
    header("Location: login_form.php");
    exit;
?>