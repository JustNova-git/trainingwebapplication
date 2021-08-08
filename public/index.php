<?php

error_reporting(-1); // Поиск ошибок
use vendor\core\Router; // Использование класса Router 

$query = rtrim($_SERVER['QUERY_STRING'], '/');
define('WWW', __DIR__);
define('CORE', dirname(__DIR__) . '/vendor/core');
define('ROOT', dirname(__DIR__));
define('APP', dirname(__DIR__) . '/app');
define('LAYOUT', 'default');
require '../vendor/libs/functions.php';

spl_autoload_register(function ($class) { // автозагрузка классов
    $file = ROOT . '/' . str_replace('\\', '/', $class) . '.php'; // Заменяет обратный на слешь на прямой
    // echo "<pre>";
    // print_r($class);
    // echo "</pre>";
    if (is_file($file)) {
        require_once $file;
    }
});


Router::add('^page/?(?P<action>[a-z-]+)/(?P<alias>[a-z-]+)$',  ['controller' => 'MainPage']); // Правило для показа alias без его существования ?
Router::add('^page/(?P<alias>[a-z-]+)$',  ['controller' => 'MainPage', 'action' => 'index']); // Если action не прописан
Router::add('^$',  ['controller' => 'mainPage', 'action' => 'index']); // Роутер по умолчанию
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$'); // Роутер 
Router::dispatch($query);
