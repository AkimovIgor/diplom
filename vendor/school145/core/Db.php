<?php

namespace school145;

class Db
{
    use TSingletone;

    protected function __construct()
    {
        $db = require_once CONF . '/config_db.php'; // данные в виде массива для подкл. к БД

        class_alias('\RedBeanPHP\R', '\R');

        \R::setup($db['dsn'], $db['user'], $db['pass']); // Установка соединения с БД

        if(!\R::testConnection()) // если соединение с БД не установлено
        {
            throw new \Exception('Соединение с базой данных не установлено!', 500);
        }
        \R::freeze(TRUE);
        if(DEBUG)
        {
            \R::debug(TRUE, 1);
        }
    }
}




?>