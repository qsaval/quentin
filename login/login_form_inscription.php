<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <h1 class="m-2">Inscription</h1>
    <form action="script_inscription.php" method="post">
        <div class="m-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" name="nom" class="form-control"><br>

            <label for="prenom" class="form-label">Prenom</label>
            <input type="text" name="prenom" class="form-control"><br>
        
            <label for="login" class="form-label"> Email</label>
            <input type="text" name="login" class="form-control"><br>
        
            <label for="mdp" class="form-label">Mot de passe</label>
            <input type="password" name="mdp"class="form-control">
        </div>

        <div class="m-3">
            <input type="submit" value="Valider" class="btn btn-secondary">
            <input type="reset" value="Annuler" class="btn btn-secondary">
            <br><br>
            <a href="login_form_connexion.php" class="btn btn-secondary"> Retour </a>
        </div>
    </form>
</body>
</html>