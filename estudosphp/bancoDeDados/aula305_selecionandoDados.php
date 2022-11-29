<?php
 //separando os dados em variáveis
 $host = "localhost";
 $user = "root";
 $pass = "";
 $db = "itens";

 $conn = new mysqli($host, $user, $pass, $db);


 //assunto da aula

 $q = "SELECT * FROM itens";

 $result = $conn->query($q);

 $conn->close();
//um resultado
 $item = $result->fetch_assoc();

 print_r($item);

//todos resultados

 $itens = $result->fetch_all();

 print_r($itens);