<!DOCTYPE html>
<html>
    <head>
        <?php

            $txt = isset($_GET["t"])?$_GET["t"]: "Sem tamanho";
            $tam = isset($_GET["tam"])?$_GET["tam"]: "12pt";
            $cor = isset($_GET["cor"])?$_GET["cor"]: "#000000";

        ?>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="css.css">
        <style>
            span.texto{
                font-size: <?php echo $tam; ?>;
                color: <?php echo $cor; ?>;
            }
        </style>
        <title></title>
    </head>
    <body>
        <div>
            <?php

              echo "<span class='texto'>$txt</span>";  
              

            ?>
        </div>
    </body>
</hmtl>