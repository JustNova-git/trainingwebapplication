<?php
?>
<div class="wrapper">
    <?php include APP . '\views\main\header.php'; ?>

    <div class="wrapper__cont">

        <?php include APP . '\views\main\sidebar.php'; ?>

        <div class="main">

            <div class="main__content course-layout">
                <?php include APP . '\views\main\menu__toggle.php'; ?>

                <?php
                $nameCourse = $_GET['course'];
                $nameCourse = pontOnDash($nameCourse);

                $course = R::getAll('SELECT `*` FROM `courses` WHERE `name`= ?', [$nameCourse]);
                $course = $course[0];
                $test = $course['test'];

                $courseId = $course['id'];
                $name = dashOnPoint($course['name']);

                $data = $course['data'];
                $data = showData($course['data']);

                $opic = $course['opic'];

                if (include "{$nameCourse}.php") {
                    include "{$nameCourse}.php";
                } else {
                    echo "error";
                }
                $opic .= "<br>" . $course['opic'];

                $photo = $course['photo'];

                ?>

                <div class="course-layout__head">


                    <h1 class="course-layout__title"><?= pontOnDash($name) ?></h1>
                    <h6 class="course-layout__data"><?= $data ?></h6>
                    <p class="course-layout__desc"><?= $opic ?></p>
                    <img style="max-width: 300px;max-height: 250px;" src="/img/courses/<?= $photo ?>" alt="" srcset="">
                </div>
                <div class="course-layout__content">
                    <?= $content ?>
                </div>
                <?php
                if ($test == 1) {
                ?>
                    <a class="button__test_course" href="/test?test=<?= $courseId ?>" ?>Пройти тест</a>
                <?php
                }
                ?>
            </div>
            <hr>
        </div>
    </div>
    <?php include APP . '\views\main\footer.php'; ?>

</div>

</div>