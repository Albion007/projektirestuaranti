<!DOCTYPE html>
<html lang="en">

<head>
  <title>Na kontaktoni</title>
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
        <h1><a href="index.php"><img src="images/logo.jpg" alt=""></a></h1>
        <nav>
          <div class="kycja">
            <p style='float: right; clear: right;'><a href="kycja.php">Kyçu</a></p>
          </div>
          <ul class="menu">

            <li><a href="index.php">Restauranti</a></li>
            <li><a href="kuzhina.php">Kuzhina</a></li>
            <li><a href="listaPijeve.php">Lista e pijeve</a></li>
            <li><a href="galeria.php">Fotogaleria</a></li>
            <!--<li><a href="rezervo.php">Rezervoni</a></li>-->
            <li class="current"><a href="kontakt.php">Na kontaktoni</a></li>

          </ul>
          <div class="clear"></div>
        </nav>
      </header>
      <!--==============================content================================-->
      <section id="content">
        <div class="ic"></div>
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
            <p class="border-1">Tek ne mund të gjeni rehatinë që ju nevojitet. Larg nga dinamika e perditshmërisë, obligimet. Vendo ku ju ndiheni vetja..</p>
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
          <div class="col-5">
            <h3 class="h3-line">Informata për kontaktim</h3>
            <div class="map img-border">
              <iframe src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Brooklyn,+New+York,+NY,+United+States&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Brooklyn,+Kings,+New+York&amp;ll=40.649974,-73.950005&amp;spn=0.01628,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
            </div>
            <div class="wrap">
              <dl class="adr">
                <dt class="clr-3 it-bold">Valencia</dt>
                <dd>8901 Prizren, <br>Rruga Janines, 89GR</dd>
                <dd><span>Telefon:</span><strong class="clr-2">045987654</strong></dd>
                <dd><span>Fax:</span><strong class="clr-2">+1 504 889 9898</strong></dd>
                <dd><span>Email:</span><a href="#" class="link">mail@valencia.com</a></dd>
              </dl>
              <dl class="adr last">
                <dt class="clr-3 it-bold">Valencia</dt>
                <dd>9863 Gjakovë, <br>Adem Jashari, 20</dd>
                <dd><span>Telefon:</span><strong class="clr-2">044123456</strong></dd>
                <dd><span>Fax:</span><strong class="clr-2">+1 504 889 9898</strong></dd>
                <dd><span>Email:</span><a href="#" class="link">mail@valencia.com</a></dd>
              </dl>
            </div>
          </div>



          <?php
          require "login.php";

          if (isset($_POST['emri']) && isset($_POST['email']) && isset($_POST['komenti'])) {
            $n = $_POST['emri'];
            $t = $_POST['email'];
            $k = $_POST['komenti'];

            $sql = "INSERT INTO komenti VALUES ('$n', '$t', '$k')" or die(mysqli_error($guest['Diçqka ka shkuar gabim!']));
            $result = mysqli_query($db, $sql);
          }

          ?>

          <div class="col-4 left-2">
            <h3 class="h3-line">Na kontaktoni:</h3>
            <form id="form" method="post">
              <fieldset>
                <label><strong>Emri:</strong><input name="emri" type="text" value=""><strong class="clear"></strong></label>
                <label><strong>Email:</strong><input name="email" type="text" value=""><strong class="clear"></strong></label>
                <label><strong>Koment:</strong><textarea name="komenti"></textarea><strong class="clear"></strong></label>
                <strong class="clear"></strong>
                <div class="btns">
                  <button type="submit" name="Submit" value="Dergo" class="Link" style="height: 30px; position:relative; margin-right: 95px; border: 2px solid gray;">Dergo</button>
                </div>
              </fieldset>
            </form>
          </div>
        </div>
      </section>

      <!--==============================footer=================================-->
      </br>
      <footer>
        <p>© 2021 Valencia</p>
      </footer>
    </div>
  </div>
</body>

</html>