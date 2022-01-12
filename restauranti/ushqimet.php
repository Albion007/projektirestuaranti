<!DOCTYPE html>
<html lang="en">
<head>
    <title>Rezervimi</title>
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
        <nav>   <div class="clear"></div><div class="kycja"><p style='float: right; '><a href="k_logout.php" >Qkyqu</a></p></div>
            <ul class="menu">
            
      
                <li class="current"><a href="k_rezervimet.php">Rezervoni</a></li>
                
                
            </ul>
           
         </nav>
    </header>    
  <!--==============================content================================-->
    <section id="content"><div class="ic"></div>
        
        <div class="clear"></div>
        <div class="block-3">
            <form action="pagesa.php" method="POST">
                <div class="box-3">
                    <div>
                        <div class="img-border"><img src="images/page1-img2.jpg" alt="" height="120" width="120" ></div>
                        <p class="border-2"><span class="it-bold clr-1">Gjellë shqiptare</span><br> 50 $</p>
                        <a href="#" class="link"><input name="gj-shqiptare" type="checkbox" /></a>
                    </div>
                    <div>
                        <div class="img-border"><img src="images/page1-img3.jpg" alt="" height="120" width="120"></div>
                        <p class="border-2"><span class="it-bold clr-1">Gjellë franceze</span><br>40 $</p>
                        <a href="#" class="link"><input name="gj-franceze" type="checkbox" /></a>
                    </div>
                    <div>
                        <div class="img-border"><img src="images/page1-img4.jpg" alt="" height="120" width="120"></div>
                        <p class="border-2"><span class="it-bold clr-1">Gjellë italiane </span><br>45 $</p>
                        <a href="#" class="link"><input name="gj-italiane" type="checkbox" /></a>
                    </div>
                    <div class="last">
                        <div class="img-border"><img src="images/page1-img5.jpg" alt="" height="120" width="120"></div>
                        <p class="border-2"><span class="it-bold clr-1">Gjellë meksikane</span><br>50 $ </p>
                        <a href="#" class="link"><input name="gj-meksikane" type="checkbox" /></a>
                    </div>
					<div class="last">
                        <div class="img-border"><img src="images/download.jpeg" alt="" height="120" width="120"></div>
                        <p class="border-2"><span class="it-bold clr-1">Gjellë holandeze</span><br>120 $</p>
                        <a href="#" class="link"><input name="gj-holandeze" type="checkbox" /></a> 
                    </div>
					<div class="last">
                        <div class="img-border"><img src="images/biftek.jpeg" alt="" height="120" width="120"></div>
                        <p class="border-2"><span class="it-bold clr-1">Biftek Valencia</span><br>75 $</p>
                        <a href="#" class="link"><input name="gj-biftekvalencia" type="checkbox" /></a> 
                    </div>
					<div class="last">
                        <div class="img-border"><img src="images/fileto.jpeg" alt="" height="120" width="120"></div>
                        <p class="border-2"><span class="it-bold clr-1">Fileto Pule</span><br>20 $</p>
                        <a href="#" class="link"><input name="gj-filetopule" type="checkbox" /></a> 
                    </div>
					<div class="last">
                        <div class="img-border"><img src="images/mishipjekur.jpg" alt="" height="120" width="120"></div>
                        <p class="border-2"><span class="it-bold clr-1">Mish VIQI </span><br>80 $</p>
                        <a href="#" class="link"><input name="gj-mishvici" type="checkbox" /></a> 
                    </div>
                </div>
                <input type="submit" value="Vazhdo te pagesa" />
            </form>

        </div>
       </div>
    </section> 

<!--==============================footer=================================-->
 
  </br><footer>
      <p>© 2021  Valencia</p> </br>
  </footer>	 
</div> 
</div>       
</body>
</html>