<?php
 $pessoas = [
    'Vitu' => 29,
    'Silvia' => 26,
    'Lucila' => 26,
    'Lussiana' => 26,
    'Joca' => 28,
    'Leticia' => 31,
 ];

 ?>
<table border="1">
 <tr>
    <th>Nome</th>
    <th>Idade</th>
 </tr>
 <?php foreach($pessoas as $nome => $idade): ?>
    <tr>
        <td><?= $nome; ?></td>
        <td><?= $idade; ?></td>
    </tr>
 <?php endforeach; ?>
</table>