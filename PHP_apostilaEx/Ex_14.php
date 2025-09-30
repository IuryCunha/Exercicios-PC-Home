<?php

echo "Km percorridos: ";
$Km_percorrido = fgets(STDIN);
echo "Dias alugados: ";
$dias = fgets(STDIN);

$taxa_dias = 90 * $dias;
$taxa_Km_p = 0.20 * $Km_percorrido;

$valor_final = $taxa_dias + $taxa_Km_p;

echo "Serão cobrados $taxa_dias R$ para $dias dia(s) alugado(s)" . PHP_EOL;
echo "Serão cobrados $taxa_Km_p R$ para $Km_percorrido km percorrido(s)" . PHP_EOL;

echo "O valor final será de $valor_final R$";