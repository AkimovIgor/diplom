<?php

namespace school145\base;
use school145\Db;
use Valitron\Validator as V;
// Класс работы с данными
abstract class Model
{
    // массив свойств модели, идентичен полям в таблице БД
    public $attributes = [];
    public $errors = [];
    public $rules = [];

    public function __construct()
    {
        Db::instance();
    }

    // Загрузка данных в модель
    public function load($data)
    {
        foreach ($this->attributes as $name => $value) {
            if(isset($data[$name]))
            {
                $this->attributes[$name] = $data[$name];
            }
        }
    }

    // Обновление данных
    public function update($table, $id){
        $bean = \R::load($table, $id);
        foreach($this->attributes as $name => $value){
            $bean->$name = $value;
        }
        return \R::store($bean);
    }

    // Валидация данных на сервере
    public function validate($data)
    {
        $v = new V($data);
        $v->rules($this->rules);
        if($v->validate())
        {
            return true;
        }
        $this->errors = $v->errors();
        return false;
    }

    // Метод вывода ошибок
    public function getErrors()
    {
        $errors = '<ul>';
        foreach ($this->errors as $error) {
            foreach ($error as $item) {
                $errors .= '<li>' . $item . '</li>';
            }
        }
        $errors .= '</ul>';
        $_SESSION['error'] = $errors;
    }

    public function save($table)
    {
        $tbl = \R::dispense($table);
        foreach ($this->attributes as $name => $value) {
            $tbl->$name = $value;
        }
        // сохранение данных в таблицу
        return \R::store($tbl);
    }
}




?>