<?php

/*19) Crie um algoritmo que leia o nome e as duas notas de um aluno, calcule a sua 
média e mostre na tela. No final, analise a média e mostre se o aluno teve ou 
não um bom aproveitamento (se ficou acima da média 7.0).*/

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
