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

<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <?php include_once 'Head.php'; ?>
<style>
.card1 {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
  height:auto;

}
.card1:hover {
  box-shadow: 0 16px 32px 0 rgba(0, 0, 0, 0.2);
  

}
</style>
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Header-->
    <?php include_once "TopNavbar.php" ?>
	<?php include_once "LeftMenu.php" ?>
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">

                              <?php
                                $deptid = $_GET['dept'];
                                if($deptid == 0)
                                {
                                $query="select *from product";
                                }
                                else{
                                  $query="select * from dept where did='$deptid'";
                                }
                                $res=mysqli_query($conn,$query) or die("Can't Execute Query...");
                                while($row=mysqli_fetch_assoc($res))
                                {
                                echo '<h2>'.$row['dname'].'</h2>';
                              }
                              ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Data list view starts -->
                <section id="data-list-view" class="data-list-view-header">
					<div class="card">
					<div class="card-header">
            <div class="row" style="padding:5 10px;margin:auto">
              <?php

                $deptid = $_GET['dept'];
                if($deptid == 0)
                {
                $query="select *from product";
                }
                else{
                  $query="select *from product where deptid='$deptid'";
                }
                $res=mysqli_query($conn,$query) or die("Can't Execute Query...");
                while($row=mysqli_fetch_assoc($res))
                {

                  echo '<a href="Details.php?pid='.$row['pid'].'"><div class="column">
                  <div class="card1" style="width:250px;padding:5 10px;margin:28px">
                  <img src="image/'.$row['pphoto'].'" width="200" height="100" style="margin:auto">
                  <h4><b>'.$row['pname'].'</b></h4>
                  <p>'.$row['pdesc'].'</p>
                  <p>Rs.'.$row['pprice'].'</p>
                  <p>For '.$row['type'].'</p>
                  </div>
                </div></a>';


                }

              ?>

           </div>
                    </div>
					</br>
					</br>


                    <!-- add new sidebar ends -->
                    </div>
                </section>
                <!-- Data list view end -->
				</div>
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">

    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="../app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="../app-assets/vendors/js/extensions/dropzone.min.js"></script>
    <script src="../app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="../app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="../app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
    <script src="../app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
    <script src="../app-assets/vendors/js/tables/datatable/dataTables.select.min.js"></script>
    <script src="../app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../app-assets/js/core/app-menu.js"></script>
    <script src="../app-assets/js/core/app.js"></script>
    <script src="../app-assets/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../app-assets/js/scripts/ui/data-list-view.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>
