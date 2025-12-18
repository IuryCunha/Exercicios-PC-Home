<?php

/*89) Crie um programa que melhore o procedimento Gerador() da questão anterior 
para que o programador possa escolher uma entre três bordas: 
+-------=======------+ Borda 1 
~~~~~~~~:::::::~~~~~~~ Borda 2 
<<<<<<<<------->>>>>>> Borda 3 
Ex: Uma chamada válida seria Gerador("Portugol Studio", 3, 2) 
~~~~~~~~:::::::~~~~~~~ 
Portugol Studio 
Portugol Studio 
Portugol Studio 
~~~~~~~~:::::::~~~~~~~ */

$bordas = [
    1 =>   '+-------=======------+',
    2 =>   '~~~~~~~~:::::::~~~~~~~',
    3 =>   '<<<<<<<<------->>>>>>>' 
];

function Gerador($texto, $qtd, $tipoBorda, $bordas) {
    echo $bordas[$tipoBorda] . PHP_EOL;

    for ($i = 0; $i < $qtd; $i++) {
        echo $texto . PHP_EOL;
    }

    echo $bordas[$tipoBorda] . PHP_EOL; // pega a borda escolhida pelo usuário
}
Gerador("Portugol Studio", 3, 3, $bordas);

/*o array $bordas está dentro da função para que ela seja vista, caso contrário ela passa a não existir para a função*/