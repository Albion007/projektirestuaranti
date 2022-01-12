<?php
	session_start();
	
	session_destroy();
	
	echo "Jeni qkyqur nga sistemi";
	header("Refresh:3; url=index.php");
?>