<?php

abstract class Conta
{

    private Titular $titular;
    protected $saldo;

    // Atributo da classe em sí, Static
    private static $numeroDeContas = 0;

    // 1 == CC e 2 == CP
    // private int $tipo;

    public function __construct(Titular $titular)
    {
        // Minha intância vai recber o cpf passado por parametro
        $this->titular = $titular;
        $this->saldo = 0;

        // $this->tipo = $tipo;

        self::$numeroDeContas++;
    }

    // Destroí qualquer instância que não está sendo apontada pra alguma variável
    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function setSacar(float $valorASacar): void
    {
        // if ($this->tipo === 1) {
        //     $tarifaSaque = $valorASacar * 0.05;
        // } else {
        //     $tarifaSaque = $valorASacar * 0.03;
        // }

        $tarifaSaque = $valorASacar * $this->percentualTarfica();
        $valorSaque = $valorASacar + $tarifaSaque;

        if ($valorSaque > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valorSaque;
    }

    public function setDepositar(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        }

        $this->saldo += $valorADepositar;
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

    // método que não existe, mas tenho que implementar ele em todas as classes que herdar
    abstract protected function percentualTarfica(): float;
}
