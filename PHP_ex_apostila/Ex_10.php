<?php

/*10) Faça um algoritmo que leia a largura e altura de uma parede, calcule e
mostre a área a ser pintada e a quantidade de tinta necessária para o serviço,
sabendo que cada litro de tinta pinta uma área de 2metros quadrados.*/

echo "Qual a largura da parede? " . PHP_EOL;
$base = (float) fgets(STDIN);
echo "Qual a altura da parede? " . PHP_EOL;
$alt = (float) fgets(STDIN);
$A = $base * $alt;

echo "A largura da parede é $base" . PHP_EOL; 
echo "A altura da parede é $alt" . PHP_EOL;
echo "A área da parede será de $A" . PHP_EOL;

$litros_p = $A / 2;

echo "Por fim será preciso $litros_p litros para pintar toda a parede.";
