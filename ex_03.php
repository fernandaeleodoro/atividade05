<?php

function contarVogais($texto)
{
    $texto = strtolower($texto);
    $vogais = "aeiou";
    $quantidade = 0;

    for ($i = 0; $i < strlen($texto); $i++) {
        if (strpos($vogais, $texto[$i]) !== false) {
            $quantidade++;
        }
    }

    return $quantidade;
}

$texto = "Olá, meu nome é Fernanda";

$resultado = contarVogais($texto);

echo "Texto: " . $texto . "<br>";
echo "Quantidade de vogais: " . $resultado;

?>
