<?php
 //criando funções

 function mostrarNome($nome, $idade){
    echo '<h2>Nome é: <h2>' . $nome;
    echo "<h2>Idade é: $idade<h2>";
 }

 function calculadora($n1, $n2){
    echo $n1 + $n2;
    echo '<br>';
    echo $n1 - $n2;
    echo '<br>';
    echo $n1 * $n2;
    echo '<br>';
    echo $n1 / $n2;
    echo '<br>';

 }
 mostrarNome('Victor', 30);
 print_r(calculadora(15, 5));

 function verdade(){
    return true;
 }

 function retornaString(){
    return 'Victor';
 }

 echo retornaString();

 $variavel = verdade();


 

?>