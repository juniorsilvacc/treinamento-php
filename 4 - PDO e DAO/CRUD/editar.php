<?php

require 'config.php';

$info = [];
$id = filter_input(INPUT_GET, 'id');

if ($id) {
    $sql = $pdo->prepare('SELECT * FROM usuarios WHERE id = :id');
    $sql->bindValue(':id', $id);
    $sql->execute();

    if ($sql->rowCount() > 0) {
        $info = $sql->fetch(PDO::FETCH_ASSOC);
    } else {
        header('Location: index.php');
        exit;
    }
} else {
    header('Location: index.php');
    exit;
}

?>
<h1>Editar Usuário</h1>
<form action="editar_action.php" method="POST">
    <input type="hidden" name="id" value="<?=$info['id'];?>">

  <label for="nome">Nome:</label>
  <input id="nome" type="text" name="nome" value="<?=$info['nome'];?>" />

  <label for="email">E-mail:</label>
  <input id="email" type="email" name="email" value="<?=$info['email'];?>" />

  <input type="submit" value="Editar" />
</form>