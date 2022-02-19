<?php


require "login.php";

$k_username = $_POST['k_username'];
$k_password = $_POST['k_password'] ; 
$konfirmimi = $_GET['konfirmimi'] ;
 
$sql="SELECT * FROM klienti WHERE k_username='".$k_username."' and k_password='".$k_password."'  and konfirmimi='".$konfirmimi."'";
$r = mysqli_query($db,$sql);
if(!$r) {
   $err=mysqli_error($guest['Diçka ka shkuar gabim!']);
   print $err;
   exit();
}
if(mysqli_affected_rows($guest['Diçka ka shkuar gabim!'])==0){
   print "Ju nuk keni qasje kthehu mbrapa";
   
   exit();
}
else {
  session_start(); 
$_SESSION['k_username'] ="$k_username"; 
  header("location:k_rezervimet.php");
}

   

?>

