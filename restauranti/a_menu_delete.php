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
             <li class="current"><a href="a_menu_delete.php">Fshirja e menuse</a></li>
           </ul>
           <div class="clear"></div>
         </nav>
       </header>


       <?php
        require "login.php";

        if (isset($_POST['delete']) && isset($_POST['menu_id'])) {
          $menu_id = $_POST['menu_id'];
          $sql = "DELETE FROM menu WHERE menu_id = $menu_id";
          echo "<pre>\n$sql\n</pre>\n";
          mysqli_query($db,$sql);
          echo 'Success - <a href="rezervimet.php">Continue...</a>';
          return;
        }
        $menu_id = $_GET['menu_id'];
        $result = mysqli_query($db,"SELECT * FROM menu");
        $row = mysqli_fetch_row($result);
        echo "<p>Konfirmo: Fshirjen $row[0]</p>\n";
        echo ('<form   id="form" method="post"><input type="hidden" ');
        echo ('name="menu_id" value="' . $row[0] . '">' . "\n");
        echo ('<div class="btns"><input type="submit" class="link" value="Delete" name="delete"></div>');
        echo ('<a href="a_menu.php">Cancel</a>');
        echo ("\n</form>\n");
        ?>



     </div>

   </div>
   </div>
 </body>

 </html>