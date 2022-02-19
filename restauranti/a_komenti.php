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
 				<div class="kyçja">
 					<p style='float: right; clear: right;'><a href="index.php">çkyqu</a></p>
 				</div>
 				<h1><a href="index.php"><img src="images/logo.jpg" alt=""></a></h1>

 				<nav>

 					<ul class="menu">


 						<li><a href="rezervimet.php">Rezervimet</a></li>
 						<li><a href="a_menu.php">Menu</a></li>
 						<li><a href="a_konfirmimi.php">Konfirmimi</a></li>
 						<li class="current"><a href="a_komenti.php">Komentet</a></li>
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
				
				echo '<center><table  class="tableCSS"></center>' . "\n";
				$result = mysqli_query($db, "SELECT * FROM komenti");
				echo '<thead>';
				echo '<th>Emri</th><th>Email</th><th>Komenti</th>';


				$i = 0;
				while ($row = mysqli_fetch_row($result)) {

					if ($i % 2 != 1)
						$rowColor = "lightgrey";
					else
						$rowColor = "black";
					$i++;
					echo "<tbody>";

					echo "<tr bgcolor=" . $rowColor . "><td>";
					echo (htmlentities($row[0]));
					echo ("</td><td>");

					echo (htmlentities($row[1]));
					echo ("</td><td>");

					echo (htmlentities($row[2]));
					echo ("</td>\n");

					echo ("</tr>\n");
				}
				?>

 		</div>

 	</div>
 	</div>
 </body>

 </html>