<?php
//removendo tags html

$textoHtml = "<p>testando.</p><div>Uma div</><p>outro paragrafo.</p>";

$salvarTextoBanco = strip_tags($textoHtml)
echo $textoHtml. "<br>";
echo $salvarTextoBanco;
