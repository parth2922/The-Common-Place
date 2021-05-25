<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <title>The Common Place | Dashboard</title>
    <?php include_once "Head.php" ?>
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click"
      data-menu="vertical-menu-modern" data-col="2-columns">

<!-- BEGIN: Main Menu-->
<?php include_once "TopNavbar.php"?>
<?php include_once "LeftMenu.php" ?>
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- Dashboard Analytics Start -->
            <section id="dashboard-analytics">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card bg-analytics text-white">
                            <div class="card-content">
                                <div class="card-body text-center">


                                    <div class="avatar avatar-xl bg-primary shadow mt-0">
                                        <div class="avatar-content">
                                            <i class="feather icon-award white font-large-1"></i>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <h1 class="mb-2 text-white">Welcome
                                                <?php
                                                    if(isset($_SESSION['status']))
                                                    {
                                                      echo $_SESSION['name'];
                                                    }
                                                    else{
                                                      echo "Please Login!";
                                                    }
                                                  ?>
                                        </h1>
                                        <p class="m-auto w-75"></p>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="card">
                        <ul>
                          <li>Ins 1</li>

                          <li>Ins 2</li>

                          <li>Ins 3</li>

                          <li>Ins 4</li>
                        </ul>


                                  <!-- add new sidebar ends -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- Dashboard Analytics end -->
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
