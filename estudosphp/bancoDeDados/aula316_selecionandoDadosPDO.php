<?php
 //separando os dados em variáveis
 $host = "localhost";
 $db = "itens";
 $user = "root";
 $pass = "";


 $conn = new PDO("mysql:host=$host;dbname = $db"; $user, $pass);//instanciando o obj e conectando no banco de dados com pdo

 //assunto da aula
 $id = 5;

 $stmt = $conn->prepare("SELECT * FROM itens WHERE id > :id");

 $stmt->bindParam(":id", $id);

 $stmt->execute();

 $data = $stmt->fetch();

 print_r($data);//para ver oq é retornado em data

 $itens = $stmt->fetchAll();

 print_r($itens);//para ver oq é retornado