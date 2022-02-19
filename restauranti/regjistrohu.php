<!DOCTYPE html>
<html lang="en">

<head>
	<title>Regjistrimi</title>
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

			<script>
				function validate(form) {

					fail = validateAdminUsername(form.username.value)
					fail += validateAdminPassword(form.password.value)


					if (fail == "") return true
					else {
						alert(fail);
						return false
					}
				}
			</script>

			<body>
				<!--==============================header=================================-->
				<header>
					<h1><a href="index.php"><img src="images/logo.jpg" alt=""></a></h1><a href="k_logout.php">Kthehu prapa</a></p>
					<nav>
						<ul class="menu">


							<li class="current"><a href="regjistrohu.php">Regjistrohu</a></li>
						</ul>
						<div class="clear"></div>
					</nav>
				</header>

				<?php
				require "login.php";

				if (isset($_POST['klienti_emri']) && isset($_POST['klienti_mbiemri'])  && isset($_POST['k_username']) && isset($_POST['k_password']) && isset($_POST['klienti_telefoni']) && isset($_POST['klienti_emailAdresa'])) {
					//$n = $_POST['klienti_id'];
					$t = $_POST['klienti_emri'];
					$m = $_POST['klienti_mbiemri'];
					$u = $_POST['k_username'];
					$p = $_POST['k_password'];
					$g = $_POST['klienti_telefoni'];
					$v = $_POST['klienti_emailAdresa'];
					$konf = 0;


					if (empty($t) || empty($m) || empty($u) || empty($p) || empty($g) || empty($v)) {
						if (empty($t)) {
							echo '<p id="duhetteshenemrin">Duhet te shenoni emrin</p><br/>';
						}
						if (empty($m)) {
							echo '<p id="duhetteshenmbiemrin">Duhet te shenoni mbiemrin</p><br/>';
						}
						if (empty($u)) {
							echo '<p id="duhetteshenemailin">Duhet te shenoni username</p><br/>';
						}
						if (empty($p)) {
							echo '<p id="duhetteshenfjalekalimin">Duhet te shenoni fjalekalimin</p><br/>';
						}
						if (empty($g)) {
							echo '<p id="duhetteshenfjalekalimin">Duhet te shenoni numrin e telefonit</p><br/>';
						}
						if (empty($v)) {
							echo '<p id="duhetteshenfjalekalimin">Duhet te shenoni email adresen</p><br/>';
						}
					} else if (strlen($p) < 6 && strlen($p) > 0) {
						echo '<p id="gjatesiapasswordit">Passwordi duhet te jete me i gjate se 6 karaktere</p><br/>';
					} else {
						$sql = "INSERT INTO klienti VALUES (NULL, '$t', '$m', '$u', '$p', '$g', '$v','$konf')" or die(mysqli_error($guest['Diçqka ka shkuar gabim!']));
						$result = mysqli_query($db, $sql);

						if ($result) {
							//echo '<center><img src="css/images/ok.jpg" alt="" width="200" height="200" /></center>';								
							//echo "<center>Ne rregull</center>";
							echo "Ju jeni regjistruar. Duhet te prisni konfirmimin e administratorit.";
						} else {
							echo '<center><img src="./images/error.png" alt="" width="200" height="200" /></center>';
							echo "<center>Gabim</center>";
						}
					}
				}
				?>
				<section id="content">
					<div class="ic"></div>
					<div class="col-4 left-2">

						<h3 class="h3-line">Regjistrohuni:</h3>
						<form id="form" method="post">


							<label><strong>Emri:</strong><input name="klienti_emri" type="text" value=""><strong class="clear"></strong></label>
							<label><strong>Mbiemri:</strong><input name="klienti_mbiemri" type="text" value=""><strong class="clear"></strong></label>
							<label><strong>Emri i shfrytzuesit:</strong><input name="k_username" type="text" value=""><strong class="clear"></strong></label>
							<label><strong>Fjalekalimi:</strong><input name="k_password" type="password" value=""><strong class="clear"></strong></label>
							<label><strong>Numri i telefonit:</strong><input name="klienti_telefoni" type="text" value=""><strong class="clear"></strong></label>
							<label><strong>Email Adresa:</strong><input name="klienti_emailAdresa" type="text" value=""><strong class="clear"></strong></label>

							<br>

							<!--<br /><div class="btns"><a href="k_rezervimet.php" class="link">Regjistrohu</a> --><input type="submit" value="Regjistrohu" style="height: 30px; width: 100px; position:relative; margin-left: 133px; border: 2px;" />

							<br>
								<br>
								<a href="kycja.php" class="link" style=" position:relative; margin-left: 165px;">Anulo</a>
								<br>
								<br>

						</div>

					</form>

				</section>
				<script>
					function validateAdminUsername(field) {
						if (field == "") return "Sheno emrin e perdoruesit.\n"
						else if (field.length < 5)
							return "Emri i perdoruesit duhet te permbaje se paku 5 karaktere.\n"
						else if (/[^a-zA-Z0-9_-]/.test(field))
							return "Vetem karakteret a-z, A-Z, 0-9, - dhe _ te lejuara ne emrin e perdoruesit.\n"
						return ""
					}

					function validateAdminPassword(field) {
						if (field == "") return "Sheno passwordin.\n"
						else if (field.length < 6)
							return "Passwordi duhet te permbaje se paku 6 karaktere.\n"
						else if (!/[a-z]/.test(field) || !/[A-Z]/.test(field) ||
							!/[0-9]/.test(field))
							return "Passwordi duhet te permabaje se paku nga nje nga keto karaktere a-z, A-Z dhe 0-9.\n"
						return ""
					}
				</script>


				<!--==============================footer=================================-->

				<br>
				<br>

				<footer>
					<p>© 2021 Valencia</p> </br>
				</footer>
		</div>
	</div>


</body>

</html>