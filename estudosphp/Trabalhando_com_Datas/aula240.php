<?php
 //função strtotime

 $cincodias = strtotime("5 days");//quanto esses 5 dias valem para o php

 echo $cincodias . "<br>";

 $dezdias = strtotime("10 days");//quanto esses 10 dias valem para o php

 echo $dezdias . "<br>";

 $dataAtualMais5 = date("d/M/y", strtotime("5 days"));//data atual sendo acrescentada de mais 5 dias, mostra na tela o dia final

 echo $dataAtualMais5 . "<br>";


 $dataAtualMais10 = date("d/M/y", $dezdias);

 echo $dataAtualMais10 . "<br>";