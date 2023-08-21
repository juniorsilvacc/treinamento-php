<?php

interface IAutenticavel
{

  public function podeAutenticar(string $senha): bool;
}
