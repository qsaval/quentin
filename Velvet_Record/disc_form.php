<?php
    require "db.php";
    $db = connexionBase();
    $requete = $db->prepare("SELECT * FROM disc join artist on artist.artist_id = disc.artist_id WHERE disc_id=?");
    $requete->execute(array($_GET["id"]));
    $disc = $requete->fetch(PDO::FETCH_OBJ);
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
        <h1>Le formulaire de modification</h1>
        <h2>Modifier un vinyle </h2>
    </div>

    <br>
    <br>

    <div class="p-3">
        <form action ="script_disc_modif.php" method="post">

            <input type="hidden" name="id" value="<?= $disc->disc_id ?>">

            <label for="titre" class="form-label"> Title</label><br>
            <input type="text" name="titre" value="<?= $disc->disc_title ?>" class="form-control">
            <br><br>

            <label for="nom" class="form-label"> Artist</label><br>
            <input type="text" name="nom"  value="<?= $disc->artist_name ?>" class="form-control">
            <br><br>

            <label for="annee" class="form-label"> Year</label><br>
            <input type="text" name="annee"  value="<?= $disc->disc_year ?>" class="form-control">
            <br><br>

            <label for="nom" class="form-label"> Genre</label><br>
            <input type="text" name="nom"  value="<?= $disc->disc_genre ?>" class="form-control">
            <br><br>

            <label for="label" class="form-label"> Label</label><br>
            <input type="text" name="label"  value="<?= $disc->disc_label ?>" class="form-control">
            <br><br>

            <label for="nom" class="form-label"> Price</label><br>
            <input type="text" name="nom"  value="<?= $disc->disc_price ?>" class="form-control">
            <br><br>

            <label for="image" class="form-label">Picture</label><br>
            <input type="file" name="image" class="form-control"> 
            <img src="jaquettes/<?= $disc->disc_title ?>.jpeg" alt="">
            <br><br>

            <input type="submit" value="Modifier" class="btn btn-primary">
            <a href="disc_detail.php"><button type="button" class="btn btn-primary">Retour</button></a>

        </form>
    </div>
</body>
</html>