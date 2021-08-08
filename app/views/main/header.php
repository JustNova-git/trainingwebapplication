<div class="header">
    <div class="header__brand">
        <a href="/main">
            <div class="header__brand_cont">
                <img style="width: 100%;height: 100%;max-width: 100px;max-height: 100px;" src="/img/logo_N.png" alt="логотип">
                <span>Курсы веб разработки</span>
            </div>
        </a>

    </div>
    <div class="header__nav">

        <?php
        echo "
        <a href='/users'>
            <div class=\"header__item\">
            <i class=\"fas fa-users\"></i>
            <!-- <i class=\"far fa-envelope\"></i> --!>
            </div>
        </a>
            ";
        ?>

        <?php
        if ($user['groups'] == 1) {
            echo "
            <a href='/admin'>
            <div class=\"header__item\">
                <i class=\"fas fa-home\"></i>

            </div>
        </a>
            ";
        }
        ?>

        <!-- <div class="header__item">
            <i class="fas fa-bell"></i>
        </div> -->

        <div id="avatar" class="header__item">

            <?php
            if ($user['avatars'] >= 100) {
            ?> <img src="/img/profile/<?= $user['avatars'] . ".gif" ?>" alt="" srcset="">
            <?php
            } else {
            ?> <img src="/img/profile/<?= $user['avatars'] . ".jpg" ?>" alt="" srcset=""><?php
                                                                                        }
                                                                                            ?>
        </div>
        <div id="profile" class="profile">
            <div class="profile__content">
                <div class="profile__head"><span id="profile__exit">X</span></div>
                <h4>Информация</h4>
                <div class="profile__name">
                    <?= $user['login'] ?>
                </div>
                <div class="profile__avatar">
                    <?php
                    $avatar = $user['avatars'];
                    ?>

                    <?php
                    if ($user['avatars'] >= 100) {
                    ?> <img src="/img/profile/<?= $user['avatars'] . ".gif" ?>" alt="" srcset="">
                    <?php
                    } else {
                    ?> <img src="/img/profile/<?= $user['avatars'] . ".jpg" ?>" alt="" srcset="">
                    <?php
                    }

                    ?>
                </div>

                <div class="profile__activ">
                    <p><?= $user['activing'] ?></p>
                    <p id="myOpicProfile"><?= $user['opic'] ?></p>
                </div>
                <!-- <div class="profile__link">
                    <a href="tel:+79512763048"><i class="fa fa-vk"></i></a>
                    <a href="https://twitter.com/Nova41440730"><i class="fa fa-twitter"></i></a>
                    <a href="justnova2020@mail.ru"><i class="fa fa-envelope"></i></a>
                </div> -->

                <br>
                <input id="changeAvatarButton1" type="submit" value="Сменить аватар"><br><br>
                <input onclick=toggleDisplay('opicProfile') type="submit" value="Сменить описание"><br><br>

                <textarea style="display:none" name="opicProfile" id="opicProfile" cols="30" rows="5" onkeypress="clickPress(event)" placeholder="Описание"></textarea>
                <?php
                $numberAllCourse = R::getAll('SELECT id FROM courses WHERE `test`= ?', [1]);
                $numberAllCourse = count($numberAllCourse);

                $numberMyCourse = R::getAll('SELECT id FROM `resulttest` WHERE `id_user`= ?', [$user['id']]);
                $numberMyCourse = count($numberMyCourse);
                ?>
                <h4>Пройдено курсов:</h4>
                <?= $numberMyCourse ?> из <?= $numberAllCourse ?>

                <?php
                include "include/changeAvatar.php"; ?>
                <?php
                echo "<a href=\"../\" onclick=\"exitButton()\" name=\"exit\" class=\"buy_btn\" type=\"submit\" style=\"background-color: #12121fc4;margin-top: 10px;\">Выйти</a>";
                ?>
            </div>
        </div>
    </div>

    <script>
        let avatar = document.getElementById('avatar');
        let profile = document.getElementById('profile');
        let exit = document.getElementById('profile__exit');

        function toggle(el) {
            el.style.display = (el.style.display == 'none') ? 'block' : 'none';
        }
        avatar.addEventListener('click', function() {
            profile.classList.toggle("active");
        })

        exit.addEventListener('click', function() {
            profile.classList.remove("active");
        })
    </script>
</div>