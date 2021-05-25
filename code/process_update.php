<?php
	session_start();
	require('config.php');
	if(!isset($_SESSION['status']))
	{
	  echo "Please Login!";
	  header("location:login.php");
	}
	require('config.php');

	if(!empty($_POST))
	{


		$uid =  $_SESSION['userID'];

		$uname = $_POST['usernm'];

		$userid=$_POST['id'];

		$udept=$_POST['dept'];

		$uemail=$_POST['email'];

		$ugen=$_POST['gen'];

		$upass=md5($_POST['pwd']);

		$uquestion=$_POST['que'];

		$uans=$_POST['ans'];


		$filename = $_FILES["uploadfile"]["name"];
	    $tempname = $_FILES["uploadfile"]["tmp_name"];
	    $folder = "profile/".$filename;

	    $query = "update user set uname = '$uname', userID = '$userid', udept = '$udept', uemail = '$uemail', ugen = '$ugen', upass = '$upass', question = '$uquestion', ans = '$uans' where uid = '$uid';";

	    mysqli_query($conn,$query) or die("Can't Execute Query...");

	    if($filename != "")
	    {
   			$query = "update user set uphoto = '$filename' where uid = '$uid';";

			mysqli_query($conn,$query) or die("Can't Execute Query...");

	        if (move_uploaded_file($tempname, $folder))
	        {
	            $msg = "Image uploaded successfully";
	        }
	        else
	        {
	            $msg = "Failed to upload image";
	        }
    	}

    	header("location:profile.php");

	}
?>
