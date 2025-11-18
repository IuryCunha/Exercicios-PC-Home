<?php 

/*74) Crie um programa que preencha automaticamente (usando lógica, não apenas
atribuindo diretamente) um vetor numérico com 10 posições, conforme abaixo:
5 3 5 3 5 3 5 3 5 3
0 1 2 3 4 5 6 7 8 9 */

$vetores = [];

for ($i = 0; $i <= 9; $i++) {
    if ($i % 2 == 0) {
        $vetores[$i] = 5;
    } else {
        $vetores[$i] = 3;
    }
    //$i % 2 calcula o resto da divisão por 2.
    //Se o resto for 0, o número é par.
    //Se não for 0, é ímpar.
}

foreach ($vetores as $valor) {
    echo $valor . " ";
}

echo PHP_EOL;

for ($i = 0; $i <= 9; $i++) {
    echo $i . " ";
}