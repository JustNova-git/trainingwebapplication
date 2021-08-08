

<?php
$question = "Выберите верно оформленный вложенный HTML элемент";
$a = "<p><xmp><i1>Это курсивный текст</i1></xmp> </p>";
$b = "<p><xmp><i>Это курсивный текст</i> </xmp></p>";
$c = "<p><xmp><i/>Это курсивный текст<i> </xmp> </p>";
$d = "<p><xmp><i>Это курсивный текст<i/></xmp> </p>";

if (isset($_POST['radio'])) {
  $answer = $_POST['radio'];
  if ($answer == 2) {
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