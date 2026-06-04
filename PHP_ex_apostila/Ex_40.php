<?php

/* 40) Crie um aplicativo que mostre na tela a seguinte contagem:
0 3 6 9 12 15 18 Acabou! */

$contador = 0;

while ($contador <= 18 ) {
    echo $contador . PHP_EOL;
    $contador+=3;
}
echo "Acabou!";