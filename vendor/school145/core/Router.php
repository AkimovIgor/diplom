<?php

namespace school145;

class Router
{
    // маршрут
    protected static $routes = [];
    // готовый маршрут
    protected static $route = [];


    // Добавление маршрута
    // $regexp - регулярное выражение 
    // $route - маршрут
    public static function add($regexp, $route = [])
    {
        self::$routes[$regexp] = $route;
    }

    public static function getRoutes()
    {
        return self::$routes;
    }

    public static function getRoute()
    {
        return self::$route;
    }

    public static function dispatch($url)
    {
        $url = self::removeQueryString($url);
        if(self::matchRoute($url))
        {
            $controller = 'app\controllers\\' . self::$route['prefix'] . self::$route['controller'] . 'Controller';
            if(class_exists($controller)) // существует ли класс 
            {
                // создаем новый объект и передаем текущий маршрут
                $controllerObject = new $controller(self::$route);
                $action = self::lowerCamelCase(self::$route['action']) . 'Action';
                if(method_exists($controllerObject, $action))
                {
                    $controllerObject->$action();
                    $controllerObject->getView();
                }
                else
                {
                    throw new \Exception('Метод ' . $controller . '::' . $action . ' не найден!');
                }
            }
            else
            {
                throw new \Exception('Контроллер ' . $controller . ' не найден!');
            }
        }
        else
        {
            throw new \Exception('Страница не найдена!', 404);
        }
    }

    public static function matchRoute($url)
    {
        foreach(self::$routes as $pattern => $route)
        {
            if(preg_match("#{$pattern}#i", $url, $matches))
            {
                foreach ($matches as $match => $value) {
                    if(is_string($match))
                    {
                        $route[$match] = $value;
                    }
                }
                if(empty($route['action']))
                {
                    // if(!empty($route['controller']))
                    // {
                    //     if($route['controller'] == '#'){
                    //         $route['action'] = '#';
                    //     }
                    //     elseif($route['controller'] == '/'){
                    //         $route['action'] = '';
                    //     }
                    //     else{
                    //         $route['action'] = $route['controller'];
                    //     }
                        
                    // }
                    // else
                    // {
                    // }
                    
                        $route['action'] = 'index';
                }
                if(!isset($route['prefix']))
                {
                    $route['prefix'] = '';
                }
                else
                {
                    $route['prefix'] .= '\\';
                }
                $route['controller'] = self::upperCamelCase($route['controller']);
                self::$route = $route;
                return true;
            }
        }
        return false;
    }

    // Метод форморования названия к виду CamelCase
    protected static function upperCamelCase($name)
    {
        $name = str_replace('-', ' ', $name);
        $name = ucwords($name);
        $name = str_replace(' ', '', $name);
        return $name;
    }

    // Метод форморования названия к виду camelCase
    protected static function lowerCamelCase($name)
    {
        $name = lcfirst(self::upperCamelCase($name));
        return $name;
    }


    // Очищает GET параметры из адресной строки
    protected static function removeQueryString($url)
    {
        if($url)
        {
            // Разделение по символу & GET параметров
            $params = explode('&', $url, 2);
            if(false === strpos($params[0], '='))
                return rtrim($params[0], '/');
            else
                return '';
        }
    }













}




?>