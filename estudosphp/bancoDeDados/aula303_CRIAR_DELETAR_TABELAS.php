<?php
//separando os dados em variáveis
 $host = "localhost";
 $user = "root";
 $pass = "";
 $db = "cursophp";


//conectando com o mysqli
 $conn = new mysqli("localhost", "root", "", "cursophp");
 $conn = new mysqli($host, $user, $pass, $db);

//assunto da aula
//  $q = "CREATE TABLE teste (nome2 VARCHAR(100), sobrenome VARCHAR(100))";

//  $conn->query($q);

//  $conn->close();
 //tabela teste sendo criada com o mysqli

 $q = "DROP TABLE teste";

 $conn->query($q);

 $conn->close();

 //para deltar uma tabela com mysqli