<?php
//constantes em objetos

 class Humano{//objeto
//declaração da constante no objeto    
    public const OLHOS = 2;
    public const BRACOS = 2;
    public const PERNAS = 2;
    function mostrarConstante(){
        echo self::BRACOS ."<br>";
    }
 }

 $vitu = new Humano;//new objeto 
//imprimindo as contantes na tela
 echo $vitu ::OLHOS."<br>";
 echo $vitu ::PERNAS."<br>"; 
 echo $vitu ::BRACOS."<br>";

 $vitu->mostrarConstante(); //chamando o metodo mostrar constante