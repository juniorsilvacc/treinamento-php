<?php

$senha = '123';

$crip = password_hash($senha, PASSWORD_BCRYPT);

echo 'Senha original: ' . $senha;
echo 'Senha Crip: ' . $crip;


$hash = '$2y$10$v9anrvp.PsErAF6zgpKWyuz16oYwnxahZrXs86akRha670CJCljTi';

if (password_verify($senha, $hash)) {
    echo 'Senha correta';
} else {
    echo 'Senha incorreta';
}
