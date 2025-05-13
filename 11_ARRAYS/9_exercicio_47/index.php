<?php

$arr = ["Jaguar", 3.0, "Azul", 18, "Teto solar", "Automático"];
print_r($arr);
echo "<br>";

list($marca, $motor, $cor, $aro, $extras, $cambio) = $arr;

echo "$marca <br>";
echo "$motor <br>";
echo "$cor <br>";
echo "$aro <br>";
echo "$extras <br>";
echo "$cambio <br>";
