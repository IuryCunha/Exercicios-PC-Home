<?php

/* 3) Crie um programa que leia o nome e o salário de um funcionário, mostrando no
final uma mensagem.
Ex:
Nome do Funcionário: Maria do Carmo
Salário: 1850,45
O funcionário Maria do Carmo tem um salário de R$1850,45 em Junho. */

$nome = "Maria do Carmo";
$sala = 1850.45;
echo "Nome do funcionário: $nome" . PHP_EOL;
echo "O salário de $nome é R$" . number_format($sala, 2, ',', '.') . " em Junho." . PHP_EOL;
