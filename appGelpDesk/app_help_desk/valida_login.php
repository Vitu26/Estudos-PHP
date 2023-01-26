<?php

    session_start();

    
    //variavel que verifica se a autenticação foi realizada
     $usuario_autenticado = false;


    //usuários
    $usuarios_app = [
        ['email' => 'adm@teste.com', 'senha' => '123456'],
        ['email' => 'user@teste.com', 'senha' => 'abcde'],
        ['email' => 'vitu@teste.com', 'senha' => 'vitu23'],
    ];

    foreach($usuarios_app as $user){

        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $usuario_autenticado = true;
        }
    }

    if($usuario_autenticado){
        echo 'Usuário autenticado';
        $_SESSION['autenticado'] = 'SIM';
        header('Location: home.php');
    }else{
        $_SESSION['autenticado'] = 'NÃO';
        header('Location: index.php?login=erro');//força o redirecionamento de onde ele está para onde queremos, ou seja, se entrar nessa condição nós vamos forçar o redirecionamento para onde queremos
    }

    
?>