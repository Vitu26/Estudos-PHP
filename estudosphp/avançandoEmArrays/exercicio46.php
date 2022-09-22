<?php


$arr = [
    [1 , 2, 3, 4, ],
    [5 , 6, 7, 8],
    [9, 10, 11, 12]
];

//loop no arry externo
for($i = 0; $i < count($arr); $i ++){

//imprimindo array
    echo "Imprimindo array interno:  " . ($i + 1) . "<br>";

//imprimindo o array interno

    for($j = 0; $j < count($arr[$i]); $j++){
        
        echo $arr[$i][$j] . "<br>";
    }

}
print_r($arr);
echo "<br>";

