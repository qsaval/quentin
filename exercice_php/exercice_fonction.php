<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
            <?php 
                /*----1----*/
                function lien($url, $nom){
                    echo "<a href='".$url."'>".$nom."</a>";    
                }

                lien("https://www.reddit.com", "Reddit hug");

                echo"<br>";

                /*----2----*/
                function somme($tab){
                    $a=0;
                    for($i=0; $i<count($tab); $i++){
                        $a=$a+$tab[$i];
                    }
                    return $a;
                }

                $tab = array(4, 3, 8, 2);
                $resultat = somme($tab);
                echo "le resultat est ".$resultat;

                /*----3----*/
                function complex_password($mdp){
                    $rgx = "/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/";
                    if(preg_match($rgx, $mdp)){
                        return true;
                    }
                    else{
                        return false;
                    }
                }

                echo "<br>";

                $mdp="sfdFDEF5466";
                $resultat2= complex_password($mdp);

                if($resultat2){
                    echo "vrai";
                }
                else{
                    echo "faux";
                }

            ?> 
        </body>
    </html>