<?php
	session_start();
	include("includes/functions.php");

	$rez_id = $_GET['rez_id'];
	$del = deleteRezervimi($rez_id);
?>