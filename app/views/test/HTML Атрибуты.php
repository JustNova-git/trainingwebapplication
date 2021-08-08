

<?php
$question = "Для чего преднозначены атрибуты в HTML?";
$a = "Для хранения переменных";
$b = "Для заполнения документа";
$c = "Для определения характеристик html-элемента ";
$d = "После HTML4 не используются";

if (isset($_POST['radio'])) {
    $answer = $_POST['radio'];
    if ($answer == 3) {
        $result = "Правильный ответ!";

        $idUser = $user['id'];

        $resulttest_0 = R::getAll("SELECT * FROM `resulttest` WHERE id_test = {$idTest} AND `id_user` = ?", [$idUser]);
        if (!$resulttest_0) {
            $resulttest = R::dispense('resulttest');

            $resulttest->id_user = $idUser;
            $resulttest->id_test = $idTest;
            $resulttest->result = 1;


            R::store($resulttest);
        }
    } else {
        $result = "Неверный ответ!";
    }
}

?>