<?php

$idadeList = [21, 23, 19, 25, 30, 41, 18];

$idadeList [] = 20;  /* se não informar nenhum indice, o php 
                    colocará no próximo indice numerico disponivel*/
foreach ($idadeList as $idade) {
    echo $idade . PHP_EOL;
}