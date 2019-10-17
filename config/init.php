<?php

// Режим разработки
// 1 - включение ошибок
// 0 - отключение ошибок
define('DEBUG', 0);
// Корень папок
define('ROOT', dirname(__DIR__));
// папка public
define('WWW', ROOT . '/public');
// папка app
define('APP', ROOT . '/app');
// папка core
define('CORE', ROOT . '/vendor/school145/core');
// папка libs
define('LIBS', ROOT . '/vendor/school145/core/libs');
// папка cashe
define('CACHE', ROOT . '/tmp/cache');
// папка config
define('CONF', ROOT . '/config');
// слой по умолчанию
define('LAYOUT', 'school');

// Полный путь к index.php
$app_path = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";
// вырезаем с конца строки index.php
$app_path = preg_replace("#[^/]+$#", '', $app_path);
// заменяем /public
$app_path = str_replace("/public/", '', $app_path);
// URL главной страницы
define('PATH', $app_path);
// Админка
define('ADMIN', PATH . '/admin');
// Подключение автозагрузчика
require_once (ROOT . '/vendor/autoload.php');
