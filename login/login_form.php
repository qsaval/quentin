<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="login_script.php" method="post">
        <label for="login"> Email :</label>
        <input type="text" name="login"><br>
        <label for="mdp">Mot de passe :</label>
        <input type="password" name="mdp"><br>

        <input type="submit" value="Valider" >
        <input type="reset" value="Annuler"><br>
        <a href="login_form_inscription.php"> inscription </a>
    </form>
</body>
</html>