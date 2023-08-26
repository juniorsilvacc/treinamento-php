<?php

$username = 'root';
$password = 'root';

$pdo = new PDO('mysql:host=localhost;dbname=clean-code', $username, $password);

if (!isset($pdo)) {
    echo 'Error ao conectar no banco de dados';
}
