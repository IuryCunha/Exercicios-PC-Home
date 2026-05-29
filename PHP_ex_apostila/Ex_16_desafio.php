<?php

/*16) [DESAFIO] Escreva um programa para calcular a redução do tempo de vida de um
fumante. Pergunte a quantidade de cigarros fumados por dias e quantos anos ele
já fumou. Considere que um fumante perde 10 min de vida a cada cigarro. Calcule
quantos dias de vida um fumante perderá e exiba o total em dias.*/

echo "Quantos cigarros você fuma por dia? ";
$cigarros = fgets(STDIN);
echo "Quantos anos você fumou? ";
$anos_f = fgets(STDIN);

$anos_Fd = $anos_f * 365;
$cigarros_f = $anos_Fd * $cigarros;

$minutos_perd = $cigarros_f * 10;
$horas_perd = $minutos_perd / 60;
$dias_perd = $horas_perd / 24;

echo "Você perdeu $dias_perd dias de vida";




