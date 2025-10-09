<?php
echo "Pedra, Papel e Tesoura" . PHP_EOL;
echo "Jogador 1 escolhe: ";
$jo1 = readline();
echo "Jogador 2 escolhe: ";
$jo2 = readline();

if ($jo1 != "tesoura" && $jo1 != "Tesoura" && $jo1 != "TESOURA" && $jo1 != "pedra" && $jo1 != "Pedra" && $jo1 != "PEDRA" && $jo1 != "papel" && $jo1 != "Papel" && $jo1 != "PAPEL") {
    echo "Insira uma informação válida";
}
elseif ($jo1 == "tesoura" || $jo1 == "Tesoura" || $jo1 == "TESOURA") {
    
    if ($jo2 == "papel" || $jo2 == "Papel" || $jo2 == "PAPEL") {
        echo "Jogador 1 venceu com $jo1";
    }
    elseif ($jo2 == "pedra" || $jo2 == "Pedra" || $jo2 == "PEDRA") {
        echo "Jogador 2 venceu com $jo2";
    }
    elseif ($jo2 == "tesoura" || $jo2 == "Tesoura" || "TESOURA") {
        echo "Empate! Ambos escolheram Tesoura";
    }  
}
elseif ($jo1 == "pedra" || $jo1 == "Pedra" || $jo1 == "PEDRA") {
    
    if ($jo2 == "tesoura" || $jo2 == "Tesoura" || $jo2 == "TESOURA") {
        echo "Jogador 1 venceu com $jo1";
    }
    elseif ($jo2 == "papel" || $jo2 == "Papel" || $jo2 == "PAPEL") {
        echo "Jogador 2 venceu com $jo2";
    }
    elseif ($jo2 == "pedra" || $jo2 == "Pedra" || $jo2 == "PEDRA") {
        echo "Empate! Ambos escolheram Pedra";
    }

}
elseif ($jo1 == "papel" || $jo1 == "Papel" || $jo1 == "PAPEL") {

    if ($jo2 == "pedra" || $jo2 == "Pedra" || $jo2 == "PEDRA") {
        echo "Jogador 1 venceu com $jo1";
    }
    elseif ($jo2 == "tesoura" || $jo2 == "Tesoura" || $jo2 == "TESOURA") {
        echo "Jogador 2 venceu com $jo2";
    }
    elseif ($jo2 == "papel" || $jo2 == "Papel" || $jo2 == "PAPEL") {
        echo "Empate! Ambos escolheram Papel";
    }
}