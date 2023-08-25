<?php

class Desenvolvedor extends Funcionario
{

  public function sobeNivel()
  {
    return $this->aumentoSalario($this->getSalario() * 0.5);
  }

  public function calcularBonificacao(): float
  {
    return 500.0;
  }
}
