<?php
//declarando metodos

 class Pessoa{//uma classe chamada Pessoa com 2 metodos

    function falar(){ //metodo é uma função dentro de uma classe, mesma coisa de uma função sozinha
        echo "Olá, eu sou um objeto!<br>";
    }

    function somar($x, $y){//metodo é uma função dentro de uma classe, mesma coisa de uma função sozinha
        echo $x + $y . "<br>";
    }

 }
 $vitu = new Pessoa; //primeiro objeto
 $loic = new Pessoa;//segundo objeto

 $vitu -> falar();
 $loic -> falar();
 $vitu -> somar(2, 5);
 $loic -> somar(4, 12);

 //objeto podem usar o mesmo metodos de forma iguais ou diferentes
