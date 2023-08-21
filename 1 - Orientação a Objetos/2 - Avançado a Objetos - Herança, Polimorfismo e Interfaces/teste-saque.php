<?php

require_once 'src/models/conta/Conta.php';
require_once 'src/models/conta/ContaPoupanca.php';
require_once 'src/models/Endereco.php';
require_once 'src/models/Pessoa.php';
require_once 'src/models/conta/Titular.php';
require_once 'src/models/CPF.php';

$conta = new ContaPoupanca(
  new Titular(
    new CPF('123.123.123-23'),
    'Junior',
    new Endereco('São Paulo', 'Centro', 'Rua Cinco', '5A')
  )
);

// var_dump($conta);
$conta->setDepositar(500);
$conta->setSacar(100);

echo $conta->getSaldo();
