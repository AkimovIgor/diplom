<?php

namespace school145;

class ErrorHandler
{
    public function __construct()
    {
        if(DEBUG) // если режим разработки активен
        {
            error_reporting(-1); // включаем отображение ошибок
        }
        else 
        {
            error_reporting(0); // отключаем отображение ошибок
        }
        set_exception_handler([$this, 'exceptionHandler']);
    }

    // метод для генерации исключений
    public function exceptionHandler($e)
    {
        $this->logErrors($e->getMessage(), $e->getFile(), $e->getLine());
        $this->displayErrors('Исключение', $e->getMessage(), $e->getFile(), $e->getLine(),  $e->getCode());
    }

    // метод для логирования ошибок
    // $message - текст ошибки
    // $file - файл, в котором произошла ошибка
    // $line - строка, на которой произошла ошибка
    protected function logErrors($message = '', $file='', $line='')
    {
        $error_text = "[" . date("Y-m-d H:i:s") . "] | Текст ошибки: " . $message . " | Файл: " . $file . " | Строка: " . $line;
        $separator = '';
        for($i = 0; $i < mb_strlen($error_text); $i++)
        {
            $separator .= "=";
        }
        $error_text .= "\n" . $separator . "\n";
        error_log($error_text, 3, ROOT.'/tmp/errors.log');
    }

    // метод отображения ошибок
    // $errno - номер ошибки
    // $errstr - текст ошибки
    // $errfile - файл, в котором произошла ошибка
    // $errline - строка, на которой произошла ошибка
    // $response - HTTP код ошибки
    protected function displayErrors($errno, $errstr, $errfile, $errline, $response = 404)
    {
        http_response_code($response);
        if($response == 404 && !DEBUG) // если HTTP код ошибки = 404 и отключен режим разработки
        {
            require WWW . '/errors/404.php';
            die;
        }

        if(DEBUG) // если включен режим разработки
        {
            require WWW . '/errors/dev.php';
        }
        else // если отключен режим разработки
        {
            require WWW . '/errors/prod.php';
        }
        die;
    }











}


?>