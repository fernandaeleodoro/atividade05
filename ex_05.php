 <?php

function ordenarNomes($lista)
{
    $nomes = explode(",", $lista);

    sort($nomes);

    return $nomes;
}

$lista = "Neiva, Ana, Fernanda, João,Maria";

$nomesOrganizados = ordenarNomes($lista);

echo "Nomes em ordem alfabética:<br><br>";

foreach ($nomesOrganizados as $nome) {
    echo $nome . "<br>";
}

?>