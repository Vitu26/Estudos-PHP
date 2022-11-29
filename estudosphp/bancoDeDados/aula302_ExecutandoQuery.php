<?php
//separando os dados em variáveis
 $host = "localhost";
 $user = "root";
 $pass = "";
 $db = "itens";


//conectando com o mysqli
 $conn = new mysqli("localhost", "root", "", "itens");
 $conn = new mysqli($host, $user, $pass, $db);

//executando query
 $sql = "SELECT * FROM itens";

 //metodo query
 $result = $conn->query($sql);

 print_r($result);

 $conn->close();