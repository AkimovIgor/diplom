<?php

namespace app\controllers;

class GeneralmainController extends AppController
{
    public function viewAction()
    {
        $controller = $this->route['controller'];
        $category = \R::findOne('category', 'alias = ?', [$controller]);
        if(!$category)
        {
            throw new \Exception('Страница не найдена', 404);
        }
        $this->setMeta($category->title, $category->description, $category->keywords);
        $this->set(compact('category'));
    }
}