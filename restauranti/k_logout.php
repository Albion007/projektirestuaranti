<?php
	session_start();
	
	session_destroy();
	
	echo "Ju lutem prisni!";
	header("Refresh:3; url=index.php");
?>