<?php

namespace Alura\Solid\Model;

class FeedBack
{
    private int $nota;
    private ?string $depoimento;

    public function __construct(int $nota, ?string $depoimento)
    {
        $this->nota = $nota;
        $this->depoimento = $depoimento;

        if ($nota < 9 && empty($depoimento)) {
            throw new \DomainException('Depoimento obrigatório');
        }
    }

    public function getNota()
    {
        return $this->nota;
    }

    public function getDepoimento()
    {
        return $this->depoimento;
    }
}
