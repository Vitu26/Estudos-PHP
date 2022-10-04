<?php
//fazer um array associativo que e imprimir ele em ordem decrescente de valores e imprimir em uma lista em html
 $arr = [
    "God of war" => 9.5,
    "Red dead redemption 2" => 10,
    "Red dead redemption 2" => 8,
    "The Witcher 3" => 10,
    "Super mario" => 8,
    "Naruto" => 7,
    "the witcher" => 3,

 ];

//  asort($arr);
//  print_r($arr);
//  echo "<br>";
//  arsort($arr);
//  print_r($arr);
//  echo "<br>";
//  ksort($arr);
//  print_r($arr);
//  echo "<br>";
//  krsort($arr);
//  print_r($arr);
//  echo "<br>";
arsort($arr);

 ?>

 <h1>Ranking de Melhores games de Vitu:</h1>
 <ol>
   <?php foreach($arr as $games => $pontuacao): ?>
      <li><?= $games ?> -> <?= $pontuacao ?> pontos</li>
   <?php endforeach; ?>
 </ol>