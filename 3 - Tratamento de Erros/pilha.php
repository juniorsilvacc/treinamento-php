<?php

function funcao1()
{
    echo 'Entrei na função 1' . PHP_EOL;
    try {
      $arrayFixo = new SplFixedArray(2);
      $arrayFixo[3] = 'Valor';
      // $divisao = intdiv(dividend: 5, divisor: 0);

      // Qualquer erro ou exeption que for lançada
    } catch (Throwable $problema) {
      echo $problema->getMessage() . PHP_EOL;
      echo $problema->getLine() . PHP_EOL;
      echo $problema->getTraceAsString() . PHP_EOL;
    }

    // Exceção específica -> RuntimeException
    // Erros genericos -> Exception, Error, Throwable

    // Quando já sabe qual o erro que pode causar, lança a exception mais expecífica
    
    funcao2();
    echo 'Saindo da função 1' . PHP_EOL;
}

function funcao2()
{
    echo 'Entrei na função 2' . PHP_EOL;
    for ($i = 1; $i <= 5; $i++) {
      echo $i . PHP_EOL;
    }
    echo 'Saindo da função 2' . PHP_EOL;

    throw new RuntimeException("Erro aqui");
}

echo 'Iniciando o programa principal' . PHP_EOL;
funcao1();
echo 'Finalizando o programa principal' . PHP_EOL;