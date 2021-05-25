<?php session_start();

require('config.php');

	$pass=$_POST['npass'];
	$pass=md5($pass);
  $email =$_SESSION['mail'];
	$q="update user set upass='$pass' where uemail='$email'";
	$res=mysqli_query($conn,$q) or die("wrong query");
	$row=mysqli_fetch_assoc($res);
  header("location:login.php");
?>
