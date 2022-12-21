<?php
    if (isset($_POST['titre']) && $_POST['titre'] != "") {
        $titre = $_POST['titre'];
    }
    else {
        $titre = Null;
    }

    if (isset($_POST['nom']) && $_POST['nom'] != "") {
        $nom = $_POST['nom'];
    }
    else {
        $nom = Null;
    }

    if (isset($_POST['annee']) && $_POST['annee'] != "") {
        $annee = $_POST['annee'];
    }
    else {
        $annee = Null;
    }

    if (isset($_POST['genre']) && $_POST['genre'] != "") {
        $genre = $_POST['genre'];
    }
    else {
        $genre = Null;
    }

    if (isset($_POST['label']) && $_POST['label'] != "") {
        $label = $_POST['label'];
    }
    else {
        $label = Null;
    }

    if (isset($_POST['price']) && $_POST['price'] != "") {
        $price = $_POST['price'];
    }
    else {
        $price = Null;
    }

    if (isset($_POST['image']) && $_POST['image'] != "") {
        $image = $_POST['image'];
    }
    else {
        $image = Null;
    }


    if ($titre == Null || $nom == Null || $annee == null || $genre == null || $label == null || $price == null || $image == null) {
        header("Location: disc_new.php");
        exit;
    }


    require "db.php"; 
    $db = connexionBase();


    try {
        
        $requete = $db->prepare("INSERT INTO disc (disc_title, disc_year, disc_picture, disc_label, disc_genre, disc_price) VALUES (:titre, :annee, :image, :label, :genre, :price, :nom);");
    
        $requete->bindValue(":titre", $titre, PDO::PARAM_STR);
        $requete->bindValue(":annee", $annee, PDO::PARAM_STR);
        $requete->bindValue(":image", $image, PDO::PARAM_STR);
        $requete->bindValue(":label", $label, PDO::PARAM_STR);
        $requete->bindValue(":genre", $genre, PDO::PARAM_STR);
        $requete->bindValue(":price", $price, PDO::PARAM_STR);
        $requete->bindValue(":nom", $nom, PDO::PARAM_STR);

        $requete->execute();
    
        $requete->closeCursor();
    }

    catch (Exception $e) {
        var_dump($requete->queryString);
        var_dump($requete->errorInfo());
        echo "Erreur : " . $requete->errorInfo()[2] . "<br>";
        die("Fin du script (script_disc_ajout.php)");
    }

    header("Location: discs.php");

    exit;
?>