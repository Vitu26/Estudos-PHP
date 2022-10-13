<?php
//crie uma classe cachorro e execute o metodo e andar em novas isntancias da classe
 class Cachorro {

    function latir(){
        echo "Esse cachorro late muito alto<br>";
    }
    function andar(){
        echo "Nós passeamos muito com o Brogo<br>";
    }
    function distancia($m){//metedodo com um parametro
        echo "O brogo andou $m metros<br>";
    }

 }
 $brogo = new Cachorro;

 $brogo -> latir();
 $brogo -> andar();
 $brogo -> distancia(500);