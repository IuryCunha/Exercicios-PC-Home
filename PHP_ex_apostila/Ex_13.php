<?php

/*13) Faça um algoritmo que leia o salário de um funcionário, calcule e mostre o
seu novo salário, com 15% de aumento.*/

echo "Digite o nome do funcionário: ";
$nome = fgets(STDIN);
echo "Digite o salário do funcionário: ";
$salario = fgets(STDIN);

$salario1 = $salario;
$porcentagem = 15;

$aumento = ($salario1 * 15) / 100;
$salario_aumento = $salario1 + $aumento;


echo "O funcionário $nome receberá um aumento de 15%" . PHP_EOL;
echo "Seu salário passará de $salario1 para $salario_aumento ";