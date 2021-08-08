

<?php
$question = "Выбраьт правильный вариант при внедрении CSS методом @import";
$a = "<p><xmp><head>
<style type = \"text/css\" media = \"all\">
...
</style>
</head></xmp> </p>";
$b = '<p><xmp><head>
<link type = "text/css" href = "..." media = "..." />
</head></xmp> </p>';
$c = '<p><xmp><head>
@import "URL";
</head></xmp> </p>';
$d = '<p><xmp><style>...</style></xmp> </p>';

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