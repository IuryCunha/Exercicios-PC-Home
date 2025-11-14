<?php 

/*71) Faça um programa que preencha automaticamente um vetor numérico com 8
posições, conforme abaixo:
999 999 999 999 999 999 999 999
 0   1   2   3   4   5   6   7  */


$vetores = array_fill(0, 8, 999);

foreach ($vetores as $valor) {
    echo $valor . " ";
}

echo PHP_EOL;

for ($i = 0; $i < count($vetores); $i++) {
    echo "  $i ";
}

echo PHP_EOL;
echo "____________________________________________________________" . PHP_EOL;

$NewArray = [] ;

for ($i = 0; $i < 8; $i++) {
    $NewArray[$i] = 999;
}

foreach ($NewArray as $item) {
    echo $item . " ";
}