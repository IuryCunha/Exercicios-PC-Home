<?php

/* Escreva uma função que receba um valor booleano ou numérico. Se o parâmetro fornecido for booleano, o retorno da função deverá ser o inverso. Por exemplo: se a entrada for false, retornará true. Se o parâmetro for numérico, o retorno será o inverso. Por exemplo: se for fornecido 1, o retorno será -1. Se o parâmetro de entrada não for de nenhum dos tipos acima, retorne "booleanos ou números esperados, mas o parâmetro é do tipo..." 
*/

function inverso($valor)
{
    if (is_bool($valor)) {
        return !$valor;
    }
    elseif (is_numeric($valor)) {
        return $valor * (-1);
    }
    elseif (!is_bool($valor) && !is_numeric($valor)) {
        return 'Booleanos ou números esperados, mas o parâmetro é do tipo: ' . get_debug_type($valor);
    }
}

$valor = "oi";

$resultado = inverso($valor);

if (is_bool($resultado) && $resultado) {
    echo "true";
} elseif (is_bool(!$resultado) && $resultado) {
    echo "false";
}

if (is_numeric($resultado)) {
    echo $resultado;
}

if (!is_bool($resultado) && !is_numeric($resultado)) {
    echo $resultado;
}

/* switch ($variable) {
    case 'value':
        # code...
        break;
    
    default:
        # code...
        break;
}
*/