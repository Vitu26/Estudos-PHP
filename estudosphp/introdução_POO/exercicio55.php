<?php

 class Carro{

    public $cor;
    public $tetoSolar;
    public $velocidadeMaxima;

    function setVelocidadeMaxima($vel){
            $this->velocidadeMaxima = $vel;

    }

    function getVelocidadeMaxima(){
        echo "A velocidade máxima do carro é: $this->velocidadeMaxima km/h <br>";
    }



 }

 $fordKa = new Carro;

 $fordKa->cor = "Prata";
 $fordKa->tetoSolar = false;
 $fordKa->setVelocidadeMaxima(180);

 $fordKa->getVelocidadeMaxima();

 $ferrari = new Carro;

 $ferrari->cor = "Vermelho";
 $ferrari->tetoSolar = true;
 $ferrari->setVelocidadeMaxima(380);

 $ferrari->getVelocidadeMaxima();
