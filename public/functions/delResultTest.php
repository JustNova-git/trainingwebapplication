<?php
include "../include/rb.php";
$connect = R::setup(
    'mysql:host=localhost;dbname=trainingwebapplication',
    'root',
    'root'
);

$idUser = $_POST['i'];
$idTest = $_POST['j'];


$query = R::getAll("SELECT * FROM `resulttest` WHERE id_test = {$idTest} AND `id_user` = ?", [$idUser]);
$query = $query[0];
echo "<pre>";
print_r($query);
echo "</pre>";

$resulttest = R::load('resulttest', $query['id']);
R::trash($resulttest);
if ($resulttest) {
    echo "Результат теста сброшен!";
}
