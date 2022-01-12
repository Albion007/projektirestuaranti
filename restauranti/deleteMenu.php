<?php
	session_start();
	include("includes/functions.php");

	$menu_id = $_GET['menu_id'];
	$del = deleteMenu($menu_id);
?>