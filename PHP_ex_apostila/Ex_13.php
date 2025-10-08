<?php
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