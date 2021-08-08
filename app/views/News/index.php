<?php

?>
<div class="wrapper">
    <?php include APP . '\views\main\header.php'; ?>

    <div class="wrapper__cont">
        <?php include APP . '\views\main\sidebar.php'; ?>

        <div class="main">
            <div class="main__content news-layout">
            <?php include APP . '\views\main\menu__toggle.php'; ?>

                <?php
                $nameNews = $_GET['news'];
                $nameNews = pontOnDash($nameNews);

                $news = R::getAll('SELECT * FROM `news` WHERE `name`= ?', [$nameNews]);
                $news = $news[0];
                $name = dashOnPoint($news['name']);

                $data = $news['data'];
                $data = showData($news['data']);
                $opic = $news['opic'];
                $photo = $news['photo'];
                if (include "{$nameNews}.php") {
                    include "{$nameNews}.php";
                } else {
                    echo "error";
                }
                ?>
                <div class="news-layout__head">
                    <h1 class="news-layout__title"><?= pontOnDash($name) ?></h1>
                    <h6 class="news-layout__data"><?= $data ?></h6>
                    <p class="news-layout__desc"><?= $opic ?></p>
                    <img style="max-width: 300px;max-height: 250px;" src="/img/news/<?= $photo ?>" alt="" srcset="">
                </div>
                <div class="news-layout__content">
                    <?= $content ?>
                </div>
            </div>
            <hr>
        </div>
    </div><?php include APP . '\views\main\footer.php'; ?>

</div>

</div>