<?php

require_once 'src/models/Endereco.php';

$endereco = new Endereco("João Pessoa", "Bairro dos Barrios", "Rua das Ruas", "37B");

// echo $endereco;
echo "A sua rua é: " . $endereco->getRua();

