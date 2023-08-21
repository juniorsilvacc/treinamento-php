<?php

// namespace com\banco\models\conta;

// use com\banco\models\Pessoa;
// use com\banco\models\CPF;
// use com\banco\models\Endereco;

class Titular extends Pessoa implements IAutenticavel
{

    private Endereco $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        // Chama o construtor da classe mãe antes de continuar com da classe filho
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    public function getEndereco(): Endereco
    {
        return $this->endereco;
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === '321321';
    }
}
