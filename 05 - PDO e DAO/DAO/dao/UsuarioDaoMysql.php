<?php

require 'models/Usuario.php';
require 'repositories/IUsuario.php';

class UsuarioDAOMySQL implements IUsuario
{
    private $pdo;
    public function __construct(PDO $driver)
    {
        $this->pdo = $driver;
    }

    public function add(Usuario $usuario)
    {
        $sql = $this->pdo->prepare('INSERT INTO usuarios (nome, email) VALUES (:nome, :email)');
        $sql->bindValue(':nome', $usuario->getNome());
        $sql->bindValue(':email', $usuario->getEmail());
        $sql->execute();

        $usuario->setId($this->pdo->lastInsertId());

        return $usuario;
    }

    public function findAll(): array
    {
        $array = [];

        $sql = $this->pdo->query('SELECT * FROM usuarios');
        if ($sql->rowCount() > 0) {
            $data = $sql->fetchAll();

            foreach ($data as $item) { // Criar o objeto, preencher e jogar no array
                $usuario = new Usuario();
                $usuario->setId($item['id']);
                $usuario->setNome($item['nome']);
                $usuario->setEmail($item['email']);

                $array[] = $usuario;
            }
        }

        return $array;
    }

    public function findById($id)
    {
        $sql = $this->pdo->prepare('SELECT * FROM usuarios WHERE id = :id');
        $sql->bindValue(':id', $id);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $data = $sql->fetch();

            $usuario = new Usuario();
            $usuario->setId($data['id']);
            $usuario->setNome($data['nome']);
            $usuario->setEmail($data['email']);

            return $usuario;
        } else {
            return false;
        }
    }

    public function findByEmail($email)
    {
        $sql = $this->pdo->prepare('SELECT * FROM usuarios WHERE email = :email');
        $sql->bindValue(':email', $email);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $data = $sql->fetch();

            $usuario = new Usuario();
            $usuario->setId($data['id']);
            $usuario->setNome($data['nome']);
            $usuario->setEmail($data['email']);

            return $usuario;
        } else {
            return false;
        }
    }

    public function update(Usuario $usuario)
    {
        $sql = $this->pdo->prepare('UPDATE usuarios SET nome = :nome, email = :email WHERE id = :id');
        $sql->bindValue(':id', $usuario->getId());
        $sql->bindValue(':nome', $usuario->getNome());
        $sql->bindValue(':email', $usuario->getEmail());
        $sql->execute();

        return true;
    }

    public function remove($id): void
    {
        $sql = $this->pdo->prepare('DELETE FROM usuarios WHERE id = :id');
        $sql->bindValue(':id', $id);
        $sql->execute();
    }
}
