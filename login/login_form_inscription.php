<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>inscription</h1>
    <form action="script_inscription.php" method="post">
        <label for="nom">Nom</label>
        <input type="text" name="nom"><br>

        <label for="prenom">Prenom</label>
        <input type="text" name="prenom"><br>
        
        <label for="login"> Email</label>
        <input type="text" name="login"><br>
        
        <label for="mdp">Mot de passe</label>
        <input type="password" name="mdp"><br>

        <input type="submit" value="Valider" >
        <input type="reset" value="Annuler">
        <br>
        <a href="login_form.php"> retour </a>
    </form>
</body>
</html>