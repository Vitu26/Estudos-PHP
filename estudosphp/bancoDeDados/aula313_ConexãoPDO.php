<?php
 //separando os dados em variáveis
 $host = "localhost";
 $db = "itens";
 $user = "root";
 $pass = "";


 $conn = new PDO("mysql:host=$host;dbname = $db"; $user, $pass);//instanciando o obj e conectando no banco de dados com pdo


 //assunto da aula