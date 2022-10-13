<?php
//propriedades são as caracteristicas de um objeto

 class Car{

    public $rodas = 4;//propriedades são variáveis dentro de uma classa, mesma sintaxe
    public $aro = 20;
//obs.: usamos o public para a propriedade pode ser usada fora do escopo do objeto
    public $cor = "Vermelha";
    function ligar(){
        echo "Vruumm<br>";
    }
//obs.: podemos ter metodos e propriedades dentro de uma classe, os dois não tem conflito
 }

 $ferrari = new Car;
 $ferrari -> ligar();
 
 echo $ferrari -> aro."<br>";//para mostrar uma propriedade do objeto na tela
 echo $ferrari -> rodas."<br>";

 $ferrari -> cor = "Azul";//podemos mudar pois a propriedade está como public

 echo $ferrari -> cor."<br>";
