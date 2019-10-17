<?php

namespace app\controllers;

use school145\libs\Pagination;
use school145\App;

class MainController extends AppController
{
    public function indexAction()
    {
        // если $_GET не существует, по умолчанию равен 1
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $perpage = 6;
        $count = \R::count('posts', 'status=?', ['1']);
        $pagination = new Pagination($page, $perpage, $count);
        $start = $pagination->getStart();

        $posts = \R::findAll("posts", "status=? ORDER BY date DESC LIMIT $start, $perpage", ['1']);
        $users = \R::findAll('users');

        $this->set(compact('posts', 'users', 'pagination'));
        $this->setMeta('МОУ "Школа № 145 г. Донецка"', 'Школа № 145 г. Донецка', 'моу школа 145 донецк');
    }
    
}


?>