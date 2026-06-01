<?php

/* 25) [DESAFIO] Crie um programa que leia o tamanho de três segmentos de reta.
Analise seus comprimentos e diga se é possível formar um triângulo com essas
retas. Matematicamente, para três segmentos formarem um triângulo, o comprimento
de cada lado deve ser menor que a soma dos outros dois. */

echo "Primeiro segmento: ";
$seg_1 = readline(); 
echo "Segundo segmento: ";
$seg_2 = readline();
echo "Terceiro segmento: ";
$seg_3 = readline();

if ((($seg_1 + $seg_2) > $seg_3) && (($seg_1 + $seg_3) > $seg_2) && (($seg_2 + $seg_3) > $seg_1)) {
    echo "Os segmentos podem formar um triângulo";    
}
else {
    echo "Os segmentos não podem formar um triângulo";
}