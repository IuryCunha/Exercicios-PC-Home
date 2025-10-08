<?php

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




