<?php

namespace app\controllers\admin;

class MainController extends AppController
{
    public function indexAction()
    {
        $count_new_posts = \R::count('posts');
        $count_users = \R::count('users');
        $count_category = \R::count('category');
        $count_images = \R::count('gallery');
        $this->setMeta('Панель администрирования', 'Админка', 'Админка');
        $this->set(compact('count_new_posts', 'count_users', 'count_category', 'count_images'));
    }
}