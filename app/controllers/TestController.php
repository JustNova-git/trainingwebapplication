<?php
namespace app\controllers;
class TestController extends AppController
{
    public $layout = 'Test'; // Название шаблона
    public function indexAction()
    {
        include "include/connect.php";
        $title = 'Курсы';
        // $host = $this->host; // Корневой домен
        $this->set(compact('res', 'title', 'host', 'user'));
    }
}
