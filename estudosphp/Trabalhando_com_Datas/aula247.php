<?php
 //alterando fuso-horário

 date_default_timezone_set('America/Sao_Paulo');

 $data = new DateTime();

 print_r($data);
 echo "<br>";