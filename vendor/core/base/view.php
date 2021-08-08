<?php

namespace vendor\core\base;

use app\controllers\App;

class view
{
    public $route = []; // Текущий маршрут
    public $view; // Текущий вид
    public $layout; // Текущий шаблон

    public function __construct($route, $layout = '', $view = '')
    {
        $this->route = $route;
        $this->layout = $layout ?: LAYOUT; // Если $layout пустой, то используется константа LAYOUT то есть Default
        $this->view = $view;
        if ($layout === false) {
            $this->layout = false;
        } else {
            $this->layout = $layout ?: LAYOUT;
        }
        // debug($layout);
        // debug($view);
    }

    public function render($vars)
    {
        if (is_array($vars)) {
            extract($vars);
        }
        $file_view = APP . "/views/{$this->route['controller']}/{$this->view}.php"; // Путь к текущему виду
        ob_start(); // включает буферизацию вывода
        if (is_file($file_view)) { // если файл существует
            // debug($this->view);
            require $file_view;  // Подключает страницу 
        } else {
            echo "<p>Не найден вид <b>{$file_view}</b></p>";
        }
        $content = ob_get_clean(); // возвращает содержимое буфера вывода
        if (false !== $this->layout) {
            $file_laouyt = APP . "/views/layouts/{$this->layout}.php";  // Путь к текущему шаблону 

            if (is_file($file_laouyt)) { // Если стартовый шаблон найден
                require $file_laouyt; // Подключает шаблон
            } else {
                echo "<p>Не найден шаблон <b>{$file_laouyt}</b></p>";
            }
        }
    }
}
