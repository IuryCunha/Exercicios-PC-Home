<?php

for ($contador = 0; $contador <= 10; $contador++):
    echo "5 x $contador = " . ($contador * 5) . PHP_EOL;
endfor;

$cores = array("Verde" , "Vermelho" , "Azul" , "Preto");
foreach ($cores as $indice => $valor):
    echo $indice."-".$valor . PHP_EOL;
endforeach;