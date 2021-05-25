<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <title>Add post</title>
    <?php include_once "Head.php" ?>
</head>
<?php
error_reporting(0);
?>
<?php
session_start();
require('config.php');
if(!isset($_SESSION['status']))
{
  echo "Please Login!";
  header("location:login.php");
}
?>
<?php
if (isset($_POST['upload'])) {
	$target = "image/".basename($_FILES['uploadfile']['name']);

	$db = mysqli_connect("localhost", "root", "", "The_Common_place");
	$image = $_FILES['uploadfile']['name'];
	$name=$_POST['pname'];
	$desc=$_POST['pdesc'];
	$price=$_POST['pprice'];
	$uid=$_SESSION['userID'];
	$con=$_POST['con'];
	$dept=$_POST['dept'];
  $type=$_POST['type'];
  $pid=$_GET['pid'];

    $sql = "UPDATE product SET pname='$name' ,pdesc='$desc' ,pprice='$price' ,type='$type' ,uid='$uid' ,ucont='$con' ,deptid='$dept' ,pphoto='$image' WHERE pid  = '$pid'";

		mysqli_query($db, $sql);

		if (move_uploaded_file($_FILES['uploadfile']['tmp_name'],$target)) {
			$msg = "successfull";
		}
		else{
			$msg = "Failed to upload image";
	}
	if($msg!="")
	{
		header("location:addproduct.php?ok=".$msg);
	}
}
$result = mysqli_query($db, "SELECT * FROM image");

?>


<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click"
      data-menu="vertical-menu-modern" data-col="2-columns">

<?php include_once "TopNavbar.php" ?>
<!-- BEGIN: Main Menu-->
<?php include_once "LeftMenu.php" ?>
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">

        </div>
        <div class="content-body">
            <!-- Basic Inputs start -->
            <section id="basic-input" class="multiple-validation">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Update A POST</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                <form method="POST" action="" enctype="multipart/form-data">
    <?php
    $pid=$_GET['pid'];
    $query="select *from product where pid='$pid'";
    $res=mysqli_query($conn,$query) or die("Can't Execute Query...");
    $row=mysqli_fetch_assoc($res);
		echo '<b>Product Name:</b>
		<br><input type="text" name="pname" value="'.$row['pname'].'"  required><br>
		<br>
		<b>Product Desc:</b>
		<br><input type="text" name="pdesc" value="'.$row['pdesc'].'" required><br>
		<br>
		<b>Price</b>
		<br><input type="text" name="pprice" value="'.$row['pprice'].'" required><br>
		<br>
    <select name="type">
      <option value="sell">Sell</option>
      <option value="borrow">Borrow</option>
    </select>
    <br>
    <br>
		<b>Contact</b>
		<br><input type="text" name="con" value="'.$row['ucont'].'" required><br>
		<br>
		<b>Deptartment:</b>
		<br>
    <select type="text" name="dept" required>
      <option value=1>ARIP</option>
      <option value=2>RPCP</option>
      <option value=3>PDPIS</option>
      <option value=4>DEPSTAR</option>
      <option value=5>CSPIT</option>
      <option value=6>CMPICA</option>
      <option value=7>MTIN</option>
      <option value=8>CIPS</option>

    </select>
  </br>
	<input type="file" name="uploadfile" />

	<div>
		<button type="submit" name="upload">UPLOAD</button>
		</div>'
    ?>
</form>
<?php
	if(isset($_GET['ok']))
	{
		echo '<font color="red">'.$_GET['ok'].'</font>';
		echo '<br><br>';
	}
?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Basic Inputs end -->

        </div>
    </div>
</div>
<!-- END: Content-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<?php include_once "Footer.php" ?>

</body>
<!-- END: Body-->

</html>
