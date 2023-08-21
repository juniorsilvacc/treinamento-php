<?php

class Autenticador
{

  public function tentaAutenticar(IAutenticavel $autenticavel, string $senha): void
  {
    if ($autenticavel->podeAutenticar($senha)) {
      echo "ok, usuário logado com sucesso";
    } else {
      echo "senha incorreta";
    }
  }
}
