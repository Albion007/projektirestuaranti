<?php
	//session_start();
	include("connection.php");
	

	function deleteRezervimi($rez_id)
	{
		$rez_id = (int)$rez_id;
		global $db;
		$del = mysqli_query($db,"DELETE FROM rezervimi where rez_id = '$rez_id'") ;
		if(!$del)
		{
			echo "Gabim ne fshirje ";
			header("Refresh:3; url=rezervimet.php");
		}	
		else
		{
			echo "Rezervimi u fshi me sukses";
			header("Refresh:3; url=rezervimet.php");
		}
			return $del;
	}
	
	function deleteMenu($menu_id)
	{
		$menu_id = (int)$menu_id;
		global $db;
		$del = mysqli_query($db,"DELETE FROM menu where menu_id = '$menu_id'") ;
		if(!$del)
		{
			echo "Gabim ne fshirje ";
			header("Refresh:3; url=a_menu.php");
		}	
		else
		{
			echo "Menu u fshi me sukses";
			header("Refresh:3; url=a_menu.php");
		}
			return $del;
	}

	
	function akonfirmoKlient($klienti_id)
	{
		global $db;
		$allowUser = mysqli_query($db,"UPDATE klienti SET konfirmimi=1 WHERE klienti_id= '$klienti_id' ");
		return $allowUser;
		header("Location:a_konfirmimi.php");
	}

	function deleteKlienti($klienti_id)
	{
		$klienti_id = (int)$klienti_id;
		global $db;
		$del = mysqli_query($db,"DELETE FROM klienti where klienti_id = '$klienti_id'") ;
		if(!$del)
		{
			echo "Gabim ne fshirje ";
			header("Refresh:3; url=a_konfirmimi.php");
		}	
		else
		{
			echo "Klienti u fshi me sukses";
			header("Refresh:3; url=a_konfirmimi.php");
		}
			return $del;
	}
?>
