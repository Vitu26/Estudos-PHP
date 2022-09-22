<?php
//criando mts variáveis com o list;

$pessoa = ["Vitu", "Programador", 29, "castanhos"];

print_r($pessoa);
echo "<br>";

list($nome, $profissão, $idade, $corDosOlhos) = $pessoa;

echo "$nome <br>";
echo "$profissão <br>";
echo "$idade <br>";
echo "$corDosOlhos <br>";



