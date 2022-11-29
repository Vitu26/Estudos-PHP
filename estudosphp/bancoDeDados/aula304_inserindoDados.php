<?php
//separando os dados em variáveis
 $host = "localhost";
 $user = "root";
 $pass = "";
 $db = "itens";

 $conn = new mysqli($host, $user, $pass, $db);


//assunto da aula
 $table = "itens";
 $nome = "Xícara";
 $descrição = "É uma xícara usada por de cor rosa";


 $q = "INSERT INTO $table (nome, descrição) VALUES ('$nome', '$descrição')";

 $conn->query($q);

 $conn->close();