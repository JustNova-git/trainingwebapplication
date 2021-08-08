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

if ($_POST) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $eror_count = 0;
    if (
        empty($login) ||
        empty($password)
    ) {
        sendMessage('error', 'Не все поля введены');
        $eror_count = 1;
    }
    if (!R::getAll('SELECT * FROM `users` WHERE `login` = ?', [$login])) {
        sendMessage('error', 'Такой пользователя не существует');
        $eror_count = 1;
    } else {
        $a = R::getAll('SELECT * FROM `users` WHERE `login` = ?', [$login]);
        if (password_verify($password, $a[0]['password'])) {
            $eror_count = 0;
        } else {
            sendMessage('error', 'Неверный пароль!');
            $eror_count = 1;
        }
    }
    if ($eror_count == 0) {
        $_SESSION['user'] = $a;
        sendMessage('true', "Авторизация прошла успешно!");
        $eror_count = 0;
    }
}
