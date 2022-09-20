<?php
/* Trasnformar um array em string */

$lista = ["arroz", "trigo", "pão", "queijo", "presunto"];

function transformaString($arr){

    $str = "Você levou os seguintes itens: ";

    for($i = 0; $i < count($arr); $i++){
        if($i + 1 == count($arr)){
            $str .= "$arr[$i].";
        }else {
            $str .= "$arr[$i], "; 
        }
    }
    return $str;

}

echo transformaString($lista);
