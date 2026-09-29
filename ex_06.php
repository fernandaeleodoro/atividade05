<?php

$produtos = [
    [
        "nome" => "Arroz",
        "valor" => 25.90
    ],
    [
        "nome" => "Feijão",
        "valor" => 9.50
    ],
    [
        "nome" => "Café",
        "valor" => 18.90
    ],
    [
        "nome" => "Leite",
        "valor" => 5.50
    ]
];

function produtoMaisCaro($produtos)
{
    $maisCaro = $produtos[0];

    foreach ($produtos as $produto) {
        if ($produto["valor"] > $maisCaro["valor"]) {
            $maisCaro = $produto;
        }
    }

    return $maisCaro;
}

$produto = produtoMaisCaro($produtos);

echo "Produto mais caro: " . $produto["nome"] . "<br>";
echo "Valor: R$ " . number_format($produto["valor"], 2, ",", ".");

?>