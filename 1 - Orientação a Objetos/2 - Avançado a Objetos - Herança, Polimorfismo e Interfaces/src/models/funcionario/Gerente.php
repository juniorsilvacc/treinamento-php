<?php

class Gerente extends Funcionario implements IAutenticavel
{

  public function calcularBonificacao(): float
  {
    return $this->getSalario();
  }

  public function podeAutenticar(string $senha): bool
  {
    return $senha === '654321';
  }
}
