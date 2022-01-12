<?php
	session_start();
	include("includes/functions.php");

	$klienti_id = $_GET['klienti_id'];
	$del = deleteKlienti($klienti_id);
?>