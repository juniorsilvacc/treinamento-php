<?php

class ContaPoupanca extends Conta
{

  protected function percentualTarfica(): float
  {
    return 0.03;
  }
}
