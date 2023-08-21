<?php

// Quando queremos executar um código mesmo após a instrução return, que pode estar no try ou no catch
try  {
    echo "Executando " . PHP_EOL;
    throw new Exception('Exceção aqui');
} catch (Throwable $e) {
    echo "Caindo no catch" . PHP_EOL;
} finally {
    echo "Finally" . PHP_EOL;
}