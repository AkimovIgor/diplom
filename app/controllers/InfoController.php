<?php

namespace app\controllers;



class InfoController extends AppController
{
    public function viewAction()
    {
        $controller = $this->route['controller'];
        $category = \R::findOne('category', 'alias = ?', [$controller]);
        $info = \R::getRow('SELECT * FROM info');
        //\debug($info, 1);
        if(!$category)
        {
            throw new \Exception('Страница не найдена', 404);
        }
        if(!$info)
        {
            throw new \Exception('Страница не найдена', 404);
        }
        $this->setMeta($category->title, $category->description, $category->keywords);
        $this->set(compact('category', 'info'));
    }

    
}


?>