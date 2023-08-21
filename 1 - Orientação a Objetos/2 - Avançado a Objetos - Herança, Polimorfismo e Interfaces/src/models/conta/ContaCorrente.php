<?php

class ContaCorrente extends Conta
{

  protected function percentualTarfica(): float
  {
    return 0.05;
  }

  public function setTransferir(float $valorATransferir, Conta $contaDestino): void
  {
    if ($valorATransferir > $this->saldo) {
      echo "Saldo indisponível";
      return;
    }

    $this->setSacar($valorATransferir);
    $contaDestino->setDepositar($valorATransferir);
  }
}
