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
            <table>
                <?php 
                    $annee=array();
                    $annee[0]="janvier";
                    $annee[1]="fevrier";
                    $annee[2]="mars";
                    $annee[3]="avril";
                    $annee[4]="mai";
                    $annee[5]="juin";
                    $annee[6]="juillet";
                    $annee[7]="aout";
                    $annee[8]="septembre";
                    $annee[9]="octobre";
                    $annee[10]="novembre";
                    $annee[11]="decembre";
                
                    $annee["janvier"]=31;
                    $annee["fevrier"]=29;
                    $annee["mars"]=31;
                    $annee["avril"]=30;
                    $annee["mai"]=31;
                    $annee["juin"]=30;
                    $annee["juillet"]=31;
                    $annee["aout"]=31;
                    $annee["septembre"]=30;
                    $annee["octobre"]=31;
                    $annee["novembre"]=30;
                    $annee["decembre"]=31;

                    for($i=0; $i<=11; $i++){
                        echo "<tr>";
                        echo "<td>".$annee[$i]."</td>";
                        echo "<td>".$annee[$annee[$i]]."</td>";
                        echo "</tr>";
                    }
                ?>
            </table> 
        </body>
    </html>