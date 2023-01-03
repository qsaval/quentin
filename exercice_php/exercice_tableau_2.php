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
            <?php 
                $capitales = array(
                    "Bucarest" => "Roumanie",
                    "Bruxelles" => "Belgique",
                    "Oslo" => "Norvège",
                    "Ottawa" => "Canada",
                    "Paris" => "France",
                    "Port-au-Prince" => "Haïti",
                    "Port-d'Espagne" => "Trinité-et-Tobago",
                    "Prague" => "République tchèque",
                    "Rabat" => "Maroc",
                    "Riga" => "Lettonie",
                    "Rome" => "Italie",
                    "San José" => "Costa Rica",
                    "Santiago" => "Chili",
                    "Sofia" => "Bulgarie",
                    "Alger" => "Algérie",
                    "Amsterdam" => "Pays-Bas",
                    "Andorre-la-Vieille" => "Andorre",
                    "Asuncion" => "Paraguay",
                    "Athènes" => "Grèce",
                    "Bagdad" => "Irak",
                    "Bamako" => "Mali",
                    "Berlin" => "Allemagne",
                    "Bogota" => "Colombie",
                    "Brasilia" => "Brésil",    
                    "Bratislava" => "Slovaquie",
                    "Varsovie" => "Pologne",
                    "Budapest" => "Hongrie",
                    "Le Caire" => "Egypte",
                    "Canberra" => "Australie",
                    "Caracas" => "Venezuela",
                    "Jakarta" => "Indonésie",
                    "Kiev" => "Ukraine",
                    "Kigali" => "Rwanda",
                    "Kingston" => "Jamaïque",
                    "Lima" => "Pérou",
                    "Londres" => "Royaume-Uni",
                    "Madrid" => "Espagne",
                    "Malé" => "Maldives",
                    "Mexico" => "Mexique",
                    "Minsk" => "Biélorussie",
                    "Moscou" => "Russie",
                    "Nairobi" => "Kenya",
                    "New Delhi" => "Inde",
                    "Stockholm" => "Suède",
                    "Téhéran" => "Iran",
                    "Tokyo" => "Japon",
                    "Tunis" => "Tunisie",
                    "Copenhague" => "Danemark",
                    "Dakar" => "Sénégal",
                    "Damas" => "Syrie",
                    "Dublin" => "Irlande",
                    "Erevan" => "Arménie",
                    "La Havane" => "Cuba",
                    "Helsinki" => "Finlande",
                    "Islamabad" => "Pakistan",
                    "Vienne" => "Autriche",
                    "Vilnius" => "Lituanie",
                    "Zagreb" => "Croatie"
                );
                
                /*----1----*/
                echo "Question 1:<br><br>";


                ksort($capitales);

                foreach($capitales as $cle => $valeur) { 
                    echo $cle." => ".$valeur."<br>"; 
                }

                echo "<br>";

                /*----2----*/
                echo "Question 2:<br><br>";

                asort($capitales);

                foreach($capitales as $cle1 => $valeur1) { 
                    echo $cle1." => ".$valeur1."<br>"; 
                }

                echo "<br>";

                /*----3----*/
                echo "Question 3:<br><br>";

                $n = count($capitales);
                echo "il y a ".$n." de pays <br><br>";

                /*----4----*/
                echo "Question 4:<br><br>";

                foreach ($capitales as $cle => $valeur) {
                    if(substr($cle,0,1) != "B"){
                        echo $cle.'=>'.$valeur.'<br>';
                    }
                }
                ?>
            </table> 
        </body>
    </html>