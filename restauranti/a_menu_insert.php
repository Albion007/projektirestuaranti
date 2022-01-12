<!DOCTYPE html>
<html lang="en">
<head>
    <title>Shtimi i nje menu te re</title>
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
        <h1><a href="index.php"><img src="images/logo.jpg" alt=""></a></h1>
        <nav>  
            <ul class="menu">
			
                
				<li class="current"><a href="a_menu_insert.php">Shtimi i menuse</a></li>
            </ul>
            <div class="clear"></div>
         </nav>
    </header>






<?php
							require "login.php";

							if (isset($_POST['menu_lloji'])) {
							//$n = $_POST['klienti_id'];
							$m = $_POST['menu_lloji'];
							
							
							
							$sql = "INSERT INTO menu VALUES (NULL,'$m')"or die(mysqli_error());
							$result=mysqli_query($db,$sql);
							
							if($result){
								echo '<center><img src="css/images/ok.jpg" alt="" width="200" height="200" /></center>';								
								echo "<center>Ne rregull</center>";
										}

							else {
								echo '<center><img src="css/images/error.png" alt="" width="200" height="200" /></center>';
								echo "<center>Gabim</center>";
									}
							}
						?>
						<section id="content"><div class="ic"></div>
						 <div class="col-4 left-2">
						 
						 <h3 class="h3-line">Shto menu:</h3>
						<form id="form" method="post" />
							<label><strong>Emri:</strong><input name="menu_lloji"  type="text" value=""><strong class="clear"></strong></label>
		
						<div class="btns"><input type="submit" value="Shto" /><a href="a_menu.php" class="link" >Anulo</a></br></div>
						
						</div>
					</form>
					</section>
					
					
<!--==============================footer=================================-->
 
  </br><footer>
      <p>© 2012  Valencia</p> </br>
  </footer>	
  </div> 
</div>       
</body>
</html>
	
	