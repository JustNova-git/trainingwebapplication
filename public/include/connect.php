<?php session_start();
include 'rb.php';
$connect = R::setup(
	'mysql:host=localhost;dbname=trainingwebapplication',
	'root',
	'root'
);
$link = mysqli_connect('localhost', 'root', 'root', 'trainingwebapplication');
// $host = "https://" . $_SERVER['HTTP_X_ORIGINAL_HOST'];
if (!$link) die('No DB connection!');

if (!R::testConnection()) die('No DB connection!');

if ($_SESSION) {
	$user = R::getAll('SELECT * FROM `users` WHERE `id` = ?', [$_SESSION['user'][0]['id']]);
	$user = $user[0];
} else {
	echo "";
}
