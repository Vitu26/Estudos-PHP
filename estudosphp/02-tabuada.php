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
              $n = isset($_GET["num"])?$_GET["num"]:1;
              for($c = 1; $c <= 10; $c++){
                $r = $n * $c;
                echo "$n x Sc = $r";
              }

              

            ?>
            <br>
            <a href="tabuada.php">Voltar</a>
                
            
        </div>
    </body>
</hmtl>