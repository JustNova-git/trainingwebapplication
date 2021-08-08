<?php
//  $host = "https://14f0d378bbca.ngrok.io"; // Корневой домен
?>
<style>
    body {
        overflow-x: visible !important;
    }
</style>
<!-- <div class="wrapper"> -->
<?php // include APP . '\views\main\header.php'; 
?>

<!-- <div class="wrapper__cont"> -->
<?php // include APP . '\views\main\sidebar.php'; 
?>

<!-- <div class="main"> -->
<!-- <div class="main__content course-layout"> -->
<div class="user">
    <div class="user__content">
        <?php
        $query = R::getAll('SELECT * FROM `users` WHERE`id` = ?', [$_GET['id']]);
        $query = $query[0];
        ?>
        <div class="user__ava">
            <?php
            if ($query['avatars'] > 100) {
            ?> <img src="/img/profile/<?= $query['avatars'] . ".gif" ?>">
            <?php
            } else {
            ?> <img style="max-width: 200px;max-height: 200px;object-fit: cover;" src="/img/profile/<?= $query['avatars'] . ".jpg" ?>"><?php
                                                                                                                                    }
                                                                                                                                        ?>
        </div><br>
        <h5 class="user__login"><?= $query['login'] ?></h5>
        Деятельность:<span class="user__activing"> <?= $query['activing'] ?></span><br>
        Дата регистрации: <span class="user__activing"> <?= $query['datereg'] ?></span><br>
        Почта: <span class="user__activing"> <?= $query['email'] ?></span><br>
        <?php
        $numberAllCourse = R::getAll('SELECT id FROM courses WHERE `test`= ?', [1]);
        $numberAllCourse = count($numberAllCourse);

        $numberMyCourse = R::getAll('SELECT id FROM `resulttest` WHERE `id_user`= ?', [$_GET['id']]);
        $numberMyCourse = count($numberMyCourse);
        ?>
        <h4>Пройдено курсов:</h4>
        <?= $numberMyCourse ?> из <?= $numberAllCourse ?>
    </div>
    <!-- </div> -->
    <!-- </div> -->
    <!-- </div>
    </div> -->
    <?php // include APP . '\views\main\footer.php'; 
    ?>

</div>