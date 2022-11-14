<?php

 if($_GET['nome']){
    $nome = $_GET['nome'];
    $idade = $_GET['idade'];
 } else {
    $nome = "Padrão";
    $idade = "Padrão"
 }
 //print_r($_GET);//vai receber os dados no array
 
?>

<h1>O seu nome é <?= $nome ?>, e você tem <?= $idade ?> anos.</h1>
