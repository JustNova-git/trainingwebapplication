

<?php
$question = "Какая единица измерения устанавливает значение в пикселях экрана";
$a = "em";
$b = "pc";
$c = "pt";
$d = "px";

if (isset($_POST['radio'])) {
    $answer = $_POST['radio'];
    if ($answer == 4) {
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