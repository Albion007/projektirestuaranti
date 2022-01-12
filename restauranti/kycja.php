<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kyçja</title>
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
				<li class="current"><a href="kycja.php">Kyqja</a></li>
            </ul>
            <div class="clear"></div>
         </nav>
    </header>  
  <!--==============================content================================-->
    <section id="content"><div class="ic"></div>
      <div class="col-4 left-2">
        	<h3 class="h3-line">Kyçuni:</h3>
            <form id="form" method="post"   action="">
              <fieldset>
                <label><strong>Emri shfrytezuesit:</strong><input name="k_username" type="text" value=""><strong class="clear"></strong></label>
                <label><strong>Fjalekalimi:</strong><input name="k_password" type="password" value=""><strong class="clear"></strong></label>
				
				<strong class="clear"></strong>
                <div class="btns"><input type="submit" value="Kyçu" /></br>
				<a href="index.php" class="link" >Anulo</a></br>
				<a href="regjistrohu.php" class="link">Regjistrohu</a></div>
              </fieldset>  
            </form> 
        </div>
<?php
	include("login.php");
	session_start();
	if($_POST)
	{
		$username = $_POST['k_username'];
		$password = $_POST['k_password'];
		
		
		
		if($username && $password)
		{
			$query = mysqli_query($db,"SELECT * FROM klienti WHERE k_username='$username' ");
			if(mysqli_num_rows($query) != 0)
			{
				while($row = mysqli_fetch_assoc($query))
				{
					$dbid = $row['klienti_id'];
					$dbusername = $row['k_username'];
					$dbpassword = $row['k_password'];
					$dbname = $row['klienti_emri'];
					$dbsurname = $row['klienti_mbiemri'];
					$dbtel = $row['klienti_telefoni'];
					$dbemail = $row['klienti_emailAdresa'];
					$dbkonfirmimi = $row['konfirmimi'];
				
					
					if($username==$dbusername && $password==$dbpassword)
					{
						$_SESSION['auth'] = true;
						$_SESSION['klienti_id'] = $dbid;
						$_SESSION['k_username'] = $dbusername;
						$_SESSION['k_password'] = $dbpassword;
						$_SESSION['klienti_emri'] = $dbname;
						$_SESSION['klienti_mbiemri'] = $dbsurname;
						$_SESSION['klienti_telefoni'] = $dbtel;
						$_SESSION['klienti_emailAdresa'] = $dbemail;
						$_SESSION['konfirmimi'] = $dbkonfirmimi;
						
						
						
						//echo "<div id='welcommesazhi'>Miresevini " .$row['klienti_emri']. " " .$row['klienti_mbiemri']. "</div>";
						//echo "Prisni derisa te ju konfirmohet qasja ";
						if($dbkonfirmimi == 1)
						{
							echo "<div id='welcommesazhi'>Miresevini " .$row['klienti_emri']. " " .$row['klienti_mbiemri']. "</div>";
							header("Refresh:3; url=k_rezervimet.php");
						}
						else
						{
							echo "Nuk keni te drejta per rezervim";
						}
					}
					else
					{
						echo "Gabim te dhenash";
					}
				}

			}
			else
			{
				echo "Nuk jeni i regjistruar";
			}
		}
	}
?>

    </section> 
	


<!--==============================footer=================================-->
 
  </br><footer>
      <p>© 2021  Valencia</p> </br>
  </footer>	 
</div> 
</div>       
</body>
</html>