<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="css.css">
        <title></title>
    </head>
    <body>
        <div>
            <?php
            //Fazendo contadores
            //Contagem até 10
                $c = 1;
                while ($c <= 10) {
                    echo "$c<br>";
                    $c ++;
                }
                echo "<br> Outra contagem <br><br>";
                // Contagem regressiva até 1
                $d = 10;
                while ($d >= 1) {
                    echo "$d<br>";
                    $d --;
                }

            ?>
        </div>
    </body>
</hmtl>