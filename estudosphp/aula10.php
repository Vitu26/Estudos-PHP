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

                $n = isset($_GET["num"])?$_GET["num"]:0;
                $o = isset($_GET["oper"])?$_GET["oper"]:1;

                switch($o) {
                    case 1 :
                        $b = $n * 2;
                        break;
                    case 2 :
                        $b = $n ^ 3;
                        break;
                    case 3 :
                         $b = sqrt($n);
                }
                echo "O resultado da operação solicitada foi $b";
            ?>
            <a href="aula10.html">Voltar</a>
        </div>
    </body>
</hmtl>