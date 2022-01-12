<?php
	session_start();
	include("includes/functions.php");
	

	$klienti_id = $_GET['klienti_id'];
	$a = akonfirmoKlient($klienti_id);
	
	if($a)
	{
		echo "Klienti u konfirmua me sukses";
		header("Refresh:3; url=a_konfirmimi.php");
	}
	else
	{
		echo "Problem gjate konfirmimit te klientit";
		header("Refresh:20; url=a_konfirmimi.php");
	}
	
?>