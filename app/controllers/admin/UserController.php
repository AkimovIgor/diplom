<?php

namespace app\controllers\admin;

use app\models\User;
use school145\libs\Pagination;

class UserController extends AppController
{
    public function indexAction()
    {
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $perpage = 10;
        $countUsers = \R::count('users');
        $pagination = new Pagination($page, $perpage, $countUsers);
        $start = $pagination->getStart();
        $users = \R::findAll('users', "LIMIT $start, $perpage");
        $this->setMeta('Список пользователей', 'Список пользователей', 'пользователи');
        $this->set(compact('users', 'pagination', 'countUsers'));
    }

    public function addAction()
    {
        $this->setMeta("Добавление нового пользователя");
    }

    public function editAction()
    {
        if(!empty($_POST)){
            $id = $this->getRequestId(false);
            $user = new \app\models\admin\User();
            $data = $_POST;
            $user->load($data);
            if(!$user->attributes['password'])
            {
                unset($user->attributes['password']);
            }
            else{
                $user->attributes['password'] = password_hash($user->attributes['password'], PASSWORD_DEFAULT);
            }

            if(!$user->validate($data) || !$user->checkUnique())
            {
                $user->getErrors();
                redirect();
            }
            if($user->update('users', $id))
            {
                $_SESSION['success'] = 'Изменения сохранены';
                
            }
            redirect();
        }

        $user_id = $this->getRequestId();
        $user = \R::load('users', $user_id);
        $users = \R::findAll('users');

        if(!$user)
        {
            throw new \Exception("Страница не найдена", 404);
        }
        $this->setMeta("Редактирование пользователя № {$user_id} | {$user['name']}");
        $this->set(compact('user', 'users'));
        
        
    }

    // Авторизация пользователя в админке
    public function loginAdminAction()
    {
        if(!empty($_POST))
        {
            $user = new User();
            if(!$user->login(true))
            {
                $_SESSION['error'] = 'Неверный логин/пароль!';
            }
            if($user::isAdmin())
            {
                redirect(ADMIN);
            }
            else
            {
                redirect();
            }
        }
        $this->layout = 'login';
    }
}



?>