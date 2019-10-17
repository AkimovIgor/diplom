<?php

namespace app\controllers\admin;

use school145\base\Controller;
use app\models\User;
use app\models\AppModel;

class AppController extends Controller
{
    public $layout = 'admin';

    public function __construct($route)
    {
        parent::__construct($route);
        // Если пользователь не админ и экшн не равен login-admin
        if(!User::isAdmin() && $route['action'] != 'login-admin') 
        {
            redirect(ADMIN.'/user/login-admin');
        }
        new AppModel();
    }

    // Плучение id из запроса
    public function getRequestId($get = true, $id = 'id')
    {
        if($get)
        {
            $data = $_GET;
        }
        else
        {
            $data = $_POST;
        }
        
        $id = !empty($data[$id]) ? (int)$data[$id] : null;
        if(!$id)
        {
            throw new \Exception('Страница не найдена', 404);
        }
        return $id;
    }
}