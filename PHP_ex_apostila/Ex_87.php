<?php

/*87) Crie um programa que melhore o procedimento Gerador() da questão anterior 
para que mostre uma mensagem personalizada, passada como parâmetro. 
Ex: Ao chamar Gerador("Aprendendo Portugol") aparece: 
+-------=======------+ 
Aprendendo Portugol         
+-------=======------+ */

function Gerador($texto) {
    echo "+-------=======------+" . PHP_EOL;
    echo $texto . PHP_EOL;
    echo "+-------=======------+" . PHP_EOL;
}
Gerador("Aprendendo PHP");