

<?php
$question = "Для чего преднозначены теги в языке HTML?";
$a = "Для переадресации на другие страницы";
$b = "Для описания заголовков";
$c = "Для разграничения начала и конца элементов в разметке.";
$d = "Являются заменой обычному тексту";

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