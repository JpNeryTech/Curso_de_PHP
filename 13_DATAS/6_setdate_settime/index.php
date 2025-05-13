<?php

$data = new DateTime();

print_r($data);
echo "<br>";

$data->setDate(1659, 15, 06);

print_r($data);
echo "<br>";

$data->setTime(5, 12, 16);

print_r($data);
echo "<br>";

echo $data->format('d/m/y') . "<br>";