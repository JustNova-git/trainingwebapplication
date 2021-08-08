<?php

namespace app\controllers;

class usersController extends AppController
{
    public $layout = 'users'; // Название шаблона
    // public $view = ''; // Название шаблона

    public function indexAction()
    {
        include "include/connect.php";
        $title = 'Пользователи';

        // $host = $this->host; // Корневой домен
        $this->set(compact('res', 'title', 'host', 'user'));
    }

    public function profileAction()
    {
        include "include/connect.php";
        $title = 'Профиль';

        // $host = $this->host; // Корневой домен
        $this->set(compact('res', 'title', 'host', 'user'));
    }
    public function newprofileAction()
    {
        include "include/connect.php";
        $title = 'Профиль';

        // $host = $this->host; // Корневой домен
        $this->set(compact('res', 'title', 'host', 'user'));
    }
}
