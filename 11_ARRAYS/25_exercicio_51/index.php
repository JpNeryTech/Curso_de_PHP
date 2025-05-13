<?php

$ranking = [
    'João' => 300,
    'Matheus' => 3,
    'Yuri' => 290,
    'Cleiton' => 195,
    'Dorival' => 95,
    'Joelithon' => 5
];

arsort($ranking);

print_r($ranking);
echo "<br>";
?>

<h1>Ranking</h1>
<ol>
    <?php foreach($ranking as $pessoa => $pontuacao): ?>
<li><?= $pessoa ?> -> <?= $pontuacao ?> pontos </li>
    <?php endforeach; ?>
</ol>