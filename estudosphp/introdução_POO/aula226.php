<?php
//herança(palavra reservada extends)
 
 class Humano {

    public $idade = 29;
    public $nome = "Vitu";

    public function falar(){
        echo "Olá mundo!<br>";
    }

    private function gritar(){
        echo "PHP É MT BOM <br>";
    }

    public function getGritar(){//para poder acessar o metodo gritar fora da class
        $this->gritar();
    }

    protected function falarBaixinho(){
        echo "lalalalalala<br>";
    }

    public function getBaixinho(){
        return $this->falarBaixinho();
    }

 }

 class Programador extends Humano{
    //com o extends a class Programador recebe todas as propriedades da calsse Humano.
 }

 $ze = new Humano;
 $ze->falar();
 $ze->getGritar();
 $ze->getBaixinho();

 $victor = new Programador;
 echo $victor->idade ."<br>";
 $victor->falar();
 $victor->getGritar();//acessando o metodo gritar na classe Programador pois recebeu de heranã de Humano
 $victor->getBaixinho();//acessando o metodo falarBaixinho atrás da classe programar que recebe de herança do humano