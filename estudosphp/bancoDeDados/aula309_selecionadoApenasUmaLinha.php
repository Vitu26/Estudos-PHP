<?php
 //separando os dados em variáveis
 $host = "localhost";
 $user = "root";
 $pass = "";
 $db = "itens";

 $conn = new mysqli($host, $user, $pass, $db);


 //assunto da aula
 $id = 6;

 //fazendo o prepare
 $stmt = $conn->prepare("SELECT * FROM itens WHERE id = ?");

 $stmt->bind_param("i", $id);

 $stmt->ececute();

 $result = $stmt->get_result();

 $item = $result->fetch_row();//pega uma linha só

 print_r($item);

 $conn->close();//fechando a conexão