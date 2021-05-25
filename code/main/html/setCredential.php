<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<!-- BEGIN: Head-->
<head>

    <?php
    //For DataBase Connectivity
    include_once "../src/database/db_config.php";

    ?>

    <link rel="apple-touch-icon" href="../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/plugins/forms/validation/form-validation.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

<!-- Check User is Logged-in or Not-->
<?php
    CheckSession();
    $flag=0;
    if(isset($_POST['client_id'])){

        $id=$_POST['client_id'];
        $conn=OpenCon();
        $query = "SELECT * FROM client_login_info WHERE client_id = $id";
        $result = $conn->query($query);

        if ($result != null) {
            if ($result->num_rows === 1) {
                // output data of each row
                $details = $result->fetch_assoc();
                $flag=1;
            }else {
                $flag=0;
            }
            }else{
            $flag=0;
        }
    }
?>

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
                        <h2 class="content-header-title float-left mb-0">Set Credentials</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <section class="input-validation">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <form class="form-horizontal" method="post" action="../src/database/setCredential.php" novalidate="">
                                        <input name="client_id" value="<?php echo $id?>" hidden>
                                        <input name="flag" value="<?php echo $flag?>" hidden>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Client Name</label>
                                                    <div class="controls">
                                                        <input type="text" name="client_name"
                                                               class="form-control"
                                                               value="<?php if($flag===0){ echo "";}else{ echo $details['client_name'];}?>"
                                                               data-validation-required-message="This field is required"
                                                               placeholder="Client Name">
                                                        <div class="help-block"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Client User Name</label>
                                                    <div class="controls">
                                                        <input type="text" name="user_name"
                                                               class="form-control"
                                                               value="<?php if($flag===0){ echo "";}else{ echo $details['user_name'];}?>"
                                                               data-validation-required-message="This field is required"
                                                               placeholder="User Name">
                                                        <div class="help-block"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <div class="controls">
                                                        <input type="password" name="password"
                                                               class="form-control" placeholder="Password"
                                                               data-validation-required-message="This field is required" >
                                                        <div class="help-block"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Confirm Password</label>
                                                    <div class="controls">
                                                        <input type="password" name="confirm_password"
                                                               data-validation-match-match="password"
                                                               class="form-control" placeholder="Repeat Password"
                                                               data-validation-required-message="Repeat password must match" >
                                                        <div class="help-block"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <center>
                                        <button type="submit" name="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                        </center>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<!-- =================== Java Scripts ===================== -->

<!-- BEGIN: Vendor JS-->
<script src="../app-assets/vendors/js/vendors.min.js"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="../app-assets/vendors/js/forms/validation/jqBootstrapValidation.js"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="../app-assets/js/core/app-menu.js"></script>
<script src="../app-assets/js/core/app.js"></script>
<script src="../app-assets/js/scripts/components.js"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="../app-assets/js/scripts/forms/validation/form-validation.js"></script>
<!-- END: Page JS-->

</body>

</html>

