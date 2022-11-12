<?php

 abstract class Teste{

    public static function testandoClasse(){
        echo "este método é de uma classe abstrata <br>";
    }

    abstract public function testantoAbs();
 }

 Teste::testandoClasse();

 class Nova extends Teste{
    public function testantoAbs(){
        echo "Teste método abstrato <br>";
    }
 }

 $n = new Nova;
 $n->testandoAbs();