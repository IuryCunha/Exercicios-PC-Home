<?php

echo "Dias trabalhados no mês: ";
$dias = fgets(STDIN);

$pagamento_htraba = 8 * 25;
$salario = $dias * $pagamento_htraba;

echo "O pagamento do funcionário será $salario R$";

