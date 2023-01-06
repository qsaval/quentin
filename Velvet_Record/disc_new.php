<?php
    include "db.php";
    $db = connexionBase();

    $requete = $db->query("SELECT * FROM artist");
    $tableau = $requete->fetchAll(PDO::FETCH_OBJ);
    $requete->closeCursor();

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Velvet Record</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

    <div class="p-2">        
        <h1>Le formulaire d'ajout</h1>
        <h2>Ajouter un vinyle</h2>
    </div>

    <div class="p-3">
        <form action ="script_disc_ajout.php" method="post" >

            <label for="titre" class="form-label">Title</label><br>
            <input type="text" name="titre" placeholder="Enter title" class="form-control">
            <br><br>

            <label for="nom" class="form-label">Artist</label><br>
            <select class="form-select" name="nom">
                <?php foreach($tableau as $artist):?>

                    <option value="<?= $artist->artist_id ?>"> <?= $artist-> artist_name ?> </option>

                <?php endforeach; ?>
            </select>
            <br><br>

            <label for="annee" class="form-label">Year</label><br>
            <input type="text" name="annee" placeholder="Enter year" class="form-control">
            <br><br>

            <label for="genre" class="form-label">Genre</label><br>
            <input type="text" name="genre" placeholder="Enter genre (Rock, Pop, Prog...)" class="form-control">
            <br><br>

            <label for="label" class="form-label">Label</label><br>
            <input type="text" name="label" placeholder="Enter label (EMI, Warner, PolyGram, Universale...)" class="form-control">
            <br><br>

            <label for="price" class="form-label">Price</label><br>
            <input type="text" name="price" class="form-control" placeholder="Enter le prix">
            <br><br>

            <label for="image" class="form-label">Picture</label><br>
            <input type="file" name="image"> 
            <br><br>

            <input type="submit" value="Ajouter" class="btn btn-primary">
            <a href="discs.php"><button type="button" class="btn btn-primary">Retour</button></a>
        </form>
    </div>
</body>