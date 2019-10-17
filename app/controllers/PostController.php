<?php

namespace app\controllers;

use app\models\Breadcrumbs;

class PostController extends AppController
{
    // Просмотр конкретного поста
    public function viewAction()
    {
        $alias = $this->route['alias'];
        $post =  \R::findOne('posts', "alias = ? AND status = '1'", [$alias]);
        $user = \R::findOne('users', "id = ?", [$post->autor]);
        if(!$post)
        {
            throw new \Exception('Страница не найдена', 404);
        }
        if(!$user)
        {
            throw new \Exception('Страница не найдена', 404);
        }


        //$breadcrumbs = Breadcrumbs::getBreadcrumbs($post->id, $post->title);
        
        $this->setMeta($post->title, $post->description, $post->keywords);
        $this->set(compact('post', 'user'));
    }
}


?>