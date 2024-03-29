<?php
    require "db.php";
    $db = connexionBase();

    $id = $_GET["id"];

    $requete = $db->prepare("SELECT * FROM disc join artist on artist.artist_id = disc.artist_id WHERE disc_id=?");
    $requete->execute(array($id));

    $disc = $requete->fetch(PDO::FETCH_OBJ);

    $requete->closeCursor();
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Velvet Record</title>
        <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
        <h1 class="ps-2 pt-2">Détails</h1><br>
        <div class="d-flex align-items-center">
            <div class="px-3 element">
                <p>Title:</p> 
                <p class="shadow-none p-3 bg-secondary rounded bg-opacity-25 "><?php echo $disc->disc_title ?></p>
            </div>
            <div class="px-3 element">
                <p>Artiste:</p>
                <p class="shadow-none p-3 bg-secondary rounded bg-opacity-25"> <?= $disc->artist_name ?></p>
            </div>   
        </div>
        <div class="d-flex align-items-center">
            <div class="px-3 element">
                <p>Year:</p>
                <p class="shadow-none p-3 bg-secondary rounded bg-opacity-25"><?= $disc->disc_year ?></p>
            </div>  
            <div class="px-3 element">
                <p>Genre:</p>
                <p class="shadow-none p-3 bg-secondary rounded bg-opacity-25"><?= $disc->disc_genre ?></p>
            </div>   
        </div>
        <div class="d-flex align-items-center">
            <div class="px-3 element">
                <p>Label:</p>
                <p class="shadow-none p-3 bg-secondary rounded bg-opacity-25"><?= $disc->disc_label ?></p>
            </div>  
            <div class="px-3 element">
                <p>Price:</p> 
                <p class="shadow-none p-3 bg-secondary rounded bg-opacity-25"><?= $disc->disc_price ?></p>
            </div>   
        </div>
        <br><p class="ps-3">Picture</p>
        <img src="jaquettes/<?= $disc->disc_picture?>" alt="<?= $disc->disc_title?>" class="ps-3 disc1"><br><br>
        <div class="ps-3 pb-3">
            <a href="disc_form.php?id=<?= $disc->disc_id ?>" class="btn btn-primary"> Modifier </a>
            <a href="script_disc_delete.php?id=<?= $disc->disc_id ?>" class="btn btn-primary confirmation"> Supprimer </a>
            <a href="discs.php" class="btn btn-primary">Retour</a>
        </div>
    </body>
</html>
