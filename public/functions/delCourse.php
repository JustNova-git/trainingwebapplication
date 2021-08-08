<?php
include "../rb.php";
$connect = R::setup(
    'mysql:host=localhost;dbname=trainingwebapplication',
    'root',
    'root'
);
$idDelCourse = $_POST['idDelCourse'];

// if(!$PhotoAddCourse){$PhotoAddCourse = }

// echo date('jS \of F Y h:i:s A');
if (!empty($idDelCourse)) {
    $courses = R::load('courses', $idDelCourse);
    R::trash($courses);
}
// $query = R::load('courses', $_SESSION['user'][0]['id']);
// $query->avatars = $avatar;
// R::store($query);
