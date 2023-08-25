<?php

class Diretor extends Funcionario implements IAutenticavel
{

  public function calcularBonificacao(): float
  {
    return $this->getSalario() * 2;
  }

  // public function autenticar(string $senha): bool
  // {
  //   return $senha === '123456';
  // }

  public function podeAutenticar(string $senha): bool
  {
    return $senha === '123456';
  }
}
