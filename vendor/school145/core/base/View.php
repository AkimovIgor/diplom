<?php

namespace school145\base;

class View
{
    public $limit = 200;
    public $route; 
    public $controller; 
    public $model; 
    public $view;
    public $layout;
    public $prefix;
    public $data  = [];
    public $meta  = [];

    public function __construct($route, $layout='', $view='', $meta)
    {
        $this->route = $route;
        $this->controller = $route['controller'];
        $this->view = $view;
        $this->model = $route['controller'];
        $this->prefix = $route['prefix'];
        $this->meta = $meta;
        if($layout === false)
        {
            $this->layout = false;
        }
        else
        {
            $this->layout = $layout ?: LAYOUT;
        }
    }

    // Формирование страницы для пользователя
    public function render($data)
    {
        if(is_array($data))
        {
            extract($data);
        }
        $viewFile = APP . "/views/".$this->prefix."".$this->controller."/".$this->view.".php";
        if(is_file($viewFile))
        {
            ob_start(); // Включение буферизации
            require_once $viewFile;
            $content = ob_get_clean(); // Переменная вида
        }
        else{
            throw new \Exception('Не найден файл вида ' . $viewFile, 500);
        }
        if(false !== $this->layout)
        {
            $layoutFile = APP . "/views/layouts/" . $this->layout . ".php";
            if(is_file($layoutFile))
            {
                require_once $layoutFile;
            }
            else
            {
                throw new \Exception('Не найден файл шаблона ' . $this->layout, 500);
            }
        }
    }


    public function getMeta()
    {
        $output = '<title>'.$this->meta['title'].'</title>';
        $output .= '<meta name="description" content="'.$this->meta['desc'].'">';
        $output .= '<meta name="keywords" content="'.$this->meta['keywords'].'">';
        return $output;
    }

    // Метод обрезки постов
    public function stripPost($text)
    {
        //$text = htmlentities($text);

        //var_dump(strip_tags($text));die;
        // if(!mb_strpos($text, ' ')){
        //     return strip_tags($text).'...';
        // }
        // $str = mb_substr(strip_tags($text), 0, mb_strpos($text, ' ', $this->limit));
        // if($str)
        //     return mb_substr(strip_tags($text), 0, mb_strpos($text, ' ', $this->limit)).'...';
        // else
        //     return strip_tags($text).'...';
        $string = strip_tags($text);
        $string = mb_substr($string, 0, $this->limit,'UTF-8'); // обрезаем и работаем со всеми кодировками и указываем исходную кодировку
        $position = mb_strrpos($string, ' ', 'UTF-8'); // определение позиции последнего пробела. Именно по нему и разделяем слова
        if($position)
        {
            $string = mb_substr($string, 0, $position, 'UTF-8'); // Обрезаем переменную по позиции
        }
        $string = rtrim($string, "!,-");
        $string .= '...';
        return $string;
            
    }
}



?>