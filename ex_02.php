<?php

function calcularMedia($nota1, $nota2, $nota3)
{
    $media = ($nota1 + $nota2 + $nota3) / 3;

    echo "Média: " . number_format($media, 2, ",", ".") . "<br>";

    if ($media >= 7) {
        echo "Situação: Aprovado";
    } elseif ($media >= 5) {
        echo "Situação: Recuperação";
    } else {
        echo "Situação: Reprovado";
    }
}

$nota1 = 8;
$nota2 = 7;
$nota3 = 9;

calcularMedia($nota1, $nota2, $nota3);

?>

   
    