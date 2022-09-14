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

                $a = isset($_GET["ano"])?$_GET["ano"]:1990;
                $i = date("Y") - $a;
                echo "Você nasceu em $a e terá $i anos";

                if( $i >= 16 && $i < 18 ){
                    echo "Você não é obrigado a votar";
                }elseif ( $i >= 18 && $i < 60){
                    echo "<br>Você é obrigado a votar";
                    echo "<br>Você pode dirigir";
                }elseif ($i >= 85){
                    echo "<br>Você não é obrigado a votar";
                    echo "<br>Você não pode dirigir";
                } else {
                    echo "<br>Você não é obrigado a votar";
                    echo "<br>Você não pode dirigir";
                }

            ?>
        </div>
    </body>
</hmtl>