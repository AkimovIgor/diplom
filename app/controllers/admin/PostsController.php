<?php

namespace app\controllers\admin;

use school145\libs\Pagination;

class PostsController extends AppController
{
    public function indexAction()
    {
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $perpage = 9;
        $count = \R::count('posts');
        $pagination = new Pagination($page, $perpage, $count);
        $start = $pagination->getStart();

        $users = \R::findAll('users');

        $posts = \R::getAll("SELECT posts.id, posts.category_id, posts.title, posts.date, posts.autor, posts.status, users.name FROM posts 
                    JOIN users ON posts.autor = users.id 
                    JOIN categories ON posts.category_id = categories.id 
                    GROUP BY posts.id ORDER BY posts.id LIMIT $start, $perpage");
        $categories = \R::findAll('categories');

        $this->setMeta('Список статей', 'Статьи', 'Статьи');
        $this->set(compact('posts', 'users', 'pagination', 'categories', 'count', 'start', 'perpage'));
    }

    public function showAction()
    {
        $post_id = $this->getRequestId();
        $post = \R::getRow("SELECT posts.*, users.name FROM posts 
                JOIN users ON posts.autor = users.id 
                JOIN categories ON posts.category_id = categories.id 
                WHERE posts.id = ?
                GROUP BY posts.id ORDER BY posts.status, posts.id LIMIT 1", [$post_id]);
        
        //debug($post, 1);
        $categories = \R::findAll('categories');
        $users = \R::findAll('users');

        if(!$post)
        {
            throw new \Exception("Страница не найдена", 404);
        }
        $this->setMeta("Статья № {$post_id} -- {$post['title']}");
        $this->set(compact('post' , 'categories', 'users'));
    }  
    
    public function editAction()
    {
        $post_id = $this->getRequestId();
        $status = !empty($_GET['status']) ? '1' : '0';
        $post = \R::load('posts', $post_id);
        if(!$post)
        {
            throw new \Exception("Страница не найдена", 404);
        }
        $post->status = $status;
        $store = \R::store($post); // Обновление данных
        if(!$store)
        {
            throw new \Exception("Страница не найдена", 404);
        }
        $_SESSION['success'] = $_GET['status'] == '1' ? 'Статья была успешно опубликована на сайте' : 'Статья была успешно скрыта с сайта';
        redirect();
        
    }

    public function deleteAction()
    {
        $post_id = $this->getRequestId();
        $post = \R::load('posts', $post_id);
        if(!$post)
        {
            throw new \Exception("Страница не найдена", 404);
        }
        \R::trash($post); // Удаление данных
        $_SESSION['success'] = 'Статья была успешно удалена!';
        redirect(ADMIN.'/posts');
        
    }

    public function changeAction()
    {
        $post_id = $this->getRequestId();
        $post = \R::load('posts', $post_id);
        //debug($post, 1);
        //debug($post, 1);
        $categories = \R::findAll('categories');
        $users = \R::findAll('users');

        if(!$post)
        {
            throw new \Exception("Страница не найдена", 404);
        }
        $this->setMeta("Статья № {$post_id} -- {$post['title']}");
        $this->set(compact('post' , 'categories', 'users'));
        
        if(!empty($_POST)){
            $post->title = $_POST['title'];
            $post->alias = $_POST['alias'];
            $post->category_id = $_POST['category'];
            $post->img = '/images/'.$_POST['img'];
            $post->autor = $_SESSION['user']['id'];
            $post->status = $_POST['status'];
            $post->date = $_POST['date'].' '.$_POST['time'] . ':00';
            $post->content = $_POST['content'];
            $post->keywords = $_POST['keywords'];
            $post->description = $_POST['description'];

            \R::store($post);
            $_SESSION['success'] = 'Статья изменена';
            redirect(ADMIN.'/posts');
        }
    }

    public function addAction()
    {
        // $post_id = $this->getRequestId();
        $post = \R::dispense('posts');
        // //debug($post, 1);
        // //debug($post, 1);
        $categories = \R::findAll('categories');
        // $users = \R::findAll('users');

        if(!$post)
        {
            throw new \Exception("Страница не найдена", 404);
        }
        
        
        if(!empty($_POST)){
            $post->title = $_POST['title'];
            $post->alias = $_POST['alias'];
            $post->category_id = $_POST['category'];
            $post->img = '/images/'.$_POST['img'];
            $post->autor = $_SESSION['user']['id'];
            $post->status = $_POST['status'];
            $post->date = $_POST['date'].' '.$_POST['time'] . ':00';
            $post->content = $_POST['content'];
            $post->keywords = $_POST['keywords'];
            $post->description = $_POST['description'];

            \R::store($post);
            $_SESSION['success'] = 'Статья добавлена';
            redirect();
        }
        $this->setMeta("Добавление статьи");
        $this->set(compact('post' , 'categories'));
    }
}