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
                function lien($url, $nom){
                    echo "<a href='".$url."'>".$nom."</a>";    
                }

                lien("https://www.reddit.com", "Reddit hug");

                echo"<br>";

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

                function complex_password($mdp){
                    if(preg_match("/^(?=.*[AZ].*[AZ])(?=.*[!@#$&*])(?=.*[0-9].*[0-9])(?=.*[az].*[az].*[az]).{8}$/",$mdp)){
                        return true;
                    }
                    else{
                        return false;
                    }
                }

                echo "<br>";

                $mdp="reeHIUH546ù*";
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