<style>
	input {
		margin: 5px;
	}
	.txt {
		color: white;
	}
	.main_form {
		margin-left: 25%;
		margin-right: 25%;
		margin-top: 250px;
		text-align: center;
		background: gray;
		border-radius: 20px;
	}
</style>
<div class="main_form">
<form method="POST">
<div class="txt">Авторизация</div>
<input type="text" name="login" required><br>
<input type="password" name="pass" required><br>
<button>Войти</button>
</form>
<?php
	$log=$_POST['login'];
	$pass=$_POST['pass'];
	if($log=="admin" && $pass=="admin"){
		echo "<form method=\"GET\">";
		echo "На ваш телефон 8******4523 пришло СМС<br>";
		echo "<input type=\"text\" name=\"number\" required><br><br>";
		echo "<button>Отправить</button>";
		echo "</form>";
	}
	$code=$_GET['number'];
	if($code=="0153"){
		echo "<div class=\"txt\">Флаг: KVVU_CTF{2FA_AuTh_i5_Bruted}</div>";
	}
	
?>
</div>
