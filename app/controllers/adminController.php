<?php

namespace app\controllers;

class adminController extends AppController
{
    public $layout = 'admin'; // Название шаблона
    // public $view = ''; // Название шаблона

    public function indexAction()
    {
        include "include/connect.php";
        $title = 'Админка';

        // $host = $this->host; // Корневой домен
        $this->set(compact('res', 'title', 'host', 'user'));
    }
}
