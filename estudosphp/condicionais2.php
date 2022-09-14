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
                $no1 = isset($_GET["n1"])?$_GET["n1"]:0;
                $no2 = isset($_GET["n2"])?$_GET["n2"]:0;
                $media = ($no1 + $no2)/2;

                if($media >= 7){
                    echo "A média entre $no1 e $no2 é $media <br>";
                    echo "A situação do aluno é APROVADO";
                } else {
                    echo "A média entre $no1 e $no2 é $media<br>";
                    echo "A situação do aluno é REPROVADO";
                }


            ?>
            <br>
            <a href="condicionais2.html">Voltar</a>
        </div>
    </body>
</hmtl>