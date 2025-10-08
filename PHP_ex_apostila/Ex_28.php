<?php

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