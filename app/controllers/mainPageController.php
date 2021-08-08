<?php

namespace app\controllers;

class mainPageController extends AppController
{
    public $layout = 'mainPage'; // Название шаблона
    // public $view = ''; // Название шаблона

    public function indexAction()
    {
        // include "include/connect.php";

        $title = 'Главная страница';

        // error_reporting(0);
        // $host = $this->host; // Корневой домен
        $this->set(compact('res', 'title', 'user'));
    }
}
