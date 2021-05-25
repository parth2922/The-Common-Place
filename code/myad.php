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
                           <h2 class="content-header-title float-left mb-0">My Post</h2>
                       </div>
                   </div>
               </div>
           </div>
           <div class="content-body">
               <!-- Data list view starts -->
               <section id="data-list-view" class="data-list-view-header">
         <div class="card">
         <div class="card-header">
                               <h4 class="card-title">List of Ads</h4>

                   </div>

                   <!-- DataTable starts -->
                   <div class="table-responsive">
                       <table class="table zero-configuration">
                           <thead>
                               <tr>
                                   <th></th>
                                   <th>SR. ID</th>
                                   <th>PRODUCT NAME</th>
                                   <th>PRODUCT DESCRIPTION</th>
                                   <th>PRICE</th>
                                   <th>ACTION</th>
                               </tr>
                           </thead>
                           <tbody>
                             <?php
                             $userid = $_SESSION['userID'];
                             $q="select * from product where uid='$userid'";
                              $res=mysqli_query($conn,$q) or die("Can't Execute Query...");
                               $count=1;
                               while($row=mysqli_fetch_assoc($res))
                               {
                              ?>
                           <tr>
                               <td></td>
                               <td><?php echo $count ?></td>
                               <td><?php echo $row['pname']; ?></td>
                               <td><?php echo $row['pdesc']; ?></td>
                               <td><?php echo $row['pprice']; ?></td>
                                 <?php

                                    echo 	'<td><a href="edit_post.php?uid='.$_SESSION['userID'].'&pid='.$row['pid'].'">Edit</a> / <a href="process_del_pro.php?pid='.$row['pid'].'">Delete</a>'
                                 ?>

                               <?php
                               $count++;
                               }

                               ?>
                           </tr>
                           </tbody>
                       </table>
                   </div>
                   <!-- add new sidebar ends -->
               </section>
               <!-- Data list view end -->
       </div>
           </div>
       </div>
   </div>
   <!-- END: Content-->

   <div class="sidenav-overlay"></div>
   <div class="drag-target"></div>

   


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
