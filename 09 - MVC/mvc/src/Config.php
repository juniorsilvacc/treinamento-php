<?php

namespace src;

class Config
{
    public const BASE_DIR = '/php-cursos/mvc/public';

    public const DB_DRIVER = 'mysql';
    public const DB_HOST = 'localhost:3306';
    public const DB_DATABASE = 'mvccrud';
    public const DB_USER = 'root';
    public const DB_PASS = '';

    public const ERROR_CONTROLLER = 'ErrorController';
    public const DEFAULT_ACTION = 'index';
}
