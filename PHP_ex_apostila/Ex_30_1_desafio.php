<?php

echo "Primeiro segmento: ";
$seg_1 = readline(); 
echo "Segundo segmento: ";
$seg_2 = readline();
echo "Terceiro segmento: ";
$seg_3 = readline();

if (($seg_1 + $seg_2) < $seg_3) {
    echo "Os segmentos não podem formar um triângulo";    
}
elseif (($seg_1 + $seg_3) < $seg_2) {
    echo "Os segmentos não podem formar um triângulo";
}
elseif (($seg_2 + $seg_3) < $seg_1) {
    echo "Os segmentos não podem formar um triângulo";
}
else {
    echo "Os segmentos podem formar um triângulo" . PHP_EOL;  
    if ($seg_1 == $seg_2 && $seg_1 == $seg_3) {
        echo "O triângulo é equilátero";
    }
    elseif ($seg_1 == $seg_2 || $seg_1 == $seg_3 || $seg_2 == $seg_3) {
        echo "O triângulo é isósceles";
    }
    elseif ($seg_1 != $seg_2 && $seg_1 != $seg_3 && $seg_2 != $seg_3) {
        echo "O triângulo é escaleno";
    }  
}