<?php

$base = 3;
$alt = 2;
$A = $base * $alt;

echo "A largura da parede é $base" . PHP_EOL; 
echo "A altura da parede é $alt" . PHP_EOL;
echo "A área da parede será de $A" . PHP_EOL;

$litros_p = $A / 2;

echo "Por fim será preciso $litros_p litros para pintar toda a parede.";
