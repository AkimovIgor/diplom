<?php

namespace app\controllers;

class TeachersController extends AppController
{
    public function viewAction()
    {
        $controller = $this->route['controller'];
        $category = \R::findOne('category', 'alias = ?', [$controller]);
        $teachers = \R::findAll('teachers');
        if(!$teachers || !$category)
        {
            throw new \Exception('Страница не найдена', 404);
        }
        $this->setMeta($category->title, $category->description, $category->keywords);
        $this->set(compact('teachers', 'category'));
    }
}