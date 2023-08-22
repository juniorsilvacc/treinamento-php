<?php

require 'config.php';
require 'dao/UsuarioDaoMysql.php';

$usuarioDao = new UsuarioDaoMysql($pdo);

$usuario = false;
$id = filter_input(INPUT_GET, 'id');

if ($id) {
    $usuario = $usuarioDao->findById($id);
}

if ($usuario === false) {
    header('Location: index.php');
    exit;
}
?>
<h1>Editar Usuário</h1>
<form action="editar_action.php" method="POST">
    <input type="hidden" name="id" value="<?=$usuario->getId();?>">

  <label for="nome">Nome:</label>
  <input id="nome" type="text" name="nome" value="<?=$usuario->getNome();?>" />

  <label for="email">E-mail:</label>
  <input id="email" type="email" name="email" value="<?=$usuario->getEmail();?>" />

  <input type="submit" value="Editar" />
</form>