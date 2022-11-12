<?php

 interface Caracteristicas {

    const nome = 'Vitu';

    public function falar(){

    }
 }

 class Humano implements Caracteristicas{

    public $idade = 29;

    public function falar(){
        echo "Olá Mundo!<br>";
    }

    public function dizerNome(){
        echo "Meu nome é " . self::nome . "<br>";
    }
 }

 $vitu = new Humano;

 $vitu->falar();