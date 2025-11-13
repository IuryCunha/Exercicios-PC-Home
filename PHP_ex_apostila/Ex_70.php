<?php 

/*70) [DESAFIO] Faça um programa que mostre os 10 primeiros elementos da Sequência 
de Fibonacci: 
1 1 2 3 5 8 13 21... */

$a = 1;
$b = 1;


echo "Os 10 primeiros elementos da Sequência de Fibonacci: " . PHP_EOL;
echo "$a $b ";

for ($contador = 1; $contador <= 8; $contador++) {
    $c = $a + $b;
    echo "$c ";

    /*Agora o valor de $a passa a ser o antigo $b,
    e $b passa a ser o novo $c.*/
    
    $a = $b;
    $b = $c;
}