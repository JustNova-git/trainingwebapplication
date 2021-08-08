<?php

namespace app\controllers;

class NewsController extends AppController
{
    public $layout = 'news'; // Название шаблона

    public function indexAction()
    {
        include "include/connect.php";
        $title = 'Новости';

        // $host = $this->host; // Корневой домен
        $this->set(compact('res', 'title', 'host', 'user'));
    }
}
