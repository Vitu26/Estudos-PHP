<?php
//objeto $this

 class Animal {

    public $nome;

    function escolherNome($nome){
        $this->nome = $nome;
    }

    function latir(){
        return "au au<br>";
    }

    function latirForte(){
        return strtoupper($this->latir());
    }
 }

 $brogo = new Animal;

 echo "O nome do animal é: $brogo->nome <br>";

 $brogo -> escolherNome("Brogo");

 echo "O nome do animal é: $brogo->nome <br>";

 echo $brogo -> latir();

 echo $brogo -> latirForte();