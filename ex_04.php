<?php

function calcularDesconto($valor)
{
    if ($valor > 100) {
        $desconto = $valor * 0.10;
    } else {
        $desconto = 0;
    }

    $valorFinal = $valor - $desconto;

    echo "Valor original: R$ " . number_format($valor, 2, ",", ".") . "<br>";
    echo "Desconto: R$ " . number_format($desconto, 2, ",", ".") . "<br>";
    echo "Valor final: R$ " . number_format($valorFinal, 2, ",", ".");
}

$valor = 150;

calcularDesconto($valor);

?>