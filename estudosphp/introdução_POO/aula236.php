<?php
//verificando objetos

 class Humano{

    public function falar(){
        echo "Olá<br>";
    }
 }
 $loic = "loic";
 $vitu = new Humano;

 if(is_object($vitu)){
    echo "é um objeto<br>";
 }else{
    echo "não é um objeto<br>";
 }

 if(is_object($loic)){
    echo "é um objeto<br>";
 }else{
    echo "não é um objeto<br>";
 }

 print_r(get_class($vitu));
 echo "<br>";
 if(method_exists($vitu, "falar")){
    echo "método existe<br>"; 
 }else{
   echo "metodo não existe<br>";
 }
 if(method_exists($vitu, "dasd")){
    echo "método existe<br>"; 
 }else{
   echo "metodo não existe<br>";
 }