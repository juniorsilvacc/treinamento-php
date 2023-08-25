<?php

$carros = ['Fiat Uno', 'Corola', 'BMW', 'Corsa Sedan', 'Hilux'];

// Contagem de quantos elementos tem no array
echo count($carros);

foreach ($carros as $valor) {
    echo $valor . '<br>';
}


// Arrays associativos
$pessoa = ['nome' => 'Junior', 'idades' => 26, 'altura' => 1.70];
$pessoa['estado'] = 'Paraíba';

foreach ($pessoa as $indice => $valor) {
    echo $indice . ':' . $valor . '<br>';
}
