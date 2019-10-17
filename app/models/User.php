<?php

namespace app\models;


class User extends AppModel
{
    // Данные из формы 
    public $attributes = [
        'login' => '',
        'password' => '',
        'name' => '',
        'email' => '',
        'role' => 'user'
    ];

    public $rules = [
        'required' => [
            ['login'],
            ['password'],
            ['password2'],
            ['name'],
            ['email']
        ],
        'email' => [
            ['email']
        ],
        'lengthMin' => [
            ['password', 6]
        ],
        'equals' => [
            ['password', 'password2']
        ]
    ];

    // Проверка уникальности данных
    public function checkUnique()
    {
        $user = \R::findOne('users', "login = ? OR email = ?", [$this->attributes['login'], $this->attributes['email']]);
        if($user)
        {
            if($user->login == $this->attributes['login'])
            {
                    $this->errors['unique'][] = 'Этот логин уже занят!';
            }
            if($user->email == $this->attributes['email'])
            {
                    $this->errors['unique'][] = 'Этот email уже занят!';
            }
            return false;
        }
        return true;
    }

    public function login($is_admin = false)
    {
        $login = !empty(trim($_POST['login'])) ? trim($_POST['login']) : null;
        $password = !empty(trim($_POST['password'])) ? trim($_POST['password']) : null;
        if($login && $password)
        {
            if($is_admin)
            {
                $user = \R::findOne('users', "login = ? AND role = 'admin'", [$login]);
            }
            else
            {
                $user = \R::findOne('users', "login = ?", [$login]);
            }

            if($user)
            {
                if(password_verify($password, $user->password))
                {
                    foreach($user as $key => $value)
                    {
                        if($key != 'password') $_SESSION['user'][$key] = $value;
                    }
                    return true;
                }
            }
        }
        return false;
    }

    // Проверка, авторизован ли пользователь
    public static function checkAuth()
    {
        return isset($_SESSION['user']);
    }

    // Проверка, является ли пользователь админом
    public static function isAdmin()
    {
        return isset($_SESSION['user']) && $_SESSION['user']['role'] == 'admin';
    }
}

?>