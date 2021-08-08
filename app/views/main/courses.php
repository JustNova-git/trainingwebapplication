<div class="wrapper">
    <?php include 'header.php'; ?>

    <div class="wrapper__cont">
        <?php include 'sidebar.php'; ?>

        <div class="main">
            <div class="main__content">
                <?php include 'menu__toggle.php'; ?>
                <div class="main__courses main__selector">
                    <h1 class="main__selector_title">Курсы</h1>
                    <div class="main__cont">
                        <?php
                        foreach ($res as $k => $v) {
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
                                <a class="btn__enter" href="/course/?course=<?= dashOnPoint($v['name']) ?>">Перейти</a>
                            </div>
                        <?php } ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>

</div>

</div>