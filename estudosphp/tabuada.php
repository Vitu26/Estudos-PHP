<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="css.css">
        <title></title>
    </head>
    <body>
        <div>
            <form action="02-tabuada.php" method="get" >
                <select name="num">
                    <?php 
                        for($i = 1; $i <= 10; $i ++){
                            echo "<option>$i</option>";
                        }
                    ?>
                </select>
                <input type="submit" value="Enviar">
            </form>
        </div>
    </body>
</hmtl>