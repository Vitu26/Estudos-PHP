<?php
 //classe anônima

 $pessoa = new Class(){
    public $nome = "Vitu";

    public function dizerNome(){
        echo "Meu nome é $this->nome<br>";
    }
 };

 echo $pessoa->nome . "<br>";

 $pessoa->dizerNome();