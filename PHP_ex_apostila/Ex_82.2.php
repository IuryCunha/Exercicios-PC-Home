<?php

$vetores = [];
$soma = 0;
$maiorNota = 0;
$posiMN = [];

// Ex corrigido e objetivo quanto ao enunciado.

for ($i = 1; $i <= 10; $i++) {

    $vetores[$i] = (int) readline("Nota do aluno $i: ");
    $soma += $vetores[$i];

    // Encontrar maior nota e suas posições
    if ($i == 1 || $vetores[$i] > $maiorNota) {
        $maiorNota = $vetores[$i];
        $posiMN = [$i]; // Zera e inicia com a nova posição
    } elseif ($vetores[$i] == $maiorNota) {
        $posiMN[] = $i; // Adiciona mais uma posição
    }
}

$mediaTurma = $soma / 10;

// Contar alunos acima da média REAL
$acimaMedia = 0;
foreach ($vetores as $nota) {
    if ($nota > $mediaTurma) {
        $acimaMedia++;
    }
}

// Exibir resultados
echo PHP_EOL . "Notas: ";
foreach ($vetores as $valor) {
    echo $valor . " ";
}

echo PHP_EOL . "Média da turma: " . number_format($mediaTurma, 2, ',', '.') . PHP_EOL;
echo "Alunos acima da média: $acimaMedia" . PHP_EOL;
echo "Maior nota: $maiorNota" . PHP_EOL;

echo "Posições da maior nota: ";
echo implode(", ", $posiMN);

?>