<?php
//ancestralidade 
//usamos o instanceof pra verificar a ancestralidade e ele retorna um booleano. Podemos inserir essa operação em um if
 class Humano{

 }

 class Animal {

 }

 class Professor extends Humano{

 }

 $vitu = new Humano;

 $brogo = new Animal;

 $loic = new Professor;

 if($vitu instanceof Humano){
    echo "Vitu é um humano<br>";
 }else{
    echo "Vitu não é humano!<br>";
 }

 if($brogo instanceof Humano){
    echo "Brogo é um Humano<br>";
 }else{
    echo "Brogo não é humano!<br>";
 }

 if($loic instanceof Humano){
    echo "Loic é um Humano<br>";
 }else{
    echo "Loic não é humano!<br>";
 }