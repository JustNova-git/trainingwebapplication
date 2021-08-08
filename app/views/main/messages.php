<div class="wrapper">
    <?php include 'header.php'; ?>
    <div class="wrapper__cont">
        <?php include 'sidebar.php'; ?>
        <div class="main">
            <div class="main__content">
                <div class="chat__content">
                    <?php
                    if (!empty($_GET['chat'])) {
                        $idChat = $_GET['chat'];
                        // $myFirstPokemon = R::getAll('SELECT names,tips,basenum,lvl FROM `pok_user` WHERE  active=1 AND `users` = ?', [$_SESSION['user'][0]['id']]);

                        // SELECT * FROM `chatmessage`, `chatgroup` WHERE `id_chat` = 3 AND `chat_id` = 3 AND `user_id` = 32 OR `user2_id` = 32
                        // $myFirstPokemon = R::getAll('SELECT * FROM `chatmessage`, `chatgroup` WHERE  id_chat=3 AND `chat_id` = 3 AND `user_id` = 32' or `user2_id` = 32);
                        // $poke_info = R::findMulti('poke_base, pokemon', 'SELECT poke_base.*, pokemon.* FROM pokemon INNER JOIN poke_base on poke_base.id = pokemon.id WHERE poke_base.id = ? ', [$poke_id]);
                        $query = R::getAll('SELECT * FROM chatmessage INNER JOIN chatgroup ON chatmessage.chat_id = chatgroup.id_chat WHERE chatmessage.chat_id = ' . $idChat . ' AND `user_id` = ' . $user['id'] . ' | `user2_id` = ' . $user['id'] . '');

                        echo "<pre>";
                        print_r($query);
                        echo "</pre>";
                        $messages = R::getAll('SELECT * FROM `chatmessage` WHERE `chat_id` = ?', [$idChat]); // Ищу сообщения, связанные с идентификатором текущего чата $idChat
                        $allChat = R::getAll('SELECT * FROM `chatgroup` WHERE `user_id` = ' . ($user['id']));
                        $allChat2 = R::getAll('SELECT * FROM `chatgroup` WHERE `user2_id` = ' . ($user['id']));
                        $allChat = array_merge($allChat, $allChat2);


                        // foreach ($allChat as $k => $v) {
                        //     // echo $idChat;
                        //     echo "<pre>";
                        //     print_r($v);
                        //     echo "</pre>";
                        //     echo array_search(32, $v) . "<br>";
                        // }
                    ?>
                        <div class="chat__content_messages">
                            <div class="chat__navbar">
                                <div class="chat__navbar__interlocutor">
                                    <div class="chat__navbar__interlocutor__img">
                                        <img src="/img/profile/11.jpg" alt="">
                                    </div>
                                    <div class="chat__navbar__interlocutor__login">Nova</div>
                                </div>
                            </div>
                            <div class="chat__content">
                                <?php
                                foreach ($messages as $k => $v) {
                                    if ($v['id_userSend'] == $user['id']) {
                                        echo "
                                <div class=\"chat__item_my\">
                                            <p>{$v['content']}</p>
                                        </div>
                                ";
                                    } else {
                                        echo "
                                <div class=\"chat__item_from\">
                                <p>{$v['content']}</p>
                            </div>
                                ";
                                    }
                                }

                                ?>

                            </div>
                            <div class="chat__controll">
                                <div class="chat__controll_text">
                                    <input type="text" name="" id="">
                                    <input type="submit" value="Отправить">
                                </div>
                            </div>
                        </div>

                        <?php

                    } else {

                        $allChat = R::getAll('SELECT * FROM `chatgroup` WHERE `user_id` = ' . ($user['id']));
                        $allChat2 = R::getAll('SELECT * FROM `chatgroup` WHERE `user2_id` = ' . ($user['id']));

                        $allChat = array_merge($allChat, $allChat2);
                        $i = 0;
                        foreach ($allChat as $k => $v) { // Переборка чатов
                            if ($v['user_id'] == $user['id']) {
                                $user2 = R::getAll('SELECT `id`, `login`, `avatars` FROM `users` WHERE `id` = ?', [$v['user2_id']]); // Определить второго участника
                                // echo "Общение с {$user2[0]['login']}";
                            } else {
                                $user2 = R::getAll('SELECT `id`, `login`, `avatars` FROM `users` WHERE `id` = ?', [$v['user_id']]); // Определить второго участника
                                // echo "Общение с {$user2[0]['login']}";
                            }
                            $queryMessage = R::getAll('SELECT * FROM `chatmessage` WHERE `chat_id` = ?', [$v['id_chat']]); // Ищу сообщения, связанные с найденными чатами
                            $lastMessage =  end($queryMessage); // Вычисляет последний элемент массива, то есть последнее сообщение

                        ?>
                            <div class="chat__items">
                                <?php

                                ?>
                                <div onclick="window.location='/main/messages/?chat=<?= $v['id_chat'] ?>'" class="chat__item">
                                    <!-- <div id="chat__item" class="chat__item"> -->
                                    <div class="chat__item-header">
                                        <div class="chat__item_img">
                                            <img src="/img/profile/<?= $user2[0]['avatars'] ?>.jpg">
                                        </div>
                                        <div class="chat__item-lastmess">
                                            <span class="class__item-who"><?= $user2[0]['login'] ?></span>
                                            <p><?= $lastMessage['content'] ?></p>
                                        </div>
                                    </div>

                                    <!-- <div class="chat__item-open">E</div> -->
                                </div>
                            </div>
                    <?php

                            $i++;
                        }
                    }
                    ?>
                </div>
            </div>


        </div>
    </div>
</div>
</div>
<?php include 'footer.php'; ?>
</div>