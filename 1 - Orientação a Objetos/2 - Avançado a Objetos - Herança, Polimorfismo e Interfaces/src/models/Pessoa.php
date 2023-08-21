<?php

class Pessoa
{
  // Protected consegue acessar esse atributo de outras classes que estão sendo herdadads a classe mãe
  protected string $nome;
  private CPF $cpf;

  public function __construct(string $nome, CPF $cpf)
  {
    $this->nome = $nome;
    $this->cpf = $cpf;
    $this->validarNomeTitular($nome);
  }

  public function getNome(): string
  {
    return $this->nome;
  }

  public function getCpf(): string
  {
    return $this->cpf->getNumero();
  }

  protected function validarNomeTitular(string $nomeTitular)
  {
    if (strlen($nomeTitular) < 5) {
      echo "Nome precisa ter pelo menos 5 caracteres";
      exit();
    }
  }
}
