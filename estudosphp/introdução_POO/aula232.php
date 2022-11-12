<?php 
 //construtores

 class Car{
    public $portas;
    public $cor;
    public $marca;

    function __construct($portas, $cor, $marca) {

        $this->portas = $portas;
        $this->cor = $cor;
        $this->marca = $marca;
    }
 }

 $ferrari = new Car(4, "vermelha", "ferrari");

 echo "O carro é da marca $ferrari->marca, é da cor $ferrari->cor e tem $ferrari->portas portas!<br>";

 $bmw = new Car(4, "verde", "BMW");

 echo "O carro é da marca $bmw->marca, é da cor $bmw->cor e tem $bmw->portas portas!<br>";
