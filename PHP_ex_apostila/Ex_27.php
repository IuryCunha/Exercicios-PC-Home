<?php

/* 27) Crie um programa que leia duas notas de um aluno e calcule a sua média,
mostrando uma mensagem no final, de acordo com a média atingida:
 - Média até 4.9: REPROVADO
 - Média entre 5.0 e 6.9: RECUPERAÇÃO
 - Média 7.0 ou superior: APROVADO */

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