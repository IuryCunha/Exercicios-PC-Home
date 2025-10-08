<?php

$distancia = 100;

$km = $distancia / 1000;
$hm = $distancia / 100;
$dam = $distancia / 10;

$dm = $distancia * 10;
$cm = $distancia * 100;
$mm = $distancia * 1000;

echo "A $distancia metros representa: " . PHP_EOL;
echo "$km Quilômetros " . PHP_EOL;
echo "$hm Hectômetros " . PHP_EOL;
echo "$dam Decâmetros " . PHP_EOL;
echo "$dm Decímetros " . PHP_EOL;
echo "$cm Centímetros " . PHP_EOL;
echo "$mm Milímetros " . PHP_EOL;
