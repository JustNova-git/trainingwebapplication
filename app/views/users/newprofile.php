<?php
$query = R::getAll('SELECT * FROM `users` WHERE`id` = ?', [$_GET['id']]);
$query = $query[0];
$numberAllCourse = R::getAll('SELECT id FROM courses WHERE `test`= ?', [1]);
$numberAllCourse = count($numberAllCourse);

$numberMyCourse = R::getAll('SELECT id FROM `resulttest` WHERE `id_user`= ?', [$_GET['id']]);
$numberMyCourse = count($numberMyCourse);


?>
<div class="user-wrapper-content">

    <div class="user-wrapper">
        <div class="user-wrapper__content">
            <div class="user-wrapper__left">
                <div class="user-wrapper__img">
                    <?php
                    if ($query['avatars'] > 100) {
                    ?> <img src="/img/profile/<?= $query['avatars'] . ".gif" ?>">
                    <?php
                    } else {
                    ?> <img src="/img/profile/<?= $query['avatars'] . ".jpg" ?>"><?php
                                                                                }

                                                                                    ?>
                </div>
            </div>
            <div class="user-wrapper__right">
                <div class="user-wrapper__login"><i class="fas fa-user"></i> <?= $query['login'] ?></div>
                <div class="user-wrapper__name"><?= $query['name'] . ' ' . $query['surname'] ?></div>
                <div class="user-wrapper__activity"><?= $query['activing'] ?></div>

                <div class="user-wrapper__city"><?= $query['city'] ?></div>
                <div class="user-wrapper__reg">Дата регистрации: <?= $query['datereg'] ?></div>
                <div class="user-wrapper__stat">Пройдённо тестов: <?= $numberMyCourse ?> из <?= $numberAllCourse ?></div>
            </div>
            <div class="user-wrapper__right-mess">
                <a href=""> <i class="far fa-envelope"></i></a>
            </div>
        </div>
        <div class="user-wrapper__opic">
            <p><?= $query['opic'] ?></p>

        </div>

    </div>
</div>