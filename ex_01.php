<?php

function verificarNumero($numero)
{
    if ($numero == 0) {
        echo "O número é zero.";
    } else {
        if ($numero % 2 == 0) {
            echo "O número é par.<br>";
        } else {
            echo "O número é ímpar.<br>";
        }

        if ($numero > 0) {
            echo "O número é positivo.";
        } else {
            echo "O número é negativo.";
        }
    }
}

$numero = 8;

verificarNumero($numero);

?>







