<?php
//verificando classes

 class Humano {

    public $idade;
    public $nome;
    public $profissao;

    public function falar(){}
    public function andar(){}
    
 }

 if(class_exists("Humano")){
    echo "Essa classe existe<br>";
 }

 if(class_exists("Cachorro")){
    echo "Essa classe existe<br>";
 }else{
    echo "Essa classe não existe<br>";
 }

 print_r(get_class_vars("Humano"));
 print_r(get_class_methods("Humano"));