<?php

echo "Horas de exercício: ";
$horas = readline();

if ($horas <= 10) {
    $pontos = 1 * $horas;
    $dinheiro = 1 * $pontos;
    echo "Você fez $pontos pontos e ganhou R$$dinheiro";
}
elseif ($horas > 10 && $horas <= 20 ) {
    $pontos = 2 * $horas;
    $dinheiro = 1 * $pontos;
    echo "Você fez $pontos pontos e ganhou R$$dinheiro";
}
elseif ($horas > 20) {
    $pontos = 3 * $horas;
    $dinheiro = 1 * $pontos;
    echo "Você fez $pontos pontos e ganhou R$$dinheiro";
}