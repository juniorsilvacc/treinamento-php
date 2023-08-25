<?php

require_once 'src/services/Autenticador.php';
require_once 'src/services/IAutenticavel.php';
require_once 'src/models/Pessoa.php';
require_once 'src/models/funcionario/Funcionario.php';
require_once 'src/models/funcionario/Diretor.php';
require_once 'src/models/CPF.php';

$autenticador = new Autenticador();
$umDiretor = new Diretor('Henrique Paulo', new CPF('111.222.333-44'), 5000);

$autenticador -> tentaAutenticar($umDiretor, '123456');
