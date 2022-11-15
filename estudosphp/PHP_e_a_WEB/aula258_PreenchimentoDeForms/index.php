<?php
//Preenchendo formulário com dados que vem do backend(esse exemplo é utilizado dados mocados)
 $usuario = [

    'nome' => 'Vitu',
    'idade' => 29,
    'profissao' => 'Programador'

 ];//estrutura de dados mocados
 if($usuario){
    $nome = $usuario['nome'];
    $idade = $usuario['idade'];
    $profissao = $usuario['profissao'];
 }
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
    <form action="">
        <div>
            <input type="text" name="nome" placeholder="digite seu nome" value="<?= $nome ?>">
        </div>
        <div>
            <input type="text" name="idade" placeholder="digite seu nome" value="<?= $idade ?>">
        </div>
        <div>
            <input type="text" name="profissao" placeholder="digite seu nome" value="<?= $profissao ?>">
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>
</html>