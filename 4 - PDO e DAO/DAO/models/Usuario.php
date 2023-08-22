<?php

class Usuario
{
    private int $id;
    private string $nome;
    private string $email;

    // public function __construct(int $id, string $nome, string $email)
    // {
    //     $this->id = $id;
    //     $this->nome = $nome;
    //     $this->email = $email;
    // }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = trim($id);

        return $this;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = ucwords(trim($nome));

        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = strtolower(trim($email));

        return $this;
    }
}
