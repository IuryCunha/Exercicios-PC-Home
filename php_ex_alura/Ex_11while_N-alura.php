<?php 

$contador = 1;

while ($contador <= 10) :
    echo "Contador é $contador" . PHP_EOL;
    $contador++;
endwhile;

echo "<hr>";

$contador = 1;

do {
    echo "Contador é $contador" . PHP_EOL;
    $contador++;
} 
while ($contador <= 10);