<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="css.css">
        <title></title>
    </head>
    <body>
        <div>
            <form action="aula11-2.php" method="get" >
                <?php
                $u = 1;
                while($u <= 5){
                    echo "Valor $u: <input type='number' name='v$u' max='100' min='0' value='0'><br>";
                    $u++;
                }
                ?>
                <input type="submit" value="Enviar">
            </form>
        </div>
    </body>
</hmtl>