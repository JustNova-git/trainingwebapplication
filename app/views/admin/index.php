<?php
error_reporting(0); // Поиск ошибок
if (!$user['groups'] == 1) {
    die("<script>document.location.href='{$host}';</script>");
}


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
                <div class="adminion">
                    <h4>Функции</h4>
                    <div class="adminion__navbar">
                        <ul>
                            <li onclick="showFunctionInterface(1)">Добавить курс</li>
                            <li onclick="showFunctionInterface(2)">Удалить курс</li>
                            <!-- <li onclick="showFunctionInterface(3)">Изменить курс</li> -->
                            <li onclick="showFunctionInterface(0)">Показать курсы</li>
                        </ul>
                        <ul>
                            <!-- <li onclick="showFunctionInterface(4)">Добавить пользователя</li> -->
                            <li onclick="showFunctionInterface(5)">Удалить пользователя</li>
                            <!-- <li onclick="showFunctionInterface(6)">Изменить пользователя</li> -->
                            <li onclick="showFunctionInterface(10)">Показать пользователей</li>
                        </ul>
                    </div>
                    <div class="adminion__interface">
                        <div id="Interface" class="adminion__interface_0">
                            <?php
                            $courses = R::getAll('SELECT * FROM `courses`');
                            ?>
                            <table border="1">
                                <caption>Курсы</caption>
                                <tr>
                                    <th>id</th>
                                    <th>name</th>
                                    <th>data</th>
                                    <th>opic</th>
                                    <th>data</th>
                                    <th>photo</th>
                                </tr>
                                <?php
                                foreach ($courses as $v) {
                                    echo "<tr>";
                                    echo "<td>{$v['id']}</td>";
                                    echo "<td>{$v['name']}</td>";
                                    echo "<td>{$v['data']}</td>";
                                    echo "<td>{$v['opic']}</td>";
                                    echo "<td>{$v['data']}</td>";
                                    echo "<td>{$v['photo']}</td>";
                                ?>
                                <?php
                                    echo "</tr>";
                                }
                                ?>
                            </table>
                        </div>
                        <div id="Interface" class="adminion__interface_10">
                            <?php
                            $users = R::getAll('SELECT * FROM `users`');


                            ?>
                            <table border="1">
                                <caption>Пользователи</caption>
                                <tr>
                                    <th>id</th>
                                    <th>login</th>
                                    <th>password</th>
                                    <th>name</th>
                                    <th>group</th>
                                    <th>datareg</th>
                                    <th>avatars</th>
                                    <th>activation</th>
                                    <th>buildmy</th>
                                    <th>email</th>
                                    <th>activing</th>


                                </tr>
                                <?php
                                foreach ($users as $v) {
                                    echo "<tr>";
                                    echo "<td>{$v['id']}</td>";
                                    echo "<td>{$v['login']}</td>";
                                    echo "<td>{$v['password']}</td>";
                                    echo "<td>{$v['name']}</td>";
                                    echo "<td>{$v['groups']}</td>";
                                    echo "<td>{$v['datereg']}</td>";
                                    echo "<td>{$v['avatars']}</td>";
                                    echo "<td>{$v['activation']}</td>";
                                    echo "<td>{$v['buildmy']}</td>";
                                    echo "<td>{$v['email']}</td>";
                                    echo "<td>{$v['activing']}</td>";
                                ?>
                                <?php
                                    echo "</tr>";
                                }
                                ?>
                            </table>
                        </div>
                        <div class="adminion__interface">
                            <div id="Interface" class="adminion__interface_1">
                                <h4>Добавить курс</h4>
                                <form name="formAddCourse" id="formAddCourse">
                                    <input type="text" name="nameAddCourse" id="nameAddCourse" placeholder="Название">
                                    <input type="text" name="opicAddCourse" id="opicAddCourse" placeholder="Описание">
                                    <input type="text" name="photoAddCourse" id="photoAddCourse" placeholder="Картинка">
                                    <input type="submit" value="Добавить">
                                </form>
                            </div>
                            <div id="Interface" class="adminion__interface_2">
                                <h4>Удалить курс</h4>
                                <form name="formDelCourse" id="formDelCourse">
                                    <input type="text" name="idDelCourse" id="idDelCourse" placeholder="id курса">
                                    <input type="submit" value="Удалить">
                                </form>
                            </div>
                            <div id="Interface" class="adminion__interface_5">
                                <h4>Удалить пользователя</h4>
                                <form name="formDelUser" id="formDelUser">
                                    <input type="text" name="idDelUser" id="idDelUser" placeholder="id Пользователя">

                                    <input type="submit" value="Удалить">
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <hr>
            </div>
        </div>
    </div>
    <?php include APP . '\views\main\footer.php'; ?>

</div>