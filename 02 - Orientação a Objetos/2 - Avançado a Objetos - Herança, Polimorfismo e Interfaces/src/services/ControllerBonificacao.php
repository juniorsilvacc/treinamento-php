<?php

class ControllerBonificacao{

  private float $totalBonificacao = 0;

  public function adicionarBonificacao(Funcionario $funcionario) {
    $this->totalBonificacao += $funcionario->calcularBonificacao();
  }

  public function getTotalBonificacao(): float {
    return $this->totalBonificacao;
  }

}