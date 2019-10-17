<?php

namespace school145\base;

abstract class Controller
{
    public $route; 
    public $controller; 
    public $model;
    public $layout;
    public $view;
    public $prefix;
    public $data  = [];
    public $meta  = [];

    public function __construct($route)
    {
        $this->route = $route;
        $this->controller = $route['controller'];
        $this->model = $route['controller'];
        $this->view = $route['action'];
        $this->prefix = $route['prefix'];
    }

    // Получение вида
    public function getView()
    {
        $viewObject = new View($this->route, $this->layout, $this->view, $this->meta);
        $viewObject->render($this->data);
    }

    // Метод добавления данных
    public function set($data)
    {
        $this->data = $data;
    }

    // Метод добавления данных
    public function setMeta($title='', $desc='', $keywords='')
    {
        $this->meta['title'] = $title;
        $this->meta['desc'] = $desc;
        $this->meta['keywords'] = $keywords;
    }
}

?>