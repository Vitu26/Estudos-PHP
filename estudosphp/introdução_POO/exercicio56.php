<?php

 class Humano{
   
   public $maos = 2;//propriedade
   public $pernas = 2;//propriedade

   public function falar(){//metodo
    echo "Olá, eu sou um humano!<br>";
   }

 }
 class Professor extends Humano {//classe filha da classe humano
   public $disciplina = "Babaquice";//propriedade


   public function estaLecionando(){//metodo
        echo "O professor está lecionado aula da $this->disciplina <br>";
   }
 }
 

 $vitu = new Humano;

 echo "$vitu->maos <br>";
 echo "$vitu->pernas <br>";
 $vitu->falar();

 $joao = new Professor;
 echo "$joao->pernas<br>";
 echo "$joao->bracos<br>"
 $joão->estaLecionando();
 $joao->falar();
 