<?php

require_once 'src/models/Pessoa.php';
require_once 'src/models/funcionario/Funcionario.php';
require_once 'src/models/funcionario/Diretor.php';
require_once 'src/models/funcionario/Gerente.php';
require_once 'src/models/funcionario/Desenvolvedor.php';
require_once 'src/models/funcionario/EditorVideo.php';
require_once 'src/models/CPF.php';
require_once 'src/services/ControllerBonificacao.php';

$umDesenvolvedor = new Desenvolvedor('Júniior Silva', new CPF('123.123.123-24'), 1000);

$umaGerente = new Gerente('Leontina Dias', new CPF('321.321.321-33'), 3000);

$umDiretor = new Diretor('Henrique Paulo', new CPF('111.222.333-44'), 5000);

$umEditorVideo = new EditorVideo('Gabriel', new CPF('333.111.222-55'), 800);

$controlador = new ControllerBonificacao();

$controlador->adicionarBonificacao($umDesenvolvedor);
$controlador->adicionarBonificacao($umaGerente);
$controlador->adicionarBonificacao($umDiretor);
$controlador->adicionarBonificacao($umEditorVideo);

echo $controlador->getTotalBonificacao();
