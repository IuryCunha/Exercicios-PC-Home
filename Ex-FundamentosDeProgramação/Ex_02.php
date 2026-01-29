<?php

/* Escreva uma função que receba a idade de uma pessoa em anos e retorne a mesma idade em dias */

$idade = 25;

function converterIdade($idade) {
    return $idade * 365;
}

$idadeDias = converterIdade($idade);

echo "A idade $idade em dias é $idadeDias";