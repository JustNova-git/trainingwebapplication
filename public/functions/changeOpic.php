<?php
include "../include/connect.php";
include "function.php";

$opic = $_POST['opic'];
$query = R::load('users', $_SESSION['user'][0]['id']);
$query->opic = $opic;
R::store($query);

$_SESSION['user'][0]['opic'] = $opic;

echo $opic;
session_reset();
