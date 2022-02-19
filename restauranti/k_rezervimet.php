<?php
session_start();
if (@!$_SESSION['auth'] == true || $_SESSION['konfirmimi'] != 1) {
	die("<h1>Nuk jeni te autorizuar</h1>");
}
?>
<html>

<head>
	<title>Rezervimi</title>
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
				<div>
					<p style='float: right; clear: right;'><a href="index.php">çkyçu</a></p>
				</div>
				<h1><a href="index.php"><img src="images/logo.jpg" alt=""></a></h1>
				<nav>

					<ul class="menu">

						<li class="current"><a href="k_rezervimet.php">Rezervoni</a></li>
						<li><a href="k_lista_rezervimeve.php">Lista e rezervimeve</a></li>

					</ul>
					<div class="clear"></div>
				</nav>
			</header>

			<body>

				<?php
				
				require "login.php";

				$k = $_SESSION['klienti_id'];

				if ($_POST) {
					$n = $_POST['rez_id'];
					$t = $_POST['rez_dataRezervimit'];
					$m = $_POST['rez_dataEventit'];
					$g = $_POST['rez_fillimiEventit'];
					$u = $_POST['rez_kohezgjatja'];
					$p = $_POST['nr_ulesve'];
					$d = $_POST['menu_id'];


					$dataERez = mysqli_query($db, "SELECT rez_dataEventit FROM rezervimi WHERE rez_dataEventit='$m' ");
					if (mysqli_num_rows($dataERez) > 0) {
						echo "Kjo date eshte e zene, provoni ndonje date tjeter";
						header("Refresh:3; url=k_lista_rezervimeve.php");
					} else {
						$sql = "INSERT INTO rezervimi VALUES ('$n', '$t', '$m', '$g','$u','$p', '$d', '$k')" or die('Connection Failed : ' .$db->connect_error);
						$result = mysqli_query($db,$sql);

						if ($result) {
							echo "<center>Rezervimi u krye me sukses</center>";
						} else {
							echo "<center>Gabim</center>" . mysqli_error($guest['Diçka ka shkuar gabim!']);
						}
					}
				}
				?>

				<section id="content">
					<div class="ic"></div>
					<div class="col-4 left-2">
						<h3 class="h3-line">Rezervimi online:</h3>
						<form id="form" method="post" action="ushqimet.php">
							<fieldset>
								<label><strong>Rezervimi ID:</strong><input type="text" name="rez_id"><strong class="clear"></strong></label>

								<label><strong>Data e rezervimit:</strong><input type="text" value="<?php echo date("m/d/y"); ?>" name="rez_dataRezervimit"><strong class="clear"></strong></label>
								<label><strong>Data e eventit:</strong><input type="text" value="<?php echo date("m/d/y"); ?>" name="rez_dataEventit"><strong class="clear"></strong></label>
								<label><strong>Fillimi i eventit:</strong><input type="text" name="rez_fillimiEventit"><strong class="clear"></strong></label>
								<label><strong>Kohezgjatja:</strong><input type="text" name="rez_kohezgjatja"><strong class="clear"></strong></label>
								<label><strong>Numri ulesve:</strong><input type="text" name="nr_ulesve"><strong class="clear"></strong></label>


								<strong>Menuja:</strong>
								<select name="menu_id">
									<option value="2">Dasma</option>
									<option value="4">Takime</option>
									<option value="6">Ndeja</option>
									<option value="5">Konferenca</option>

								</select><br /><br />

								</br>

								<input type="submit" value="Rezervo" />

								<strong class="clear"></strong></label>

								<strong class="clear"></strong>
								<div class="btns"><a href="index.php" class="link" onClick="document.getElementById('form').submit()">Anulo</a></div>
							</fieldset>
						</form>
					</div>

				</section>

				</br>
				<footer>
					<p>© 2021 Valencia</p> </br>
				</footer>
		</div>
	</div>

</body>

</html>