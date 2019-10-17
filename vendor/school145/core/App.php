<?php

namespace school145;

class App
{
    public static $app; // контейнер для параметров приложения

    public function __construct()
    {
        $query = trim($_SERVER['QUERY_STRING'], '/');
        session_start();
        // Объект реестра
        self::$app = Registry::instance();
        $this->getParams();
        new ErrorHandler();
        Router::dispatch($query);
    }

    protected function getParams()
    {
        $params = require_once CONF . '/params.php';

        if(!empty($params))
        {
            foreach ($params as $param => $value) {
                self::$app->setProperty($param, $value);
            }
        }
    }
}

?>