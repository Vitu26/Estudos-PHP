<?php

 session_start();//determina que as sessions estão inicializadas nessa página

//  print_r($_SESSION);
 $_SESSION['nome'] = "Vitu";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Olá session</h1>
</body>
</html>