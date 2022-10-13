<?php


 class Pessoa{

    public $nome;
    public $idade;

    function andar($m){
        echo "Andou $m metros <br>";
    }
 }

 $loic = new Pessoa;

 $loic -> nome = "Vitu";
 $loic -> idade = 29;

 echo "O nome dele é $loic->nome e tem $loic->idade anos<br>";

 $loic -> andar(500);