<?php
//separando os dados em variáveis
 $host = "localhost";
 $user = "root";
 $pass = "";
 $db = "itens";


//conectando com o mysqli
 $conn = new mysqli("localhost", "root", "", "itens");
 $conn = new mysqli($host, $user, $pass, $db);