<?php

$nome = 'Vitu';
//contador; condição; incremento/decrementdo

for($i = 0; $i < 20; $i++){

    if ($i == 4){
        echo "$nome <br>";
    }
    if( $i == 8){
        break;
    }
    echo "Testando o for $i<br>";

}

?>