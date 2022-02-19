<!DOCTYPE html>
<html lang="en">

<head>
	<title>Administratori</title>
	<link rel="shortcut icon" type="icon" href="./images/iconrestaurant.png">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
	<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
	<script src="js/jquery-1.7.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
	<!--[if lt IE 9]>
   		<script type="text/javascript" src="js/html5.js"></script>
    	<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
	<![endif]-->

</head>

<body>
	<div class="bg-top">
		<div class="bgr">
			<!--==============================header=================================-->
			<header>
				<div class="kycja">
					<p style='float: right; clear: right;'><a href="index.php">çkyçu</a></p>
				</div>
				<h1><a href="index.php"><img src="images/logo.jpg" alt=""></a></h1>

				<nav>

					<ul class="menu">


						<li><a href="rezervimet.php">Rezervimet</a></li>
						<li><a href="a_menu.php">Menu</a></li>
						<li class="current"><a href="a_konfirmimi.php">Konfirmimi</a></li>
						<li><a href="a_komenti.php">Komentet</a></li>

					</ul>
					<div class="clear"></div>
				</nav>
			</header>



			<?php
			session_start();
			if (isset($_SESSION['username'])) {
				print " Mireserdhet:<font  size=6> " . $_SESSION['username'] . "</font>";
			}

			?>


			<?php

			require "login.php";

			echo '<center><table class="tableCSS"></center>' . "\n";
			$result = mysqli_query($db, "SELECT * FROM klienti WHERE konfirmimi=0");
			echo '<thead>';
			echo '<th>Klienti ID</th><th>Emri</th><th>Mbiemri</th><th>Username</th><th>Password</th><th>Telefoni</th><th>Email Adresa</th>><th>Zgjedh</th>';


			$i = 0;
			while ($row = mysqli_fetch_row($result)) {

				if ($i % 2 != 1)
					$rowColor = "lightgrey";
				else
					$rowColor = "white";
				$i++;
				echo "<tbody>";

				echo "<tr bgcolor=" . $rowColor . "><td>";
				echo (htmlentities($row[0]));
				echo ("</td><td>");

				echo (htmlentities($row[1]));
				echo ("</td><td>");

				echo (htmlentities($row[2]));
				echo ("</td><td>");

				echo (htmlentities($row[3]));
				echo ("</td><td>");

				echo (htmlentities($row[4]));
				echo ("</td><td>");

				echo (htmlentities($row[5]));
				echo ("</td><td>");

				echo (htmlentities($row[6]));
				echo ("</td><td>");

				echo ('<a href="a_konfirmoKlient.php?klienti_id=' . htmlentities($row[0]) . '">Konfirmo</a>  ');
				echo ('<a href="a_fshiKlient.php?klienti_id=' . htmlentities($row[0]) . '">Fshij</a>  ');

				echo ("</td></tr>\n");
			}
			?>
			

		</div>
	</div>
	</br>
	<footer>
		<p></p> </br>
	</footer>
</body>

</html>