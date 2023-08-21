<?php

abstract class Funcionario extends Pessoa
{
  private float $salario;

  public function __construct(string $nome, CPF $cpf, float $salario)
  {
    parent::__construct($nome, $cpf);
    $this->salario = $salario;
  }

  abstract public function calcularBonificacao(): float;

  public function aumentoSalario(float $valorAumento): void
  {
    if (valorAumento < 0) {
      echo "O aumento tem que ser positivo";
      return;
    }

    $this->salario += $valorAumento;
  }

  public function getSalario(): float
  {
    return $this->salario;
  }

  public function setNome(string $nome): void
  {
    $this->validarNomeTitular($nome);
    $this->nome = $nome;
  }
}
