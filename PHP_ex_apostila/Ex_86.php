<?php

/*86) Crie um programa que tenha um procedimento Gerador() que, quando chamado, 
mostre a mensagem "Olá, Mundo!" com algum componente visual (linhas) 
Ex: Ao chamar Gerador() aparece: 
+-------=======------+ 
Olá, Mundo!         
+-------=======------+ */

function mensagem($Texto) {
    return "Olá," . $Texto . "!";
}
echo mensagem("Mundo");

echo PHP_EOL;

//Acima temos uma função, que utiliza-se return.
//Abaixo temos um procedimento, que não se faz uso de return.

function Gerador() {
    echo "+-------=======------+" . PHP_EOL;
    echo "Olá, Mundo!" . PHP_EOL;
    echo "+-------=======------+" . PHP_EOL;
}
Gerador();