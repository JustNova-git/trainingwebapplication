<?php
include "../rb.php";
$connect = R::setup(
    'mysql:host=localhost;dbname=trainingwebapplication',
    'root',
    'root'
);
echo "<pre>";
print_r($_POST);
echo "</pre>";

$nameAddCourse = $_POST['nameAddCourse'];
// $dataAddCourse = date('jS \of F Y h:i:s A');
$opicAddCourse = $_POST['opicAddCourse'];
$photoAddCourse = $_POST['photoAddCourse'];
// if(!$PhotoAddCourse){$PhotoAddCourse = }

// echo date('jS \of F Y h:i:s A');
if (!empty($nameAddCourse)) {

    $courses = R::dispense('courses');
    $courses->name = $nameAddCourse;
    $courses->data = time();
    $courses->opic = $opicAddCourse;
    $courses->photo = $photoAddCourse;
    R::store($courses);

    echo "Курс добавлен";
}
// $query = R::load('courses', $_SESSION['user'][0]['id']);
// $query->avatars = $avatar;
// R::store($query);
