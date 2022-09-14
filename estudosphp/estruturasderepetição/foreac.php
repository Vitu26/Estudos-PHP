<?php
//foreach
$nomes = ["Vitu", "Racu", "Bari", "Alibs"];

foreach($nomes as $nome){
    echo "O nome do indice atual é $nome <br>";
    if($nome == "Bari"){
        echo "Opa<br>";
    }
}

print_r($nomes);
?>