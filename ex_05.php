 <?php

function ordenarNomes($lista)
{
    $nomes = explode(",", $lista);

    sort($nomes);

    return $nomes;
}

$lista = "Carlos, Ana, Fernanda, Bruno, Maria";

$nomesOrganizados = ordenarNomes($lista);

echo "Nomes em ordem alfabética:<br><br>";

foreach ($nomesOrganizados as $nome) {
    echo $nome . "<br>";
}

?>