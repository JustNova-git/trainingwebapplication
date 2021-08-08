<?php

$name = 'Блок личного профиля для сайта';
// $data = '01.01.2001';
$opic = '';
// $photo = "<img src='/img/courses/80px-HTML5_logo_and_wordmark.svg.webp' alt=''>";

$content = '




<h4>HTML</h4>
<xmp>
<code>
<div id="profile" class="profile">
            <div class="profile__content">
                <div class="profile__head"><span id="profile__exit">X</span></div>
                <h4>Информация</h4>
                <div class="profile__name">
                  Логин
                </div>
                <div class="profile__avatar">
                  <img src=\"/img/profile/$avatar.jpg\">

                </div>
                <div class=" profile__activ">
                    <p>Деятельность </p>
                </div>
                <h4>Настройки</h4>
                <br>
                <input id="changeAvatarButton1" type="submit" value="Сменить аватар"><br><br>
            </div>
        </div>
</xmp>
</code>
<h4>CSS</h4>
<xmp>
<code>

.avatar {
  cursor: pointer;
}
.profile {
  display: none;
  position: absolute;
  top: 0;
  right: 0;
  z-index: 1000;
}
.profile.active {
  display: block;
}
.profile:hover {
  opacity: 1;
}
.profile__content {
  padding: 10px;
  font-size: 16px;
  background-color: #fff;
  width: 300px;
  height: 100%;
  text-align: center;
}
.profile__name {
  color: grey;
  font-size: 20px;
  margin-bottom: 5px;
}
.profile h4 {
  color: grey;
  font-size: 18px;
}
.profile h3 {
  color: grey;
  font-size: 14px;
}
.profile__head {
  display: flex;
  justify-content: flex-end;
  color: grey;
}
#profile__exit {
  cursor: pointer;
}
.profile__avatar img {
  width: 110px;
  height: 110px;
}
.profile__activ {
  color: grey;
  font-size: 14px;
}
.profile__link {
  display: flex;
}
.profile__link a {
  font-size: 20px;
  color: #fff !important;
  /* background-color: #003; */
  background-color: #12121f;

  border-radius: 0 49px;
  box-shadow: 0 0 7px #666;
}
.profile__link a:hover {
  background-color: rgb(18, 14, 36);
}
.ChangeAvatarInt.active {
  visibility: visible;
}
.ChangeAvatarInt {
  visibility: hidden;
  position: absolute;
  top: 8%;
  left: 0px;
  display: flex;

  background-color: #333;
}
.ChangeAvatarInt__content {
  display: flex;
  flex-wrap: wrap;
}
.ChangeAvatarInt__content img {
  max-width: 110px;
  max-height: 110px;
  margin: 5px;
  cursor: pointer;
  border: 1px #003 solid;
}</code></xmp>
';
