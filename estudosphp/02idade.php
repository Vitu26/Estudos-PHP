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

                $nome = isset($_GET["nome"])?$_GET["nome"]:"[não informado]";
                $sexo = isset($_GET["sexo"])?$_GET["sexo"]:0;
                $ano = isset($_GET["ano"])?$_GET["ano"]:"[sem sexo]";
                $idade = date("Y") - $ano;
                echo "$nome é $sexo e tem $idade anos!";
                
            ?>
            <a href="02exercicio.html">Voltar</a>
        </div>
    </body>
</hmtl>