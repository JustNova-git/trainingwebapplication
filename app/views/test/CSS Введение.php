

<?php
$question = "Выберите правильное определение CSS";
$a = "CSS - Это стандартизированный язык гипертекста";
$b = "CSS - Это стандартизированный язык для изменения цвета страницы ";
$c = "CSS - Это стандартизированный язык для изменения шрифта страницы";
$d = "CSS - Это простой язык дизайна, предназначенный для упрощения процесса презентации веб-страниц.";

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