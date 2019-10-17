<?php

namespace school145;

class Registry
{
    use TSingletone;

    // Свойства
    public static $properties = [];

    // Установка значения свойства
    public static function setProperty($name, $value)
    {
        self::$properties[$name] = $value;
    }

    // Получение значения свойства
    public static function getProperty($name)
    {
        if(self::$properties[$name]) // если свойство существует
        {
            return self::$properties[$name];
        }
        return null;
    }

    // Возвращает все свойства
    public static function getProperties()
    {
        return self::$properties;
    }
}



?>