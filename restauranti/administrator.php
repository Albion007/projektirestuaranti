<html>

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
      </head>

      <body>







        <section id="content">
          <div class="ic"></div>
          <div class="col-4 left-2">
            <h3 class="h3-line">Kyçuni:</h3>



            <form method="post" id="form" action="a_autentifikimi.php" autocomplete="on" onSubmit="return validate(this)">


              <label><strong>Emri shfrytzuesit:</strong><input name="username" height="30" placeholder="shkruani emrin e shfrytezuesit" required="required" type="text" value=""><strong class="clear"></strong></label>
              <label><strong>Fjalekalimi:</strong><input name="password" type="password" required="required" placeholder="fjalekalimi karakter,numer" value=""><strong class="clear"></strong></label>
              <input type="submit" value="Kyçu" style="height: 30px; width: 50px; position:relative; margin-left: 145px; border: 1px solid;"></br>
              <br>
              <strong class="clear"></strong>
              <br>
              <div class="btns"><a href="index.php" class="link" onClick="document.getElementById('form').submit()" style="margin-right: 122px;">Anulo</a></div>

            <br>
            <br>


            </form>
          </div>
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

        </br>
        <footer>
          <p>© 2021 Valencia</p> </br>
        </footer>
    </div>
  </div>
</body>

</html>