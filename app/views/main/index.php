<div class="wrapper">
    <?php
    include "include/connect.php";

    use RedBeanPHP\Logger\RDefault\Debug;

    include 'header.php'; ?>
    <div class="wrapper__cont">
        <?php include 'sidebar.php'; ?>
        <div class="main">
            <div class="main__content">
                <?php include 'menu__toggle.php'; ?>
                <?php
                $news = R::getAll('SELECT * FROM `news`');
                ?>
                <div class="main__news main__selector">
                    <h1 class="main__selector_title">Новости</h1>
                    <div class="main__cont">
                        <?php
                        $i = 0;
                        foreach ($news as $k => $v) {
                            if ($i > 3) break;
                        ?>
                            <div class="main__news_item main__selector_item">
                                <div class="main__news_item-img main__selector_item-img">
                                    <img style="" src="/img/news/<?= $v['photo'] ?>" alt="">
                                </div>
                                <div class="main__news_item-data main__selector_item-data"><?= showData($v['data']); ?></div>
                                <div class="main__news_item-block-info main__selector_item-block-info">
                                    <div class="main__news_item-name"><?= $v['name'] ?></div>
                                </div>
                                <a class="btn__enter" href="/news/?news=<?= dashOnPoint($v['name']); ?>">Перейти</a>
                            </div>
                        <?php
                            $i++;
                        }
                        ?>
                        <a class="btn__enter enter" href="/main/news">Смотреть все новости</a>

                    </div>
                </div>
                <div class="main__courses main__selector">
                    <h1 class="main__selector_title">Курсы</h1>
                    <div class="main__cont">
                        <?php
                        $i = 0;
                        foreach ($res as $k => $v) {
                            if ($i > 3) break;
                        ?>
                            <div class="main__courses_item main__selector_item">
                                <div class="main__courses_item-img main__selector_item-img">
                                    <img src="/img/courses/<?php if ($v['photo']) echo  $v['photo'];
                                                            else echo "download.jpg"; ?>
                                                        ">
                                </div>
                                <div class=" main__courses_item-data main__selector_item-data"><?= showData($v['data']); ?>
                                </div>
                                <div class="main__courses_item-block-info main__selector_item-block-info">
                                    <div class="main__courses_item-name"><?= $v['name'] ?></div>
                                </div>
                                <!--   <div class="main__courses_item-block-info main__selector_item-block-info">
                                    <div class="main__courses_item-act">Количество учеников на курсе</div>
                                <span><?= $v['partys'] ?></span> 
                                </div>-->
                                <a class="btn__enter" href="/course/?course=<?= dashOnPoint($v['name']) ?>">Перейти</a>
                            </div>
                        <?php
                            $i++;
                        } ?>
                        <a class="btn__enter enter" href="/main/courses">Смотреть все новости</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</div>