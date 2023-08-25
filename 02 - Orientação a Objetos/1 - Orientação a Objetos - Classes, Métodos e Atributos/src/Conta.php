<?php

class Conta
{

    private Titular $titular;
    private $saldo;

    // Atributo da classe em sí, Static
    private static $numeroDeContas = 0;

    public function __construct(Titular $titular)
    {
        // Minha intância vai recber o cpf passado por parametro
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

    // Destroí qualquer instância que não está sendo apontada pra alguma variável
    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function setSacar(float $valorASacar): void
    {
        if ($valorASacar > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valorASacar;
    }

    public function setDepositar(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        }

        $this->saldo += $valorADepositar;
    }

    public function setTransferir(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->setSacar($valorATransferir);
        $contaDestino->setDepositar($valorATransferir);
    }

    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public function getNomeTitular(): string
    {
        return $this->titular->getNome();
    }

    public function getCpfTitular(): string
    {
        return $this->titular->getCpf();
    }

    public static function getNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }
}
