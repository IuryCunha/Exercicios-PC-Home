<?php

/*52) Crie um algoritmo que leia a idade de 10 pessoas, mostrando no final: 
a) Qual é a média de idade do grupo 
b) Quantas pessoas tem mais de 18 anos 
c) Quantas pessoas tem menos de 5 anos 
d) Qual foi a maior idade lida */

$contador = 1;

$soma = 0;
$media = 0;
$maior18 = 0;
$menor5 = 0;
$maiorIdade = 0;


while ($contador <= 10) {
    echo "Idade da " . $contador . "° Pessoa: " . PHP_EOL;
    $idade = (int) trim(fgets(STDIN));
    
    $soma = $soma += $idade;
    $media = $soma / 10;
    
    if ($idade > 18) {
        $maior18 = $maior18 + 1;
    }
    if ($idade < 5) {
        $menor5 = $menor5 + 1;
    }


    if ($contador == 1) {
        $maiorIdade = $idade;
    }
    if ($idade > $maiorIdade) {
        $maiorIdade = $idade;
    }

    $contador++;
}

echo "A soma das idades é $soma" . PHP_EOL;
echo "A média das idades é: " . number_format($media , 2, ",", ".") . PHP_EOL;
echo "São $maior18 pessoa(s) maior(es) de 18" . PHP_EOL;
echo "São $menor5 pessoa(s) menor(es) de 5" . PHP_EOL;
echo "A maior idade é $maiorIdade"; 