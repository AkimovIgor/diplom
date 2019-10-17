<?php

namespace app\controllers;
use school145\libs\Pagination;

class GalleryController extends AppController
{
    public function viewAction()
    {
        $controller = $this->route['controller'];
        $category = \R::findOne('category', 'alias = ?', [$controller]);

        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $perpage = 8;
        $count = \R::count('gallery', "status = '1'");
        $pagination = new Pagination($page, $perpage, $count);
        $start = $pagination->getStart();

        $gallery = \R::findAll('gallery', "status = '1' LIMIT $start, $perpage");
        if(!$gallery || !$category)
        {
            throw new \Exception('Страница не найдена', 404);
        }
        $this->setMeta($category->title, $category->description, $category->keywords);
        $this->set(compact('gallery', 'category', 'pagination'));
    }
}