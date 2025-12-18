<?php

/*92) Crie uma lógica que leia um número inteiro e passe para um procedimento 
ParOuImpar() que vai verificar e mostrar na tela se o valor passado como 
parâmetro é PAR ou ÍMPAR.*/

echo "Digite um valor: ";
$valor = (int) readline();


function ParOuImpar($valor) {
    if (($valor % 2) == 0) {
        echo "O valor é par";
    }
    else {
        echo "O valor é impar";
    }
}
ParOuImpar($valor);