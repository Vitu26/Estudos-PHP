<?php

$a = 10;

while( $a > 0 ) {
    // loop continue
    if( $a == 5 || $a == 7){
        echo "Pulou a execução $a <br>";
        $a--;
        continue;
    }

    //break
    if( $a == 2){
        echo "Paramos no $a <br>";
        break;
    }
    echo "executando o meu loop  $a <br>";


    $a--;
}

?>