<?php


include_once "backend.php";

?>

<h1>Seja bem vindo a Nossa loja!</h1>
<p><?=$nome;?> aproveite nossas ofertas!</p>

<ul>
    <?php foreach($produtos as $produtos): ?>
        <li><?=$produtos;?></li>
    <?php endforeach; ?>

</ul>