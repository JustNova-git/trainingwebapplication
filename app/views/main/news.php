<?php
?>
<div class="wrapper">
    <?php include 'header.php'; ?>

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
                        foreach ($news as $k => $v) {
                        ?>
                            <div class="main__news_item main__selector_item">
                                <div class="main__news_item-img main__selector_item-img">
                                    <img style="" src="/img/news/<?= $v['photo'] ?>" alt="">
                                </div>
                                <div class="main__news_item-data main__selector_item-data"><?= showData($v['data']); ?></div>
                                <div class="main__news_item-block-info main__selector_item-block-info">
                                    <div class="main__news_item-name"><?= $v['name'] ?></div>
                                </div>
                                <!--<div class="main__news_item-block-info main__selector_item-block-info">
                                   <div class="main__courses_item-act">Количество учеников на курсе</div>
                                <span><?= $v['partys'] ?></span> 
                                </div>-->
                                <a class="btn__enter" href="/news/?news=<?= dashOnPoint($v['name']); ?>">Перейти</a>
                            </div>
                        <?php } ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>