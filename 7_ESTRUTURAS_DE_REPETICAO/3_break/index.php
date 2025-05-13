<?php
$x = 0;

while($x < 10) {

    echo "o x é $x <br>";

    if($x === 5) {
        echo "Terminando o looop <br>";
        break;
    }

    $x++;
}

echo "Saiu do loop <br>";

