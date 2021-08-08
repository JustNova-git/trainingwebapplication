<nav class="navbar">
    <input id="menu__toggle" type="checkbox" />
    <label class="menu__btn" for="menu__toggle">
        <span></span>
    </label>
    <div class="navbar-content">
        <a href="" class="navbar-brand">
            <img src="/img/logo_N.png" alt="логотип"> Обучение вэб-разработке

        </a>
        <ul class="navbar-nav">
            <!-- <li class="nav-item"><a class="nav-link" href="<?= $host ?>">Главная</a></li>
            <li class="nav-item"><a class="nav-link" href="<?= $host ?>">Примеры работ</a></li>
            <li class="nav-item"><a class="nav-link" href="<?= $host ?>">Контакты</a></li> -->
        </ul>
        <div class="navbar-button">
            <?php if (isset($user)) {
                echo "<a href=\"/main\" class=\"buy_btn\">Войти</a>";
                // echo "<a href=\"{$host}\" onclick=\"exitButton()\" name=\"exit\" class=\"buy_btn\" type=\"submit\">Выйти</a>";
            } else {
                if (isset($user['login'])) echo  $user['login'];
                echo "<a  class=\"buy_btn myBtn2\">Войти</a>";
            }
            ?>
            <?php
            echo " <form  method=\"post\">
                        </form>";
            ?>
        </div>
    </div>
</nav>