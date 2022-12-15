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
                $date1 = new DateTime("14-07-2019");
                echo $date1;

                /*----2---- 03/02/2023*/
                $now=date("Y-m-d");
                $fin = new DateTime("2023-02-03");
                $interval = $now ->diff($fin);
                echo $interval;
                
                /*----4----*/
                $datePattern = "/^\d{4}\-(0?[1-9]|1[012])\-(0?[1-9]|[12][0-9]|3[01])$/";
                $date = "2019-17-32";
                
                if (preg_match($datePattern, $date))
                {
                    echo "Date ".$date." valide.<br>";
                }
                else
                {
                    echo "Date ".$date." erronée.<br>";
                }

                echo "<br>";

                /*----5----*/
                echo date("H:i");

                echo "<br>";

                /*----6----*/
                

                /*----7----*/
                
                
            ?> 
        </body>
    </html>