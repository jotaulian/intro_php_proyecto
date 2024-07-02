<?php
$numeros = [5, 3, 8, 10];
$operacion = "promedio";

// Función para obtener la media aritmética de los números del array
function promedio($numeros)
{
    $total = array_sum($numeros);
    return $total / count($numeros);
}

function calcular($numeros, $operacion)
{
    switch ($operacion) {
        case 'suma':
            echo array_sum($numeros);
            break;
        case 'promedio':
            echo promedio($numeros);
            break;
        case 'maximo':
            echo max($numeros);
            break;
        case 'minimo':
            echo min($numeros);
            break;
        default:
            echo "Operación no válida";
            break;
    }
}

// Realizamos el cálculo
calcular($numeros, $operacion);
