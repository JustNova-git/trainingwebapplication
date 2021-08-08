<?php

?>
<div class="wrapper">
    <?php include APP . '\views\main\header.php'; ?>

    <div class="wrapper__cont">

        <?php include APP . '\views\main\sidebar.php'; ?>

        <div class="main">

            <div class="main__content course-layout">
                <?php include APP . '\views\main\menu__toggle.php'; ?>

                <?php if (isset($_GET['test'])) {
                    $idTest = $_GET['test'];

                    $Test = R::getAll('SELECT * FROM `testing` WHERE `id_course`= ?', [$idTest]);
                    $course = R::getAll('SELECT * FROM `courses` WHERE `id`= ?', [$idTest]);
                    if (!empty($course) and !empty($Test)) {
                        $course = $course[0];
                        $nameTest = $course['name'];
                        $Test =  $Test[0];
                        $idCourse =  $Test['id_course'];

                        include "{$nameTest}.php";
                        $idUser = $user['id'];
                        $resulttest_0 = R::getAll("SELECT * FROM `resulttest` WHERE id_test = {$idTest} AND `id_user` = ?", [$idUser]);
                        if (!$resulttest_0) {
                            if (!$resulttest_0) {
                ?>
                                <form method="post" action="">
                                    <h4><?= $question ?></h4>
                                    <p><input type="radio" name="radio" value="1"><?= $a ?><Br>
                                        <input type="radio" name="radio" value="2"><?= $b ?><Br>
                                        <input type="radio" name="radio" value="3"><?= $c ?><Br>
                                        <input type="radio" name="radio" value="4"><?= $d ?><Br>
                                    </p>
                                    <p><input class="button__test" type="submit" value="Отправить"></p>
                                    <?php
                                    if (isset($result)) {
                                        echo $result;
                                    }
                                    ?>
                                </form>
                        <?php

                            }
                        } else {
                            echo "Вы правильно ответили на вопрос!<br> Тест засчитан!";
                            // echo "<br> <a onclick='delResultTest({$user['id']},{$_GET['test']})'class='button__test_course test' href=''>Пройти заново</a>";
                            //  echo "<pre>";print_r($idCourse);echo "</pre>";
                            $course['name'] = dashOnPoint($course['name']);
                            echo "<br> <a onclick='delResultTest({$user['id']},{$_GET['test']})'class='button__test_course test' href=\"/course/?course={$course['name']}\">Пройти заново</a>";
                        }
                        ?>
                <?php
                    }
                }

                ?>
            </div>
            <hr>
        </div>
    </div>
    <?php include APP . '\views\main\footer.php'; ?>

</div>

</div>