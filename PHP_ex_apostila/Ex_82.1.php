<?php

/*82) Faça um algoritmo que leia a nota de 10 alunos de uma turma e guarde-as em
um vetor. No final, mostre:
a) Qual é a média da turma
b) Quantos alunos estão acima da média da turma
c) Qual foi a maior nota digitada
d) Em que posições a maior nota aparece */

// Apresenta pontos importantes de correção.

$vetores = [];
$soma = 0;
$quantiNotas = 0;
$mediaMin = 7;
$acimaMedia = 0;
$maiorNota = 0;
$posiMN = [];

for ($i = 1; $i <= 10; $i++) {
    $vetores [$i] = (int) readline("Nota do aluno $i: ");
    $soma = $soma += $vetores [$i];

    if ($vetores [$i] >= $mediaMin) {
        $acimaMedia++;
    }

    if ($i == 1 || $vetores [$i] > $maiorNota) {
        $maiorNota = $vetores [$i];
        $posiMN [] = $i;
    }

    $quantiNotas++;
}
    $mediaTurma = $soma / $quantiNotas;

echo PHP_EOL;

echo "Notas:    ";
foreach ($vetores as $valor) {
    echo $valor . " ";
}
echo PHP_EOL;

echo "Posições: ";
for ($i = 1; $i <= 10; $i++) {
    echo $i . " ";
}
echo PHP_EOL;

echo PHP_EOL;
    echo "Média: " . number_format($mediaTurma , 2, ',' ,'.') . PHP_EOL;
    echo "Alunos acima da média: $acimaMedia" . PHP_EOL;
    echo "Maior nota: $maiorNota" . PHP_EOL;
echo PHP_EOL;

foreach ($posiMN as $posi) {
}
    echo "Posição da maior nota: $posi";