<?php

/*55) [DESAFIO] Vamos melhorar o jogo que fizemos no exercício 32. A partir de
agora, o computador vai sortear um número entre 1 e 10 e o jogador vai ter 4
tentativas para tentar acertar.*/

$contador = 1;


$obteveBreak = false;

while ($contador <= 10) {
    echo  $contador . "° tentativa: "; 
    $tentativa = fgets(STDIN);
    $N = rand(1,10);
    var_dump($N);
    $contador++;

    if (is_numeric($tentativa)) {

        if ($N == $tentativa) {
            echo "Você acertou o numero! Número sortedo: $N";
            break;
        }
        elseif ($N != $tentativa) {
            echo "Voce tem mais " . 11-$contador . " tentativas" . PHP_EOL;

            if ((11-$contador) == 0) {
                echo "Fim de jogo.";
            }
        }
    
    }
    else {
        $obteveBreak = true;
        break;
    }
}

if ($obteveBreak == true) {
    echo "Informação inválida";
}