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
                <thead>
                    <?php 
                        echo "<th> x </th>";
                        for($a=0; $a<13; $a++){
                            echo "<th>".$a."</th>";
                        }
                    ?>   
                </thead> 
                <tbody>
                    <tr>
                        <?php 
                            $b=0;
                            echo "<th> 0 </th>";
                            for($a=0; $a<13; $a++){
                                echo "<td>".$b."</td>";
                            }
                        ?>
                    </tr>
                    <?php
                        for($c=1; $c<=12; $c++){
                            echo "<tr>"; 
                            echo "<th>".$c."</th>"; 
                            for($a=0; $a<13; $a++){
                                $b=$c*$a;
                                echo "<td>".$b."</td>";
                            }
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
        </body>
    </html>