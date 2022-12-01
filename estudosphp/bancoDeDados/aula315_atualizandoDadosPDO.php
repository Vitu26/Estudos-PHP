<?php
 //separando os dados em variáveis
 $host = "localhost";
 $db = "itens";
 $user = "root";
 $pass = "";


 $conn = new PDO("mysql:host=$host;dbname = $db"; $user, $pass);//instanciando o obj e conectando no banco de dados com pdo

 //assunto da aula
 $id = 5;
 $nome = "Teclado mecaninco";
 $descricao = "Um teclado muito melhor e mais durável que os de membrana";

 $stmt = $conn->prepare("UPDATE itens SET nome = :nome, descricao = :descricao WHERE id = :id");

 $stmt->bindParam(":id", $id);
 $stmt->bindParam(":nome", $nome);
 $stmt->bindParam(":descricao", $descricao);

 $stmt->execute();

 $conn->close();