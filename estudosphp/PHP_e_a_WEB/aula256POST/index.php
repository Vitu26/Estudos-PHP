<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="cadastro.php" method="post">
        <div>
            <input type="text" name="marca" placeholder="Marca do carro">
        </div>
        <div>
            <input type="text" name="preço" placeholder="Preço do carro">
        </div>
        <div>
            <input type="checkbox" name="opicionais[]" value="teto solar">
        </div>
        <div>
            <input type="checkbox" name="opicionais[]" value="Película">
        </div>
        <div>
            <input type="checkbox" name="opicionais[]" value="diração hidraulica">
        </div>
        <div>
            <input type="checkbox" name="opicionais[]" value="blindado">
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>
</html>