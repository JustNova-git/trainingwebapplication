<?php

$name = 'Модальное окно на HTML и CSS';
// $data = '01.01.2001';
$opic = '';
// $photo = "<img src='/img/courses/80px-HTML5_logo_and_wordmark.svg.webp' alt=''>";

$content = '




<h4>HTML</h4>
<xmp>
<code>
<div class="wind1"></div>
<div id="modal" class="myModal modal1">
	<div class="modal-content">
		<button class="close1"><span>&times</span></button>
		<div class="modal-content__block">
			<h1>Регистрация</h1>
			<div class="form" action="">
				<input id="login" name="loginReg" type="text" placeholder="Имя">
				<input id="password" name="passwordReg" type="password" placeholder="Пароль">
				<input id="email" name="emailReg" type="text" placeholder="Почта">
				<input id="activ" name="activReg" type="text" placeholder="Деятельность">
				<input class="button_reg" name="submitReg" value="Зарегистрироваться">
			</div>
			<p class="info_message"></p>

		</div>
	</div>
</div>
</xmp>
</code>
<h4>CSS</h4>
<xmp>
<code>
.wind1,
.wind2 {
  display: none;
  position: absolute;
  width: 100%;
  height: 1000vh;
  z-index: 10;
  background-color: rgba(0, 0, 0, 0.8);
  z-index: 102;
}

@media only screen and (max-device-width: 534px) {
  #modal {
    margin-top: 50px;
  }
  .modal1,
  .modal2 {
    width: auto !important;
  }
  .modal-content {
    margin: 0 !important;
    padding: 0 !important;
    border: 0 !important;
    box-shadow: none !important;
  }

  .form > input {
    width: auto !important;
    padding: 15px;
    height: auto !important;
  }
}

.wind1.active,
.wind2.active {
  display: block;
  z-index: 102;
}
#modal {
  z-index: 102;
  left: 50%;
  top: 200px;
  transform: translate(-50%, -50%);
}
.modal1,
.modal2 {
  display: none;
  position: absolute;
  z-index: 11;
  width: 500px;
}

.modal1.active,
.modal2.active {
  display: block;
}

.modal-content {
  /* margin: 20% auto; */
  padding: 20px;
  border: 1px solid #888;
  border-radius: 40px;
  border: darkcyan 3px solid;
  box-shadow: 10px 5px 25px lightgoldenrodyellow;
}
.close1,
.close2 {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
  background-color: rgba(0, 0, 0, 0);
}
.modal-content__block {
}
.form {
  display: flex;
  flex-direction: column;
}
.modal-content__block h1 {
  padding-bottom: 30px;
  color: antiquewhite;
  font-style: italic;
}
.form > input {
  color: #39d;
  width: 300px;
  height: 30px;
  margin-bottom: 5px;
  background-color: rgba(0, 0, 0, 0.4);
  border-radius: 20px;
  border: 2px solid #8dc1e1;
  /* 
	lightgoldenrodyellow
	#8dc1e1
*/
}

.form > input[type="text"]:hover,
input[type="password"]:hover {
  border: 2px solid lightgoldenrodyellow;
}
.form > input[type="text"]:focus,
input[type="password"]:focus {
  border: 2px solid lightgoldenrodyellow;
}
.form > input[type="text"],
input[type="password"] {
  padding-left: 30px;
  transition: border 0.3s linear;
  color: #39d;
  font-size: 17px;
  font-style: italic;
}
.form .button_reg {
  color: #39d;
  width: 300px;
  margin-bottom: 5px;
  background-color: rgba(0, 0, 0, 0.4);
  border-radius: 20px;
  border: 2px solid #8dc1e1;
  cursor: pointer;
}

.form > a:hover {
  cursor: pointer;
  /* background-color: #002; */
  border: 2px #002 solid;
}

.button_reg {
  margin-top: 30px;
  display: inline-block;
  color: #ffffff;
  text-decoration: none;
  padding: 3px 13px 3px 13px;
  background: #c95845;
  margin-bottom: 5px;
  border-radius: 5px;
  border: 1px solid;
  border-color: #256186;
  text-align: center;
  font-size: 13px;
  cursor: default;
  position: relative;
  margin-left: 15px;
  padding-top: 10px;
  padding-bottom: 10px;
}</code></xmp>
';
