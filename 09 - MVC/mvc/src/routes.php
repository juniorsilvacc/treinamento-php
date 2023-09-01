<?php

use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');

// Exibir o form
$router->get('/novo', 'UsuariosController@add');

// Receber informações
$router->post('/novo', 'UsuariosController@addAction');


// Rotas dinamicas
$router->get('/usuario/{id}/editar', 'UsuariosController@edit');
$router->post('/usuario/{id}/editar', 'UsuariosController@editAction');


$router->get('/usuario/{id}/excluir', 'UsuariosController@del');
