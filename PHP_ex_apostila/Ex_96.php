<?php

/* 96) Crie um programa que tenha uma função Media(), que vai receber as 2 notas de
um aluno e retornar a sua média para o programa principal. */

$valores = [];

for ($i = 0; $i < 2; $i++) {
    if ($i == 0) {
        $valores [$i] = (int) readline("Digite a primeira nota: " . PHP_EOL);
    }
    else {
        $valores [$i] = (int) readline("Digite a segunda nota: " . PHP_EOL);
    }
}

function media($a, $b) {
    return ($a + $b) / 2;
}

$resultado = media ($valores [0], $valores [1]);
echo "A media é " . number_format($resultado , 1, ',' ,'.')  . PHP_EOL;

/* 

<?php

function Media($a, $b) {
    return ($a + $b) / 2;
}

$nota1 = (float) readline("Digite a primeira nota: ");
$nota2 = (float) readline("Digite a segunda nota: ");

$resultado = Media($nota1, $nota2);

echo "A média é " . number_format($resultado, 1, ',', '.') . PHP_EOL;

*/

// Acima está a forma simplificada