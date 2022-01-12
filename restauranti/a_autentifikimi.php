<?php


require "login.php";

$username = $_POST['username'];
$password = $_POST['password'] ; 
 
$sql="SELECT * FROM administratori WHERE username='".$username."' and password='".$password."'";
$r = mysqli_query($db,$sql);
if(!$r) {
   $err=mysql_error();
   print $err;
   exit();
}
if(mysqli_affected_rows($db)==0){
   print "Ju nuk keni qasje kthehu mbrapa";
   
   exit();
}
else {
  session_start(); 
$_SESSION['username'] ="$username"; 
  header("location:rezervimet.php");
}

   

?>