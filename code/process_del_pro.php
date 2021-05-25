<?php
require('config.php');

			$query="delete from product where pid =".$_GET['pid'];

			mysqli_query($conn,$query) or die("can't Execute...");


			header("location:myad.php");

?>
