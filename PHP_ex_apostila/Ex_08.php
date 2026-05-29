<?php

/* 8) Desenvolva um programa que leia uma distância em metros e mostre os valores
relativos em outras medidas.
Ex:
Digite uma distância em metros: 185.72
A distância de 85.7m corresponde a:
0.18572Km
1.8572Hm
18.572Dam
1857.2dm
18572.0cm
185720.0mm */

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
