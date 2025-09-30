<?php

$idade = 15;


echo "Você só pode entrar se estiver mais do que 18 anos ou" . PHP_EOL;
echo " a partir de 16 anos acompanhado";

if ($idade >= 18) {
    echo "Você tem $idade anos." . PHP_EOL;
    echo "Pode entrar";
} else {
    echo "Você só tem $idade anos. Você não pode entrar";
}

echo PHP_EOL;
echo "Adeus";
