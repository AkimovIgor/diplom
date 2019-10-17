<?php

namespace app\controllers;

use app\models\User;
use school145\libs\Pagination;
use app\models\AppModel;

class UserController extends AppController
{
    public function signupAction()
    {
        if(!empty($_POST))
        {
            $user = new User();
            $data = $_POST;
            $user->load($data);
            if(!$user->validate($data) || !$user->checkUnique())
            {
                $user->getErrors();
                $_SESSION['form-data'] = $data;
                //debug($user); 
            }
            else
            {
                $user->attributes['password'] = password_hash($user->attributes['password'], PASSWORD_DEFAULT);
                if($user->save('users')) // если данные сохранены
                {
                    $_SESSION['success'] = 'Регистрация прошла успешно';
                    unset($_SESSION['form-data']);
                }
                else
                {
                    $_SESSION['error'] = 'Ошибка регистрации!';
                }
            }
            redirect();
        }
        $this->setMeta('Регистрация');
    }

    public function loginAction()
    {
        
        if(!empty($_POST)){
            $user = new User();
            $data = $_POST;
            //\debug($_SESSION['user'], 1);
            if($user->login())
            {
                $_SESSION['success'] = 'Вход в учетную запись выполнен!';
                
                if($_SESSION['user']['role'] == 'admin')
                {
                    redirect(PATH.'/admin');
                }
            }
            else
            {
                $_SESSION['error'] = 'Неверный логин/пароль!';
            }

            $_SESSION['form-data'] = $data;

            
            
            redirect();
        }
        $this->setMeta('Вход');
    }

    public function logoutAction()
    {
        if(isset($_SESSION['user']))
        {
            unset($_SESSION['user']);
            redirect(PATH);
        }
    }

    public function manageAction()
    {
        $this->setMeta('Профиль пользователя');
        if(isset($_SESSION['user']))
        {
            if($_SESSION['user']['role'] == 'admin')
            {
                redirect(PATH.'/admin');
            }
        }
        else
        {
            redirect('login');
        }
    }

    public function postsAction()
    {
        $this->setMeta('Список статей');
        $user = isset($_GET['id']) ? (int)$_GET['id'] : (int)$_SESSION['user']['id'];
        if(isset($_SESSION['user']))
        {
            $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
            
            $perpage = 6;
            $count = \R::count('posts', 'status=? AND autor=?', ['1', $user]);
            $pagination = new Pagination($page, $perpage, $count);
            $start = $pagination->getStart();

            $posts = \R::findAll("posts", "status=? AND autor=? ORDER BY date DESC LIMIT $start, $perpage", ['1', $user]);
            $users = \R::findAll('users');

            $this->set(compact('posts', 'users', 'user', 'pagination'));
            $this->setMeta('Мои посты', 'Школа № 145 г. Донецка', 'моу школа 145 донецк');
        }
        else
        {
            redirect('login');
        }
    }


    public function addAction()
    {
        $this->setMeta('Добавление поста');
        if(isset($_SESSION['user']))
        {
            $post = \R::dispense('posts');
            $categories = \R::findAll('categories');

            if(!$post)
            {
                throw new \Exception("Страница не найдена", 404);
            }
            
            
            if(!empty($_POST))
            {
                $app = new AppModel();
                $post->title = $_POST['title'];
                $post->alias = $app->strToUrl($_POST['title']);
                $post->category_id = 1;
                $post->img = '/images/'.$_POST['img'];
                $post->autor = $_SESSION['user']['id'];
                $post->status = '0';
                $post->date = date('Y-m-d H:i:s');
                $post->content = $_POST['content'];
                $post->keywords = '';
                $post->description = '';

                \R::store($post);
                $_SESSION['success'] = 'Статья добавлена';
                redirect();
            }
        }
        else
        {
            redirect('login');
        }
    }

    public function addimgAction()
    {
        $this->setMeta('Добавление фотографии');
        if(isset($_SESSION['user']))
        {
            $img = \R::dispense('gallery');
            $categories = \R::findAll('categories');

            if(!$img)
            {
                throw new \Exception("Страница не найдена", 404);
            }
            
            
            if(!empty($_POST))
            {
                $img->title = $_POST['title'];
                $img->img = '/images/'.$_POST['img'];
                $img->description = $_POST['description'];
                $img->status = '0';

                \R::store($img);
                $_SESSION['success'] = 'Фото добавлено';
                redirect();
            }
        }
        else
        {
            redirect('login');
        }
    }
}
?>