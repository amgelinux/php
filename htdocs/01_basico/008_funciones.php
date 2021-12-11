<?php

$otronum = 30;
$num2 = 3;

// Ver variables opcionales con valores por defecto
// La declaración de tipos es opcional.

function sumar(int $a = 3,int $b,int $c = 5):int {

// Para referenciar a una variable de fuera de la función
    global $otronum;
    $suma = $a + $b + $c + $GLOBALS['num2'];
    $suma = $suma + $otronum;
    return $suma;
}

echo "El resultado de esta suma es " . sumar(5, 4);

