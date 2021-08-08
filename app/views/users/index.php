<?php
?>
<style>
    body {
        overflow-x: visible !important;
    }
</style>
<div class="wrapper">
    <?php include APP . '\views\main\header.php'; ?>

    <div class="wrapper__cont">
        <?php include APP . '\views\main\sidebar.php'; ?>

        <div class="main">
            <div class="main__content course-layout">
                <?php include APP . '\views\main\menu__toggle.php'; ?>
                <div class="users">
                    <div class="users__content">
                        <?php
                        $query = R::getAll('SELECT * FROM `users`');
                        foreach ($query as $v) {
                            $user = $v;

                        ?>
                            <div class="users__item">
                                <div class="users__ava">
                                    <?php
                                    if ($user['avatars'] >= 100) {
                                    ?> <img src="/img/profile/<?= $user['avatars'] . ".gif" ?>" alt="" srcset="">
                                    <?php
                                    } else {
                                    ?> <img src="/img/profile/<?= $user['avatars'] . ".jpg" ?>" alt="" srcset=""><?php
                                                                                                                }
                                                                                                                    ?>
                                </div>
                                <div class="users__login">
                                    <h5><?= $user['login'] ?></h5>
                                    <span class="users__activing">
                                        <?= $user['activing'] ?>
                                    </span>
                                </div>


                                <script>


                                </script>

                                <div class="users__profile">
                                    <a onclick='window.open("/users/newprofile/?id=<?= $user["id"] ?>", "Popup", ",scrollbars=no,resizable=no,status=no,location=no,toolbar=no,menubar=no,width=500, height=700" ); '>
                                        <i class="far fa-id-badge"></i>
                                    </a>

                                    <!-- <a href="/users/profile/?id=<?= $user['id'] ?>">
                                        <i class="far fa-id-badge"></i>
                                    </a> -->
                                </div>
                            </div>
                        <?php }
                        ?>
                    </div>
                </div>
                <?php


                // echo "<pre>";
                // print_r($query);
                // echo "</pre>";

                ?>
            </div>
        </div>
    </div>
    <?php include APP . '\views\main\footer.php'; ?>

</div>