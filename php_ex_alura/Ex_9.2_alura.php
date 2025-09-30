<?php

$idade = 15;
$numero_de_P = 2;

echo "Você só pode entrar se estiver mais do que 18 anos ou" . PHP_EOL;
echo "A partir de 16 anos acompanhado" . PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade anos." . PHP_EOL;
    echo "Pode entrar sozinho";
}
    elseif ($idade >= 16 && $numero_de_P > 1) {
        echo "Você tem $idade anos, está acompanhado (a), então pode entrar.";
} else {
    echo "Você só tem $idade anos. Você não pode entrar";
}
        
    