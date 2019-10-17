<?php

namespace app\controllers\admin;

use school145\libs\Pagination;

class GalleryController extends AppController
{
    public function indexAction()
    {
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $perpage = 9;
        $count = \R::count('gallery');
        $pagination = new Pagination($page, $perpage, $count);
        $start = $pagination->getStart();

        $gallery = \R::findAll('gallery', "LIMIT $start, $perpage");

        $categories = \R::findAll('categories');

        $this->setMeta('Список фотографий', 'Фото', 'Фото');
        $this->set(compact('gallery', 'pagination', 'categories', 'count', 'start', 'perpage'));
    }
  
    
    public function editAction()
    {
        $img_id = $this->getRequestId();
        $status = !empty($_GET['status']) ? '1' : '0';
        $img = \R::load('gallery', $img_id);
        if(!$img)
        {
            throw new \Exception("Страница не найдена", 404);
        }
        $img->status = $status;
        $store = \R::store($img); // Обновление данных
        if(!$store)
        {
            throw new \Exception("Страница не найдена", 404);
        }
        $_SESSION['success'] = $_GET['status'] == '1' ? 'Фото было успешно опубликовано на сайте' : 'Фото было успешно скрыто с сайта';
        redirect();
        
    }

    public function deleteAction()
    {
        $img_id = $this->getRequestId();
        $img = \R::load('gallery', $img_id);
        if(!$img)
        {
            throw new \Exception("Страница не найдена", 404);
        }
        \R::trash($img); // Удаление данных
        $_SESSION['success'] = 'Фото было успешно удалено!';
        redirect(ADMIN.'/gallery');
        
    }

    public function changeAction()
    {
        $img_id = $this->getRequestId();
        $img = \R::load('gallery', $img_id);
        //debug($post, 1);
        //debug($post, 1);
        $categories = \R::findAll('categories');

        if(!$img)
        {
            throw new \Exception("Страница не найдена", 404);
        }
        $this->setMeta("Фото № {$img_id} {$img['title']}");
        $this->set(compact('img' , 'categories'));
        
        if(!empty($_POST)){
            $img->title = $_POST['title'];
            $img->img = '/images/'.$_POST['img'];
            $img->status = $_POST['status'];
            $img->description = $_POST['description'];

            \R::store($img);
            $_SESSION['success'] = 'Фото изменено';
            redirect();
        }
    }

    public function addAction()
    {
        // $post_id = $this->getRequestId();
        $img = \R::dispense('gallery');
        // //debug($post, 1);
        // //debug($post, 1);
        $categories = \R::findAll('categories');
        // $users = \R::findAll('users');

        if(!$img)
        {
            throw new \Exception("Страница не найдена", 404);
        }
        
        
        if(!empty($_POST)){
            $img->title = $_POST['title'];
            $img->img = '/images/'.$_POST['img'];
            $img->status = $_POST['status'];
            $img->description = $_POST['description'];

            \R::store($img);
            $_SESSION['success'] = 'Фото добавлено';
            redirect();
        }
        $this->setMeta("Добавление фото");
        $this->set(compact('img' , 'categories'));
    }
}