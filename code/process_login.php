<?php session_start();

require('config.php');

    $msg="";

	$unm=$_POST['email'];

	$q="select * from user where uemail='$unm'";
	echo $q;
	$res=mysqli_query($conn,$q) or die("wrong query");

	$row=mysqli_fetch_assoc($res);

	if(!empty($row))
	{
		if(md5($_POST['pwd'])==$row['upass'])
		{
      session_start();
      $_SESSION['name']=$row['uname'];
      $_SESSION['unm']=$row['uemail'];
      $_SESSION['uid']=$row['upass'];
      $_SESSION['userID']=$row['uid'];
      $_SESSION['profile']=$row['uphoto'];
      $_SESSION['status']=true;

			if($_SESSION['unm']!="admin")
			{
				header("location:home.php?dept=0");
			}
			else
			{
				header("location:admin/index.php");
			}
		}
		else
		{
			$msg.="Invalid Password !!!";
		}
	}
	else
	{
		$msg.="Email Address is not exist !!!";
	}

    if($msg!="")
  	{
  		header("location:login.php?error=".$msg);
  	}
?>
