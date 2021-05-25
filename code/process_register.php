<?php
	require('config.php');

	if(!empty($_POST))
	{
		$msg="";

		$unm=$_POST['email'];

		$q="select * from user where uemail='$unm'";

		$res=mysqli_query($conn,$q) or die("wrong query");

		$row=mysqli_fetch_assoc($res);

		if(empty($row))
		{
			if(is_numeric($_POST['usernm']))
			{
				$msg.="Name must be in String Format...";
			}
			if(empty($_POST['dept']))
			{
				$msg.="Enter Deptartment";
			}
			if($msg!="")
			{
				header("location:register.php?error=".$msg);
			}
			else
			{
				$uname=$_POST['usernm'];
				$userid=$_POST['id'];
				$udept=$_POST['dept'];
				$uemail=$_POST['email'];
				$ugen=$_POST['gen'];
				$upass=md5($_POST['pwd']);
				$que=$_POST['que'];
				$ans=$_POST['ans'];

				$query="insert into user(uname,userID,udept,uemail,ugen,upass,question,ans,uphoto)
				values('$uname','$userid','$udept','$uemail','$ugen','$upass','$que','$ans','user.jpg')";

				mysqli_query($conn,$query) or die("Can't Execute Query...");
				header("location:login.php");
			}
		}
		else
		{
			$msg.="Email Address is already exist !!!";
			header("location:register.php?error=".$msg);
		}
	}
	else
	{
		header("location:login.php");
	}
?>
