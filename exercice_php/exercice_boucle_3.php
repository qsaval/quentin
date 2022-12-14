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
                    <tr> 
                        <?php
                            echo "<th> 1 </th>"; 
                            for($a=0; $a<13; $a++){
                                echo "<td>".$a."</td>";
                            }
                        ?>
                    </tr>
                    <tr>
                        <?php
                            $b;
                            echo "<th> 2 </th>";
                            for($a=0; $a<=12; $a++){
                                $b=$a*2;
                                echo "<td>".$b."</td>";
                            }
                        ?>
                    </tr>
                    <tr>
                        <?php
                            $b;
                            echo "<th> 3 </th>";
                            for($a=0; $a<=12; $a++){
                                $b=$a*3;
                                echo "<td>".$b."</td>";
                            }
                        ?>
                    </tr>
                    <tr>
                        <?php
                            $b;
                            echo "<th> 4 </th>";
                            for($a=0; $a<=12; $a++){
                                $b=$a*4;
                                echo "<td>".$b."</td>";
                            }
                        ?>
                    </tr>
                    <tr>
                        <?php
                            $b;
                            echo "<th> 5 </th>";
                            for($a=0; $a<=12; $a++){
                                $b=$a*5;
                                echo "<td>".$b."</td>";
                            }
                        ?>
                    </tr>
                    <tr>
                        <?php
                            $b;
                            echo "<th> 6 </th>";
                            for($a=0; $a<=12; $a++){
                                $b=$a*6;
                                echo "<td>".$b."</td>";
                            }
                        ?>
                    </tr>
                    <tr>
                        <?php
                            $b;
                            echo "<th> 7 </th>";
                            for($a=0; $a<=12; $a++){
                                $b=$a*7;
                                echo "<td>".$b."</td>";
                            }
                        ?>
                    </tr>
                    <tr>
                        <?php
                            $b;
                            echo "<th> 8 </th>";
                            for($a=0; $a<=12; $a++){
                                $b=$a*8;
                                echo "<td>".$b."</td>";
                            }
                        ?>
                    </tr>
                    <tr>
                        <?php
                            $b;
                            echo "<th> 9 </th>";
                            for($a=0; $a<=12; $a++){
                                $b=$a*9;
                                echo "<td>".$b."</td>";
                            }
                        ?>
                    </tr>
                    <tr>
                        <?php
                            $b;
                            echo "<th> 10 </th>";
                            for($a=0; $a<=12; $a++){
                                $b=$a*10;
                                echo "<td>".$b."</td>";
                            }
                        ?>
                    </tr>
                    <tr>
                        <?php
                            $b;
                            echo "<th> 11 </th>";
                            for($a=0; $a<=12; $a++){
                                $b=$a*11;
                                echo "<td>".$b."</td>";
                            }
                        ?>
                    </tr>
                    <tr>
                        <?php
                            $b;
                            echo "<th> 12 </th>";
                            for($a=0; $a<=12; $a++){
                                $b=$a*12;
                                echo "<td>".$b."</td>";
                            }
                        ?>
                    </tr>
                </tbody>
            </table>
        </body>
    </html>