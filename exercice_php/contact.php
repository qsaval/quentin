<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <form action="exercicef.php" method="get" name="contact" id="contact" >
            <legend>
                <h1>Vos coordonnées :</h1>
            </legend>
            <br>
            <span>
                *Ces zones sont obligatoires pour envoyer le formulaire
            </span>
            <br>
            <label for="societe">
                Société :
            </label>
            <input type="text" name="societe" id="societe"/>
            <span>
                *
            </span>
            <br>
            <label for="personne">
                Personne à contacter :
            </label>
            <input type="text" name="personne" id="personne"/>
            <span>
                *
            </span>
            <br>
            <label for="adresse">
                Adresse de l'entreprise :
            </label>
            <input type="text" name="adresse"/>
            <br>
            <label for="code">
                Code postal :
            </label>
            <input type="text" name="code" id="code"/>
            <span>
                *
            </span>
            <br>
            <label for="ville">
                Ville :
            </label>
            <input type="text" name="ville" id="ville"/>
            <span>
                *
            </span>
            <br>
            <label for="email">
                E-mail :
            </label>
            <input type="email" name="email"/>
            <span>
                *
            </span>
            <br>
            <label for="telephone">
                Téléphone :
            </label>
            <input type="text" name="telephone"/>
            <br>
            <label for="projet">
                Sélectionnez l'environnement technique du projet :
            </label>
            <select name="projet">
                <option>
                    Choisissez
                </option>
                <option>
                    Access
                </option>
                <option>
                    Java
                </option>
                <option>
                    Delphi
                </option>
                <option>
                    Windev
                </option>
                <option>
                    Visual Basic
                </option>
                <option>
                    ubmit
                </option>
                <option>
                    Power Builder
                </option>
                <option>
                    Internet
                </option>
                <option>
                    Intranet
                </option>
                <option>
                    Window NT
                </option>
                <option>
                    Unix
                </option>
                <option>
                    SQL Server
                </option>
                <option>
                    Oracle
                </option>
                <option>
                    Autres...
                </option>
            </select>
            <textarea></textarea>
            <br>
            <input type="submit" name="envoi" value="Envoyer">
            <input type="reset" value="Effacer">
        </form>
        <script src="exercice.js"></script>
    </body>
</html>
