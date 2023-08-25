<?php

class Titular
{
    private CPF $cpf;
    private $nome;

    public function __construct(CPF $cpf, string $nome)
    {
        $this->cpf = $cpf;
        $this->validarNomeTitular($nome);
        $this->nome = $nome;
    }

    public function getCpf(): string
    {
        return $this->cpf->getNumero();
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    private function validarNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }
}
