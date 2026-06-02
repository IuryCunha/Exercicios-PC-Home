<?php

/* 28) Faça um programa que leia a largura e o comprimento de um terreno
retangular, calculando e mostrando a sua área em m². O programa também
devemostrar a classificação desse terreno, de acordo com a lista abaixo:
 - Abaixo de 100m² = TERRENO POPULAR
 - Entre 100m² e 500m² = TERRENO MASTER
 - Acima de 500m² = TERRENO VIP */

echo "Largura: ";
$largura = readline();
echo "Comprimento: ";
$comp = readline();

$area = $largura * $comp;
var_dump($area);

echo "Área do terreno: $area" . PHP_EOL;

if ($area < 100) {
    echo "Classificação: Terreno Popular";
}
elseif ($area >= 100 && $area <= 500) {
    echo "Classificação: Terreno Master";
}
elseif ($area > 500) {
    echo "Calssificação: Terreno VIP";
}