<?php
include "../rb.php";
$connect = R::setup(
    'mysql:host=localhost;dbname=trainingwebapplication',
    'root',
    'root'
);
$idDelUser = $_POST['idDelUser'];

if (!empty($idDelUser)) {
    $users = R::load('users', $idDelUser);
    R::trash($users);
    echo "Пользователь удалён";
}
