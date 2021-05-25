<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <title>GRC | Customer View</title>
    <?php include_once 'Head.php'; ?>
</head>
<!-- END: Head-->
<!-- Check User is Logged-in or Not-->
<?php
CheckSession();
?>

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click"
      data-menu="vertical-menu-modern" data-col="2-columns">

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
                                <div class="card-title">
                                    <?php
                                    if(strlen($details['company_name'])>0){
                                        echo $details['company_name'];
                                    }else{
                                        echo "";
                                    }?></div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="users-view-image">
                                        <img src="<?php
                                        if(strlen($details['company_logo'])>0){
                                            echo "../companyLogo/".$details['company_logo'];
                                        }else{
                                            echo "../companyLogo/not_found.png";
                                        }?>"
                                             class="users-avatar-shadow w-100 rounded mb-2 pr-2 ml-1" alt="avatar">
                                    </div>
                                    <div class="col-12 col-sm-9 col-md-6 col-lg-5">
                                        <table>
                                            <tr>
                                                <td class="font-weight-bold">Starting Date Of Project</td>
                                                <td>
                                                    <?php
                                                    if(strlen($details['starting_date_of_project'])>0){
                                                        echo $details['starting_date_of_project'];
                                                    }else{
                                                        echo "";
                                                    }?></td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">Contract Period</td>
                                                <td><?php
                                                    if(strlen($details['cp_from'])>0){
                                                        echo $details['cp_from'];
                                                    }else{
                                                        echo "";
                                                    }?></td>
                                                <td>To &emsp;
                                                    <?php
                                                    if(strlen($details['cp_to'])>0){
                                                        echo $details['cp_to'];
                                                    }else{
                                                        echo "";
                                                    }?></td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">Contract Value</td>
                                                <td>
                                                    <?php
                                                    if(strlen($details['contract_value'])>0){
                                                        echo $details['contract_value'];
                                                    }else{
                                                        echo "";
                                                    }?></td>
                                            </tr>

                                        </table>

                                    </div>

                                    <div class="col-12">
                                        <a href="app-user-edit.html" class="btn btn-primary mr-1"><i
                                                    class="feather icon-edit-1"></i> Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- account end -->

                    <!-- General Info Start -->

                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title mb-1">
                                    General Info
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-sm-9 col-md-6 col-lg-5">
                                        <table>
                                            <tr>
                                                <td class="font-weight-bold">Website<br><br></td>
                                                <td><?php
                                                    if(strlen($details['client_website'])>0){
                                                        echo $details['client_website'];
                                                    }else{
                                                        echo "";
                                                    }?></td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">Contact<br> Number</td>
                                                <td><?php
                                                    if(strlen($details['client_contact'])>0){
                                                        echo $details['client_contact'];
                                                    }else{
                                                        echo "";
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
                                                        echo "";
                                                    }?></td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">Phone</td>
                                                <td><?php
                                                    if(strlen($details['dc_contact'])>0){
                                                        echo $details['dc_contact'];
                                                    }else{
                                                        echo "";
                                                    }?></td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">Email</td>
                                                <td><?php
                                                    if(strlen($details['dc_email'])>0){
                                                        echo $details['dc_email'];
                                                    }else{
                                                        echo "";
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
                                                        echo "";
                                                    }?></td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">Type of<br>business</td>
                                                <td><?php
                                                    if(strlen($details['client_business_type'])>0){
                                                        echo $details['client_business_type'];
                                                    }else{
                                                        echo "";
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
                                                        echo "";
                                                    }?></td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">Phone</td>
                                                <td><?php
                                                    if(strlen($details['dr_contact'])>0){
                                                        echo $details['dr_contact'];
                                                    }else{
                                                        echo "";
                                                    }?></td>
                                            </tr>
                                            <tr>
                                                <td class="font-weight-bold">Email</td>
                                                <td><?php
                                                    if(strlen($details['dr_email'])>0){
                                                        echo $details['dr_email'];
                                                    }else{
                                                        echo "";
                                                    }?></td>
                                            </tr>

                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- General Info end -->

                    <!-- information start -->
                    <div class="col-md-6 col-12 ">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title mb-1">SPOC for project Handling</div>
                            </div>
                            <div class="card-body">
                                <table>
                                    <tr>
                                        <td class="font-weight-bold">Name</td>
                                        <td>
                                            <?php
                                            if(strlen($details['spoc_ph_name'])>0){
                                                echo $details['spoc_ph_name'];
                                            }else{
                                                echo "";
                                            }?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Email</td>
                                        <td>
                                            <?php
                                            if(strlen($details['spoc_ph_email'])>0){
                                                echo $details['spoc_ph_email'];
                                            }else{
                                                echo "";
                                            }?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Contact Detail</td>
                                        <td>
                                            <?php
                                            if(strlen($details['spoc_ph_contact'])>0){
                                                echo $details['spoc_ph_contact'];
                                            }else{
                                                echo "";
                                            }?>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- information start -->
                    <!-- social links end -->
                    <div class="col-md-6 col-12 ">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title mb-1">SPOC for Billing Purpose</
                            </div>
                        </div>
                        <div class="card-body">
                            <table>

                                <tr>
                                    <td class="font-weight-bold">Name</td>
                                    <td>
                                        <?php
                                        if(strlen($details['spoc_bill_name'])>0){
                                            echo $details['spoc_bill_name'];
                                        }else{
                                            echo "";
                                        }?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">Email</td>
                                    <td>
                                        <?php
                                        if(strlen($details['spoc_bill_email'])>0){
                                            echo $details['spoc_bill_email'];
                                        }else{
                                            echo "";
                                        }?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">Contact Detail</td>
                                    <td>
                                        <?php
                                        if(strlen($details['spoc_bill_contact'])>0){
                                            echo $details['spoc_bill_contact'];
                                        }else{
                                            echo "";
                                        }?>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- social links end -->
                <!-- permissions start -->

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
<?php
include_once 'Footer.php';
?>
<!-- END: Footer-->

</body>
<!-- END: Body-->

</html>