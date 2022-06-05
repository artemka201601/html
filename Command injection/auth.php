<?php
	$log=$_POST['login'];
	$pass=$_POST['pass'];
	if ($log=="ls" || $pass=="ls"){
		echo "sdfsdfsd.txt dsffasdf.txt var tmp flag.txt";
	}
	else if ($log=="cat flag.txt" || $pass=="cat flag.txt"){
		echo "KVVU_CTF{CoMmAnD_In5Ec710N}"; 
	}
	 else echo "Not Available Command";
?>
