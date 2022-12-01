<?php
 //separando os dados em variáveis
 $host = "localhost";
 $user = "root";
 $pass = "";
 $db = "itens";

 $conn = new mysqli($host, $user, $pass, $db);


 //assunto da aula
 $nome = "Teste";

 $stmt = $conn->prepare("DELETE FROM itens WHERE nome = ?");

 $stmt->bind_param("s", $nome)//s pois se trata de uma strind

 $stmt->execute();

 $conn->close();

