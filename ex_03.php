<?php

function contarVogais($texto) {
    $vogais = ['a', 'e', 'i', 'o', 'u'];
    $contador = 0;

    $texto = strtolower($texto);

    for ($i = 0; $i < strlen($texto); $i++) {
        if (in_array($texto[$i], $vogais)) {
            $contador++;
        }
    }

    return $contador;
}

