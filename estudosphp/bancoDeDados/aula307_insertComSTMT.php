<?php
 //separando os dados em variáveis
 $host = "localhost";
 $user = "root";
 $pass = "";
 $db = "itens";

 $conn = new mysqli($host, $user, $pass, $db);


 //assunto da aula

 $nome = "Suporte de microfone";
 $descricao = "Suporte é nove e feito na China";

 $stmt = $conn->prepared("INSERT INTO itens (nome, descricao) VALUES (?, ?)");//bind_param

 $stmt->bind_param("ss", $nome, $descricao);// s = string, i = integer, d = double

 $stmt->execute();