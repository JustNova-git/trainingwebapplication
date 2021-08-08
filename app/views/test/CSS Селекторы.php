

<?php
$question = "Выбрать правильный вариант задания общего стиля для нескольких селекторов";
$a = "<p><xmp>
h1, h2, h3 { color: #fff
</xmp> </p>";
$b = '<p><xmp>
h[h1], [h2], [h3] { color: #fff
</xmp> </p>';
$c = '<p><xmp>
h> h1, h2, h3 { color: #fff
</xmp> </p>';
$d = '<p><xmp>
h1=h2=h3 { color: #fff
</xmp> </p>';

if (isset($_POST['radio'])) {
  $answer = $_POST['radio'];
  if ($answer == 1) {
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