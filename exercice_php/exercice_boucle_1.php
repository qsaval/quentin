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
                for($a=0;$a<151 ;$a++){
                    if($a&3==0){
                        echo $a;
                    }
                }
            ?> 
        </body>
    </html>