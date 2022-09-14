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

                $d = isset($_GET["ds"])?$_GET["ds"]:0;
                
                switch($d) {
                    case 2:
                    case 3:
                    case 4:
                    case 5:
                    case 6:
                        echo "Levanta e vai estudar";
                        break;
                    case 1:
                    case 7:
                        echo "Pode dormir que é final de semana!";
                        break;
                    default:
                    echo "Não é um dia válido seu fdp!";
                }
            ?>
            <a href="aula10-2.html">Voltar</a>
        </div>
    </body>
</hmtl>