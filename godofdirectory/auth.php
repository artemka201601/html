<?php
	$log=$_POST['login'];
	$pass=$_POST['pass'];
	if ($log=="admin" && $pass=="passwordpasswordpasswordpassword"){
		echo "KVVU_CTF{W3b_e4Sy_4_u}";
	} else echo "Попытка входа не удалась. Инцидент будет доложен в Службу ЗГТ!";
?>
