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
						<li class="current"><a href="admin_edit.php">Modifikimi</a></li>
					</ul>
					<div class="clear"></div>
				</nav>
			</header>


			<?php
			require "login.php";

			if (
				isset($_POST['rez_id']) && isset($_POST['rez_dataRezervimit']) && isset($_POST['rez_dataEventit']) && isset($_POST['rez_fillimiEventit']) && isset($_POST['rez_kohezgjatja'])
				&& isset($_POST['nr_ulesve']) && isset($_POST['menu_id']) && isset($_POST['klienti_id'])
			) {
				$n = $_POST['rez_id'];
				$t = $_POST['rez_dataRezervimit'];
				$m = $_POST['rez_dataEventit'];
				$g = $_POST['rez_fillimiEventit'];
				$d = $_POST['rez_kohezgjatja'];
				$q = $_POST['nr_ulesve'];
				$r = $_POST['menu_id'];
				$s = $_POST['klienti_id'];


				$sql = "UPDATE rezervimi  SET rez_dataRezervimit='$t', rez_dataEventit='$m' , rez_fillimiEventit='$g' ,rez_kohezgjatja='$d', nr_ulesve='$q', menu_id='$r', klienti_id='$s' where rez_id=$n" or die(mysqli_error($guest['Nje gabim ka ndodhur gjate editimit.']));
				$result = mysqli_query($db, $sql);

				if ($result) {
					echo '<center><img src="./images/ok.png" alt="" width="200" height="200" /></center>';
					echo "<center>Ne rregull. Ju keni ndryshuar te dhenat me sukses</center>";
					echo "<center>Ju lutem prisni deri te rifreskohen te dhenat.</center>";
					header("Refresh:3; url=rezervimet.php");
				} else {
					echo '<center><img src="./images/error.png" alt="" width="200" height="200" /></center>';
					echo "<center>Gabim gjate ndryshimit te te dhenave!</center>";
					echo "<center>Ju lutem prisni!</center>";
					header("Refresh:3; url=rezervimet.php");
				}
			}
			?>

			<?php

			require "login.php";


			$rez_id = $_GET['rez_id'];
			$result = mysqli_query($db, "SELECT  * from rezervimi WHERE rez_id='$rez_id'");
			$row = mysqli_fetch_row($result);
			$n = $row[0];
			$t = $row[1];
			$m = $row[2];
			$g = $row[3];
			$d = $row[4];
			$q = $row[5];
			$r = $row[6];
			$s = $row[7];


			?>


			<section id="content">
				<div class="ic"></div>
				<div class="col-4 left-2">
					<h3 class="h3-line">Ndrysho te dhenat e rezervimit:</h3>
					<form id="form" method="post" name='edito'><br />



						<label><strong>ID e rezervimit:</strong><input type="text" name="rez_id" value="<?php echo $n; ?>" size="30" class="hyrja" /><strong class="clear"></strong></label>
						<label><strong>Data e rezervimit:</strong><input type="text" name="rez_dataRezervimit" value="<?php echo $t; ?>" size="30" class="hyrja" /><strong class="clear"></strong></label>
						<label><strong>Data e eventit:</strong><input type="text" name="rez_dataEventit" value="<?php echo $m; ?>" size="30" class="hyrja" /><strong class="clear"></strong></label>

						<label><strong>Fillimi i eventit:</strong><input type="text" name="rez_fillimiEventit" value="<?php echo $g; ?>" size="30" class="hyrja" /><strong class="clear"></strong></label>

						<label><strong>Kohezgjatja:</strong><input type="text" name="rez_kohezgjatja" value="<?php echo $d; ?>" size="30" class="hyrja" /><strong class="clear"></strong></label>

						<label><strong>Numri i ulesve:</strong><input type="text" name="nr_ulesve" value="<?php echo $q; ?>" size="30" class="hyrja" /><strong class="clear"></strong></label>

						<label><strong>Lloji i menuse:</strong><input type="text" name="menu_id" value="<?php echo $r; ?>" size="30" class="hyrja" /><strong class="clear"></strong></label>

						<label><strong>ID e klientit:</strong><input type="text" name="klienti_id" value="<?php echo $s; ?>" size="30" class="hyrja" /><strong class="clear"></strong></label>

						<strong class="clear"></strong>
						<div class="btns">
						<input type="submit" value="Ndrysho" class="link" href="rezervimet.php" class="link" />
							 <a href="rezervimet.php" class="link">Kthehu</a>
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
