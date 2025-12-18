<?php

/*88) Crie um programa que melhore o procedimento Gerador() da questão anterior 
para que mostre uma mensagem vário 
Ex: Ao chamar Gerador("Aprendendo Portugol", 4) aparece: 
+-------=======------+ 
Aprendendo Portugol  
Aprendendo Portugol  
Aprendendo Portugol  
Aprendendo Portugol  
+-------=======------+ */

function Gerador($texto, $qtd) {
    echo "+-------=======------+" . PHP_EOL;
    for ($i = 0; $i < $qtd; $i++) {
        echo $texto . PHP_EOL;
    }
    echo "+-------=======------+" . PHP_EOL;
}
Gerador("Aprendendo PHP", 4);

// antes de revisado: Faltava parametrizar a quantidade.