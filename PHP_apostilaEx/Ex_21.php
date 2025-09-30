<?php

echo "em que ano você nasceu? ";
$ano_Nasc = fgets(STDIN);
echo "em que ano estamos? ";
$ano_Atual = fgets(STDIN);

$idade = $ano_Atual - $ano_Nasc;
var_dump($idade);

$ano_NascB = $ano_Nasc % 4;
var_dump($ano_NascB);


if ($ano_NascB != 0) {
    echo "sua idade é: $idade";
}
elseif ($ano_NascB == 0) {
    echo "seu ano de nascimento é bisexto " . PHP_EOL;
    echo "Sua idade é: $idade" . PHP_EOL;
    echo "digite seu mês de aniversario ";
    $mes = fgets(STDIN);
    echo "digite seu dia de nascimento: ";
    $dia = fgets(STDIN);
    
    if ($mes == 02 and $dia == 29) {
        echo "Você poderá escolher comemorar seu aniversário em " . PHP_EOL;
        echo "28 do 02 ou 1º de Março";
    } 
    else {
        echo "parece que você não tem a peculiaridade do aniversário bisextoo";
    }
}

