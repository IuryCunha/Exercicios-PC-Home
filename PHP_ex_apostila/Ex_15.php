<?php

/*15) Crie um programa que leia o número de dias trabalhados em um mês e mostre o
salário de um funcionário, sabendo que ele trabalha 8 horas por dia e ganha R$25
por hora trabalhada.*/

echo "Dias trabalhados no mês: ";
$dias = fgets(STDIN);

$pagamento_htraba = 8 * 25;
$salario = $dias * $pagamento_htraba;

echo "O pagamento do funcionário será $salario R$";

