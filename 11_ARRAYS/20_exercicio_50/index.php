<?php

$pessoas = [
    'joao' => 18,
    'erickson' => 29,
    'arthur' => 18,
    'guilherme' => 20
];

?>

<table border="1">
    <tr>
        <th>Nome</th>
        <th>Idade</th>
    </tr>
    <?php foreach($pessoas as $nome => $idade):  ?>
        <tr>
        <td> <?= $nome; ?> </td>
        <td> <?= $idade; ?></td>
        </tr>
    <?php endforeach;?>
</table>