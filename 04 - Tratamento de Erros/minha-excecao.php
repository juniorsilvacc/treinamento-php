<?php

class NomeMinhaException extends DomainException
{

  public function viewCpfInvelid() {
    echo "CPF Invalido";
  }

  // Ou

  public function __construct(float $valorSaque, float $saldoAtual)
  {
    $messagem = "Você tentou sacar $valorSaque, mas tem apenas $saldoAtual disponível";
    // $parent::__construct($messagem, $saldoAtual);
  }
  
}

try {

  // throw new MinhaException();
} catch (NomeMinhaException $e) {
  $e->viewCpfInvelid();
}
