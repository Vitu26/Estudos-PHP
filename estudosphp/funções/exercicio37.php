<?php
/* Função com para definir a cor de uma carro com um parâmetro default na cor vermelha, retorne a cor do carro e depois imprima tanto com o default e tanto uma cor mandada como parâmetro depois */
 function definaCorCarro($cor = "vermelho"){

    return "Cor do carro é $cor";
 }

 $carroVermelho = definaCorCarro();
 echo "$carroVermelho <br>";
 

 $carroAzul = definaCorCarro("Azul");
 echo "$carroAzul <br>";
