<?php

namespace app\controllers;

use school145\libs\Pagination;

class SearchController extends AppController
{
    public function typeheadAction()
    {
        if($this->isAjax())
        {
            $query = !empty(trim($_GET['query'])) ? trim($_GET['query']) : null;
            if($query)
            {
                $posts = \R::getAll('SELECT id, title FROM posts WHERE title LIKE ? LIMIT 5', ["%{$query}%"]);
                echo json_encode($posts);
            }
        }
        die;
    }

    public function indexAction()
    {
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $perpage = 4;
        
        $query = !empty(trim($_GET['s'])) ? trim($_GET['s']) : null;

        

        
        if($query)
        {
            $count = \R::count('posts', "title LIKE ? AND status = ? ORDER BY date DESC", ["%{$query}%", '1']);
            $pagination = new Pagination($page, $perpage, $count);
            $start = $pagination->getStart();

            $users = \R::findAll('users');
            $posts = \R::find('posts', "title LIKE ? AND status = ? ORDER BY date DESC LIMIT $start, $perpage", ["%{$query}%", '1']);
        }
        $this->setMeta('Результат поиска по: ' . hsc($query));
        $this->set(compact('posts', 'query', 'pagination', 'users'));
    }
}



?>