<?php

require_once 'src/models/conta/Conta.php';
require_once 'src/models/Endereco.php';
require_once 'src/models/Pessoa.php';
require_once 'src/models/conta/Titular.php';
require_once 'src/models/CPF.php';

$endereco = new Endereco("João Pessoa", "Bairro dos Barrios", "Rua das Ruas", "37B");
$junior = new Titular(new CPF('123.123.123-12'), 'Júniior Silva', $endereco);
$primeiraConta = new Conta($junior);
$primeiraConta->setDepositar(500);
$primeiraConta->setSacar(300);

echo $primeiraConta->getNomeTitular() . PHP_EOL;
echo $primeiraConta->getCpfTitular() . PHP_EOL;
echo $primeiraConta->getSaldo() . PHP_EOL;

var_dump($primeiraConta);

echo Conta::getNumeroDeContas();


