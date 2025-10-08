<?php

echo "Primeiro número: ";
$numero_1 = readline();
echo "Segundo número: ";
$numero_2 = readline();

if ($numero_1 > $numero_2) {
    echo "O primeiro valor é maior";
}
elseif ($numero_1 < $numero_2) {
    echo "O segundo valor é maior";
}
else {
    echo "Não existe valor maior, os dois são iguais.";
}
