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
 						<li class="current"><a href="a_menu_edit.php">Modifikimi i menuse</a></li>
 					</ul>
 					<div class="clear"></div>
 				</nav>
 			</header>




 			<?php
				require "login.php";

				if (isset($_POST['menu_id']) && isset($_POST['menu_lloji'])) {
					$i = $_POST['menu_id'];
					$l = $_POST['menu_lloji'];


					$sql = "UPDATE menu  SET menu_lloji='$l' where menu_id=$i" or die(mysqli_error($guest['Diçqka ka shkuar gabim!']));
					$result = mysqli_query($db, "UPDATE menu  SET menu_lloji='$l' where menu_id");

					if ($result) {
						echo '<center><img src="./images/ok.png" alt="" width="200" height="200" /></center>';
						echo "<center>Ju keni ndryshuar te dhenat me sukses.</center>";
						echo "<center>Ju lutem prisni!.</center>";
						header("Refresh:3; url=a_menu.php");
					} else {
						echo '<center><img src="./images/error.png" alt="" width="200" height="200" /></center>';
						echo "<center>Gabim duke ndryshuar te dhenat.</center>";
						echo "<center>Ju lutem prisni!.</center>";
						header("Refresh:3; url=a_menu.php");
					}
				}
				?>

 			<?php

				require "login.php";


				$rez_id = $_GET['menu_id'];
				$result = mysqli_query($db, "SELECT  * from menu WHERE menu_id='$rez_id'");
				$row = mysqli_fetch_row($result);
				$i = $row[0];
				$l = $row[1];

				?>


 			<section id="content">
 				<div class="ic"></div>
 				<div class="col-4 left-2">
 					<h3 class="h3-line">Ndrysho te dhenat e menuse:</h3>
 					<form id="form" method="post" name='edito'><br />



 						<label><strong>Menu ID:</strong><input type="text" name="menu_id" value="<?php echo $i; ?>" /><strong class="clear"></strong></label>
 						<label><strong>Lloji i menuse:</strong><input type="text" name="menu_lloji" value="<?php echo $l; ?>" /><strong class="clear"></strong></label>


 						<strong class="clear"></strong>
 						<div class="btns">
							 <input type="submit" value="Ndrysho" class="link" href="a_menu.php" class="link" onClick="location.href=rezervimet.href"/>
							 <a href="a_menu.php" class="link">Kthehu</a>
							</br>
						</div>
 					</form>
 				</div>
 			</section>


 			<!--==============================footer=================================-->

 			</br>
 			<footer>
 				<p>© 2021 Valencia</p> </br>
 			</footer>
 		</div>
 	</div>
 </body>

 </html>
