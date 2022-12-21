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
        <h1>Details</h1>
        <div class="d-flex align-items-center">
            <p class="ps-3">Title: <?php echo $disc->disc_title ?></p>
            <p class="ps-3">Artiste: <?= $disc->artist_name ?></p>
        </div>
        <div class="d-flex align-items-center">
            <p class="ps-3">Year: <?= $disc->disc_year ?></p>
            <p class="ps-3">Genre: <?= $disc->disc_genre ?></p>
        </div>
        <div class="d-flex align-items-center">
            <p class="ps-3">Label: <?= $disc->disc_label ?></p>
            <p class="ps-3">Price: <?= $disc->disc_price ?></p>
        </div>
        <p class="ps-3">Picture</p>
        <img src="jaquettes/<?= $disc->disc_picture?>" alt="" class="ps-3"><br><br>

        <a href="disc_form.php?id=<?= $disc->disc_id ?>"><button type="button" class="btn btn-primary"> Modifier </button></a>
        <a href="script_disc_delete.php?id=<?= $disc->disc_id ?>"><button type="button" class="btn btn-primary"> Supprimer </button></a>
        <a href="discs.php"><button type="button" class="btn btn-primary"> Retour </button></a>
    </body>
</html>
