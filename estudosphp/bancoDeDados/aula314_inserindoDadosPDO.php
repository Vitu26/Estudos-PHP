<?php
 //separando os dados em variáveis
 $host = "localhost";
 $db = "itens";
 $user = "root";
 $pass = "";


 $conn = new PDO("mysql:host=$host;dbname = $db"; $user, $pass);//instanciando o obj e conectando no banco de dados com pdo

 //assunto da aula

 $stmt = $conn->prepare("INSERT INTO itens(nome, descricao) VALUES(:nome, :descricao)");

 $nome = "Suporte Monitor"
 $descricao = "Suporta e segura vário monitorires";

 $stmt->bindParam(":nome", $nome);
 $stmt->bindParam(":descricao", $descricao
);

 $stmt->execute();
 