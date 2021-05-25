<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
     <?php include_once 'Head.php'; ?>
	 <?php include_once 'LeftMenu.php'; ?>

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <?php include_once "TopNavbar.php"; ?>
    <?php include_once "LeftMenu.php" ?>
    <!-- =======================Get User Details=========================== -->
    <?php

    $client_id=$_POST['client_id'];
    $conn=OpenCon();
    $query = "SELECT * FROM client_info WHERE id = $client_id";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        // output data of each row
        $details = $result->fetch_assoc();
    }else{
        header('Location: client-Manager.php');
        exit();
    }
    ?>
     <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- page users view start -->
                <section class="page-users-view">
                    <div class="row">
                        <!-- account start -->
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title"><?php echo $details['company_name']?></div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="users-view-image">
                                            <img height="120" width="100" src="<?php
                                            if(strlen($details['company_logo'])>0){
                                                echo "../companyLogo/".$details['company_logo'];
                                            }else{
                                                echo "../companyLogo/not_found.png";
                                            }?>" class="users-avatar-shadow w-100 rounded mb-2 pr-2 ml-1" alt="avatar">
											<div class="fonticon-container">
														<div class="fonticon-wrap"><i class="fa fa-credit-card"></i></div>
														View Certificate</div>
                                        </div>
                                        <div class="col-12 col-sm-9 col-md-6 col-lg-5">
                                            <table>
                                                <tr>
                                                    <td class="font-weight-bold">Website<br><br></td>
                                                    <td><?php
                                                        if(strlen($details['client_website'])>0){
                                                            echo $details['client_website'];
                                                        }else{
                                                            echo "Not Found";
                                                        }?></td>
                                                </tr>
												<tr>
                                                    <td class="font-weight-bold">Contact<br> Number</td>
                                                    <td><?php
                                                        if(strlen($details['client_contact'])>0){
                                                            echo $details['client_contact'];
                                                        }else{
                                                            echo "Not Found";
                                                        }?></td>
                                                </tr>
												<tr>
                                                    <td class="font-weight-bold">Company DC Location Information</td>
												</tr>
												<tr>
													<td class="font-weight-bold">Address</td>
													 <td><?php
                                                        if(strlen($details['dc_address'])>0){
                                                            echo $details['dc_address'];
                                                        }else{
                                                            echo "Not Found";
                                                        }?></td>
												</tr>
												<tr>
													<td class="font-weight-bold">Phone</td>
                                                    <td><?php
                                                        if(strlen($details['dc_contact'])>0){
                                                            echo $details['dc_contact'];
                                                        }else{
                                                            echo "Not Found";
                                                        }?></td>
												</tr>
												<tr>
													<td class="font-weight-bold">Email</td>
                                                    <td><?php
                                                        if(strlen($details['dc_email'])>0){
                                                            echo $details['dc_email'];
                                                        }else{
                                                            echo "Not Found";
                                                        }?></td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="col-12 col-md-12 col-lg-5">
                                            <table class="ml-0 ml-sm-0 ml-lg-0">
                                                <tr>
                                                    <td class="font-weight-bold">Number of <br>Emplyoees</td>
                                                    <td><?php
                                                        if(strlen($details['client_no_emp'])>0){
                                                            echo $details['client_no_emp'];
                                                        }else{
                                                            echo "Not Found";
                                                        }?></td>
                                                </tr>
												<tr>
                                                    <td class="font-weight-bold">Type of<br>business</td>
                                                    <td><?php
                                                        if(strlen($details['client_business_type'])>0){
                                                            echo $details['client_business_type'];
                                                        }else{
                                                            echo "Not Found";
                                                        }?></td>
                                                </tr>
                                                <tr>
                                                    <td class="font-weight-bold">Company DR Site Information</td>
												</tr>
												<tr>
													<td class="font-weight-bold">Address</td>
                                                    <td><?php
                                                        if(strlen($details['dr_address'])>0){
                                                            echo $details['dr_address'];
                                                        }else{
                                                            echo "Not Found";
                                                        }?></td>
												</tr>
												<tr>
													<td class="font-weight-bold">Phone</td>
                                                    <td><?php
                                                        if(strlen($details['dr_contact'])>0){
                                                            echo $details['dr_contact'];
                                                        }else{
                                                            echo "Not Found";
                                                        }?></td>
												</tr>
												<tr>
													<td class="font-weight-bold">Email</td>
                                                    <td><?php
                                                        if(strlen($details['dr_email'])>0){
                                                            echo $details['dr_email'];
                                                        }else{
                                                            echo "Not Found";
                                                        }?></td>
                                                </tr>
                                               
                                            </table>
                                        </div>
                                        <div class="col-12">
                                            <form action="Client-Manager-Edit.php"  method="post">
                                                <input type="hidden" value="<?php echo $client_id ?>" name="client_id">
                                                <button type="submit" class="btn btn-primary mr-1">
                                                    <i class="feather icon-edit-1"></i> Edit
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- account end -->
                    </div>
                </section>
                <!-- page users view end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2019<a class="text-bold-800 grey darken-2" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent,</a>All rights Reserved</span><span class="float-md-right d-none d-md-block">Hand-crafted & Made with<i class="feather icon-heart pink"></i></span>
            <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
        </p>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="../app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../app-assets/js/core/app-menu.js"></script>
    <script src="../app-assets/js/core/app.js"></script>
    <script src="../app-assets/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../app-assets/js/scripts/pages/app-user.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>