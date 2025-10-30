<?php

/*58) Faça um algoritmo que leia a idade de vários alunos de uma turma. O programa 
vai parar quando for digitada a idade 999. No final, mostre quantos alunos 
existem na turma e qual é a média de idade do grupo.*/

$contador = 1;
$flag = true;
$soma = 0;
$media = 0;
$obteveBreak = false;
$aluno = 0; 

while ($flag == true && $contador <= 5) {
    echo "Idade do " . $contador . "° aluno:" . PHP_EOL;
    $idade = readline();
    $contador++;

    if (is_numeric($idade) && $idade != 0 && $idade != 999) {
        
        $soma = $soma += $idade;
        $aluno = $aluno + 1;
        $media = $soma / $aluno;
        
    }
    else {
        $obteveBreak = true;
        echo "Insira uma informação válida." . PHP_EOL;
        break;
    }
}
if ($obteveBreak == true) {
    echo "Reincie o programa.";
}
else {
    echo "A quantidade de alunos é $aluno" . PHP_EOL;
    echo "A media de idade dos alunos é: " . number_format($media , 1, ',' ,'.') . " anos" . PHP_EOL;
}

var_dump($aluno);
var_dump($media);