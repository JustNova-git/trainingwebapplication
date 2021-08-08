<?php

namespace vendor\core\base;

abstract class Controller
{
    public $route = [];
    public $view;
    public $layout; // Текущий шаблон
    public $vars = []; // Пользовательские данные
    public function __construct($route)
    {
        $this->route = $route;
        // $this->view = $route['action'];
        // include APP . "/views/{$route['controller']}/{$this->view}.php";
        $this->view = $route['action'];
    }
    public function getView()
    {
        $vObj = new view($this->route, $this->layout, $this->view); // Маршрут, шаблон, вид
        $vObj->render($this->vars);
    }
    public function set($vars)
    {
        $this->vars = $vars; // Передача переменных на страницу
    }
}
