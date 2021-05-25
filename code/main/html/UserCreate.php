<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <title>GRC | User Create</title>
    <?php include_once 'Head.php'; ?>
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click"
      data-menu="vertical-menu-modern" data-col="2-columns">

<!-- Check User is Logged-in or Not-->
<?php
CheckSession();
?>

<!-- BEGIN: Main Menu-->
<?php include_once "TopNavbar.php" ?>
<?php include_once "LeftMenu.php" ?>
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
            </div>
            <!-- // Basic multiple Column Form section start -->
            <section id="multiple-column-form">
                <div class="row match-height">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Creation Of UserID</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <form class="form">
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="first-name-column">Employee ID</label>
                                                        <input type="text" id="first-name-column" class="form-control"
                                                               placeholder="Employee ID" name="fname-column">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="last-name-column">Employee Name</label>
                                                        <input type="text" id="last-name-column" class="form-control"
                                                               required
                                                               data-validation-required-message="This field is required"
                                                               placeholder="Employee Name" name="lname-column">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="city-column">Role and Designation</label>
                                                        <input type="text" id="city-column" class="form-control"
                                                               required
                                                               data-validation-required-message="This field is required"
                                                               placeholder="Role and Designation" name="city-column">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="country-floating">Department</label>
                                                        <input type="text" id="country-floating" class="form-control"
                                                               required
                                                               data-validation-required-message="This field is required"
                                                               name="country-floating" placeholder="Department">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="company-column">Email ID</label>
                                                        <input type="text" id="company-column" class="form-control"
                                                               name="company-column" required
                                                               data-validation-containsnumber-regex="^[a-zA-Z]+$"
                                                               data-validation-containsnumber-message="The alpha field may only contain alphabetic characters."
                                                               placeholder="Email ID">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="email-id-column">Phone Number</label>
                                                        <input type="email" id="email-id-column" class="form-control"
                                                               required data-validation-containsnumber-regex="(\d)+"
                                                               data-validation-containsnumber-message="The numeric field may only contain numeric characters."
                                                               name="email-id-column" placeholder="Phone Number">
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <button type="submit" class="btn btn-primary mr-1 mb-1">Submit
                                                    </button>
                                                    <button type="reset" class="btn btn-outline-warning mr-1 mb-1">
                                                        Reset
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- // Basic Floating Label Form section end -->

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