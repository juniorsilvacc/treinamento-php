<?php

interface IUsuario
{
    public function add(Usuario $usuario);
    public function findAll(): array;
    public function findById($id);
    public function findByEmail($email);
    public function remove($id): void;
    public function update(Usuario $usuario);
}
