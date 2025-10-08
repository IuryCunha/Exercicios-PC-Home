<?php

echo "Ano de nascimento: ";
$ano_nasc = fgets(STDIN);
echo "Ano atual: ";
$ano_atual = fgets(STDIN);

$idade = $ano_atual - $ano_nasc;

echo "Sua idade é $idade anos" . "\n";

if ($idade < 18) {
    $anos_restantes = 18 - $idade;
    echo "Faltam $anos_restantes anos para você alistar-se";
}
elseif ($idade >= 18) {
    $anos_passados = $idade - 18; 
    echo "Já se passaram $anos_passados anos de seu alistamento";
}