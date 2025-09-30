<?php

echo "Primeira nota: ";
$primeiraN = fgets(STDIN);
echo "Segunda nota: ";
$segundaN = fgets(STDIN);

$media = ($primeiraN + $segundaN) / 2;

var_dump($media);

if ($media >= 7)  {
    echo "O aluno teve um bom aproveitamento";
} 
else {
    echo "O aluno não teve um bom aproveitamento";
}





