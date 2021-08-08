<?php

namespace app\controllers;

use app\models\Main;

class MainController extends AppController
{
    public $layout = 'main'; // Название шаблона
    public function indexAction()
    {
        $title = 'Главная';
        $model = new Main;
        $model->table = "courses";
        $res = $model->findAll();
        // $host = $this->host; // Корневой домен

        $this->set(compact('res', 'title', 'host', 'user'));
    }
    public function CoursesAction()
    {
        include "include/connect.php";
        $model = new Main;
        $model->table = "courses";
        $res = $model->findAll();

        $title = 'Курсы';
        // $host = $this->host; // Корневой домен
        $this->set(compact('res', 'title', 'host', 'user'));
    }
    public function NewsAction()
    {
        include "include/connect.php";
        $model = new Main;
        $model->table = "courses";
        $res = $model->findAll();


        $title = 'Новости';
        // $host = $this->host; // Корневой домен
        $this->set(compact('res', 'title', 'host', 'user'));
    }
    public function OrganizationAction()
    {
        include "include/connect.php";
        // $model = new Main;
        // $model->table = "courses";
        // $res = $model->findAll();


        $title = 'Организация';
        // $host = $this->host; // Корневой домен
        $this->set(compact('res', 'title', 'host', 'user'));
    }
    public function TeamAction()
    {
        include "include/connect.php";
        // $model = new Main;
        // $model->table = "courses";
        // $res = $model->findAll();


        $title = 'Команда';
        // $host = $this->host; // Корневой домен
        $this->set(compact('res', 'title', 'host', 'user'));
    }
    public function aboutProgrammAction()
    {
        include "include/connect.php";
        // $model = new Main;
        // $model->table = "courses";
        // $res = $model->findAll();


        $title = 'О программе';
        // $host = $this->host; // Корневой домен
        $this->set(compact('res', 'title', 'host', 'user'));
    }
    public function aboutDeveloperAction()
    {
        include "include/connect.php";
        // $model = new Main;
        // $model->table = "courses";
        // $res = $model->findAll();


        $title = 'О разработчике';
        // $host = $this->host; // Корневой домен
        $this->set(compact('res', 'title', 'host', 'user'));
    }
    // public function messagesAction()
    // {
    //     include "include/connect.php";
    //     // $model = new Main;
    //     // $model->table = "courses";
    //     // $res = $model->findAll();


    //     $title = 'Сообщения';
    //     // $host = $this->host; // Корневой домен
    //     $this->set(compact('res', 'title', 'host', 'user'));
    // }
}
