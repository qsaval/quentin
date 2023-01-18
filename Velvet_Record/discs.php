<?php
    include "db.php";
    $db = connexionBase();

    $requete = $db->query("SELECT * FROM disc join artist on artist.artist_id = disc.artist_id");
    $tableau = $requete->fetchAll(PDO::FETCH_OBJ);
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
    <header class="d-flex justify-content-between">
        <h1>Liste des disque (<?php echo count($tableau) ?>)</h1>
        <a href="disc_new.php"><button type="button" class="btn btn-primary">Ajouter</button></a>
    </header>
    <div class="d-inline p-2 " >    
        <?php foreach ($tableau as $disc): ?>
            <div class="d-flex ">
                <div class="d-inline p-2" >
                    <img src="jaquettes/<?= $disc->disc_picture ?>" alt="<?= $disc->disc_title?>">
                </div>
                <div>
                    <h2 class="fs-2"><?= $disc->disc_title ?></h2>
                    <h3 class="fs-4"><?= $disc->artist_name ?></h3>
                    <p><b>Label:</b> <?= $disc->disc_label ?></p>
                    <p><b>Year:</b> <?= $disc->disc_year ?></p>
                    <p><b>Genre:</b> <?= $disc->disc_genre ?></p>

                    <a href="disc_detail.php?id=<?= $disc->disc_id ?>"><button type="button" class="btn btn-primary">Détail</button></a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>   
</body>
</html>