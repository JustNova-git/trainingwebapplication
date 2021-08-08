<?php
require 'connect.php';

function sendMessage($type, $message, $fileds = array())
{
    $response['type'] = $type;
    $response['message'] = $message;
    foreach ($fileds as $key => $value) {
        $response[$key] = $value;
    }
    die(json_encode($response));
}

$post = $_POST;
if ($_POST) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $activ = $_POST['activ'];
    $namee = $_POST['namee'];
    $surname = $_POST['surname'];
    $city = $_POST['city'];
    // $avatar_name = $_POST['avatar_name'];
    $eror_count = 0;
    if (
        empty($login) ||
        empty($password) ||
        empty($email) ||
        empty($namee) ||
        empty($surname) ||
        empty($city)
    ) {
        sendMessage('error', 'Не все поля введены');
        // echo "<pre>";
        // print_r($_POST);
        // echo "</pre>";
        $eror_count = 1;
    }
    $login = stripslashes($login);
    $login = htmlspecialchars($login);

    $password = stripslashes($password);
    $password = htmlspecialchars($password);

    $namee = stripslashes($namee);
    $namee = htmlspecialchars($namee);

    $surname = stripslashes($surname);
    $surname = htmlspecialchars($surname);

    $city = stripslashes($city);
    $city = htmlspecialchars($city);
    //удаляем лишние пробелы
    $login = trim($login);
    $password = trim($password);

    $namee = trim($namee);

    $surname = trim($surname);

    $city = trim($city);

    $dateYears = date('Y-m-d');

    if (strlen($login) > 40) {
        sendMessage('error', 'Логин не может превышать больше 40 символов');
        $eror_count = 1;
    }
    if (strlen($activ) > 20) {
        sendMessage('error', 'Деятельность не может превышать больше 20 символов');
        $eror_count = 1;
    }

    if (strlen($password) < 5) {
        sendMessage('error', 'Пароль должен быть менее 5 символов');
        $eror_count = 1;
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        sendMessage('error', 'Почта невалидна');
        $eror_count = 1;
    }

    if (R::find('users', 'login = ?', [$login])) {
        sendMessage('error', 'Такой пользователь уже существует!');
        $eror_count = 1;
    }
    if ($eror_count == 0) {
        $query = R::dispense('users');
        $query->groups = 6;
        $query->name = $namee;
        $query->surname = $surname;
        $query->city = $city;
        $query->datereg = date('Y-m-d, H:i:s');
        $query->login = $login;
        $query->ip = $_SERVER['REMOTE_ADDR'];
        $query->avatars = 0;
        $query->activing = $activ;
        $query->buildmy = 0;
        $query->password = password_hash($password, PASSWORD_DEFAULT);
        $query->email = $email;
        R::store($query);
        sendMessage('true', 'Пользователь успешно зарегистрирован');
        $eror_count = 0;
    }
}
