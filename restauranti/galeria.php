<!DOCTYPE html>
<html lang="en">
<head>
    <title>Fotogaleria</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/skin-2.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/jquery.fancybox-1.3.4.css">
    <link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
    <script src="js/jquery-1.7.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.jcarousel.min.js"></script>
    <script src="js/jquery.fancybox-1.3.4.pack.js"></script>
    <script>
		$(document).ready(function(){
			jQuery('#mycarousel-1').jcarousel({
				horisontal: true,
				wrap:'circular',
				scroll:1,
				easing:'easeInOutBack',
				animation:1200
			});
			$("a.plus").fancybox({
				'transitionIn'	:	'elastic',
				'transitionOut'	:	'elastic',
				'speedIn'		:	600, 
				'speedOut'		:	200, 
				'overlayShow'	:	true
			})
		});
	</script>
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
		<div class="kycja"><p style='float: right; clear: right;'><a href="kycja.php" >Kyçu</a></p></div>
            <ul class="menu">
			
                <li><a href="index.php">Restauranti</a></li>
                <li><a href="kuzhina.php">Kuzhina</a></li>
				<li><a href="listaPijeve.php">Lista e pijeve</a></li>
                <li class="current"><a href="galeria.php">Fotogaleria</a></li>
				<!--<li><a href="rezervo.php">Rezervoni</a></li>-->
                <li><a href="kontakt.php">Na kontaktoni</a></li>
				
            </ul>
            <div class="clear"></div>
         </nav>
    </header>  
  <!--==============================content================================-->
    <section id="content"><div class="ic"></div>
       <div class="block-1">
       	<div class="border-right">
        	<div class="block-1-title">
            	<span>01.</span>
                <div class="text-1">Kuzhina<strong>më e mirë</strong></div>
                <strong class="clear"></strong>
            </div>
            <p class="border-1">Kuzhina jonë është më e dalluara ne vend dhe rajon. Kuzhinë moderne por që ruan edhe aspektet tradicionale të vendit tonë.</p>
            <a href="#" class="link-1">lexo më shumë</a>
        </div>
        <div class="border-right">
        	<div class="block-1-title">
            	<span>02.</span>
                <div class="text-2">Pushim<strong>i kendshëm</strong></div>
                <strong class="clear"></strong>
            </div>
            <p class="border-1">Tek ne mund të gjeni rehatinë që ju nevojitet. Larg nga dinamika e perditshmërisë, obligimet. Vendo ku ju ndiheni vetja.</p>
            <a href="#" class="link-1">lexo më shumë</a>
        </div>
        <div class="border-right">
        	<div class="block-1-title">
            	<span>03.</span>
                <div class="text-3">Shërbim<strong>më i mirë</strong></div>
                <strong class="clear"></strong>
            </div>
            <p class="border-1">Shërbim i shpejtë dhe shumë efikas. Në dispozicion tuajin jane nje numer i madh te punetoreve tane qe kane pervoje ne sherbim te klienteve tane.</p>
            <a href="#" class="link-1">lexo më shumë</a>
        </div>
        <div class="block-1-last">
        	<div class="block-1-title">
            	<span>04.</span>
                <div class="text-4">Ushqimi<strong>më i mirë</strong></div>
                <strong class="clear"></strong>
            </div>
            <p class="border-1">Ushqim i llojllojshem, me perberes prej te gjitha aneve te botes. Recatat me te mira dhe me te kerkuara ne treg. Ate qka deshirojne kliente, ne e ofrojme.</p>
            <a href="#" class="link-1">lexo më shumë</a>
        </div>
       </div>
       <div class="block-2 pad-2">
        <div class="block-4 col-3">
        	<div class="h2">
       			<h2 class="h2-line-2">Galeria jonë:</h2>
            </div>
            <ul id="mycarousel-1" class="jcarousel-skin-tango">
                <li><a class="plus" href="images/gallery-1-big.jpg"><img src="images/gallery-1.jpg" alt=""></a><a class="plus" href="images/gallery-2-big.jpg"><img src="images/gallery-2.jpg" alt=""></a><a class="plus" href="images/gallery-3-big.jpg"><img src="images/gallery-3.jpg" alt=""></a></li>
                <li><a class="plus" href="images/gallery-4-big.jpg"><img src="images/gallery-4.jpg" alt=""></a><a class="plus" href="images/gallery-5-big.jpg"><img src="images/gallery-5.jpg" alt=""></a><a class="plus" href="images/gallery-6-big.jpg"><img src="images/gallery-6.jpg" alt=""></a></li>
                <li><a class="plus" href="images/gallery-7-big.jpg"><img src="images/gallery-7.jpg" alt=""></a><a class="plus" href="images/gallery-8-big.jpg"><img src="images/gallery-8.jpg" alt=""></a><a class="plus" href="images/gallery-9-big.jpg"><img src="images/gallery-9.jpg" alt=""></a></li>
                <li><a class="plus" href="images/gallery-10-big.jpg"><img src="images/gallery-10.jpg" alt=""></a><a class="plus" href="images/gallery-11-big.jpg"><img src="images/gallery-11.jpg" alt=""></a><a class="plus" href="images/gallery-12-big.jpg"><img src="images/gallery-12.jpg" alt=""></a></li>
            </ul>
        </div>
       </div>
    </section> 

<!--==============================footer=================================-->
  </br><footer>
      <p>© 2021  Valencia</p> 
  </footer>	 
</div> 
</div>       
</body>
</html>