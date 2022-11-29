<?php
 //separando os dados em variáveis
 $host = "localhost";
 $user = "root";
 $pass = "";
 $db = "itens";

 $conn = new mysqli($host, $user, $pass, $db);


 //assunto da aula
$id = 4;

//fazendo prepare
$stmt = $conn->prepare("SELECT * FROM itens WHERE id > ?");

$stmt->bind_param("i", $id); //tratando o id no bind_param e ele é um intereiro(integer)

//executando 
$stmt->execute();

//criando uma nova variável para pegar os resultados
$result = $stmt->get_result();

$data = $result->fetch_all();//onde recebe tudo em forma de array

print_r($data);