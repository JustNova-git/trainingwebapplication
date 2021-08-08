<?php
include "../include/connect.php";
// include "function.php";

$avatar = $_POST['i'];
$query = R::load('users', $_SESSION['user'][0]['id']);
$query->avatars = $avatar;
R::store($query);

$_SESSION['user'][0]['avatars'] = $avatar;

// sendMessage('true', $avatar);
session_reset();
echo "<pre>";
print_r($_POST);
echo "</pre>";
