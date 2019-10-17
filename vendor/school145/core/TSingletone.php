<?php

namespace school145;

trait TSingletone
{
    private static $instance;

    public static function instance()
    {
        if(self::$instance === null) // если свойство пусто
        {
            self::$instance = new self; // положим в него объект
        }
        return self::$instance; // вернем свойство
    }
}



?>