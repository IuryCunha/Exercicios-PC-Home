<?php

echo "Primeira nota: ";
$nota_1 = readline();
echo "Segunda nota: ";
$nota_2 = readline();

$media = ($nota_1 + $nota_2) / 2;
var_dump($media);

if ($media < 5) {
    echo "Situação: REPROVADO";
}
elseif ($media >= 5 && $media < 7) {
    echo "Situação: RECUPERAÇÃO";
}
elseif ($media >= 7) {
    echo "Situação: APROVADO";
}