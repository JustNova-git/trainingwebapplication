<?php
namespace app\controllers;
class CourseController extends AppController
{
    public $layout = 'course'; // Название шаблона
    public function indexAction()
    {
        include "include/connect.php";
        $title = 'Курсы';
        // $host = $this->host; // Корневой домен
        $this->set(compact('res', 'title', 'host', 'user'));
    }
}
