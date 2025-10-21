<?php

$contador = 30;

while ($contador >= 0) { 
    if ($contador % 4 == 0) {
        echo "[$contador]" . PHP_EOL;
    }
    else {
        echo "$contador" . PHP_EOL;
    }

    $contador--;
}

echo "Acabou!";