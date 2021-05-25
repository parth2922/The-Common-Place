<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <title>The Common Place | Dashboard</title>
    <?php include_once "Head.php" ?>
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

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

        $userid =  $_SESSION['userID'];

        $query = "select *from user where uid='$userid'";

        $res=mysqli_query($conn,$query) or die("Can't Execute Query...");

                $username = 0;
                $usergen = 0;
                $collegeID = 0;
                $useremail = 0;
                $userdept = 0;
                $userpass = 0;
                $userquestion = 0;
                $userans = 0;
                $userphoto = 0;

           while($row=mysqli_fetch_assoc($res))
            {
                $username = $row["uname"];
                $usergen = $row["ugen"];
                $collegeID = $row["userID"];
                $useremail = $row["uemail"];
                $userdept = $row["udept"];
                $userpass = "";
                $userquestion = $row["question"];
                $userans = $row["ans"];
                $userphoto = $row["uphoto"];
            }
?>


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
            <div class="col-lg-6 col-12 p-0">
                                <div class="card rounded-0 mb-0 px-2">
                                    <div class="card-header pb-1">
                                        <div class="card-title">
                                            <h4 class="mb-0">EDIT PROFILE</h4>
                                        </div>
                                    </div>

                                    <div class="card-content">
                                        <div class="card-body pt-1">

                                            <form action="process_update.php" method="post" enctype="multipart/form-data">

                                                <fieldset
                                                        class="form-label-group form-group position-relative has-icon-left">

                                                        <img id="userphoto" src="profile/<?php echo $userphoto?>" height=250 width=250> <br><br>

                                                        <input type="file" id="uploadfile" name="uploadfile" value=""/>

                                                </fieldset>

                                                <fieldset
                                                        class="form-label-group form-group position-relative has-icon-left">

                                                        <input type="text" value="<?php echo $username?>" class="form-control" required data-validation-required-message="This field is required" id="usernm" name="usernm" placeholder="Full Name">

                                                    <div class="form-control-position">
                                                        <i class="feather icon-user"></i>
                                                    </div>

                                                </fieldset>

                                                <div class="form-label-group position-relative has-icon-left">
                                                    <div class="row">
                                                    <fieldset class="ml-2">
                                                        <div class="vs-radio-con vs-radio-primary">
                                                        <span class="">Gender</span>
                                                        </div>
                                                    </fieldset>

                                                    <fieldset class="ml-2">
                                                        <div class="vs-radio-con vs-radio-primary">
                                                            <input type="radio" name="gen" value="male" checked>
                                                            <span class="vs-radio vs-radio-sm">
                                                            <span class="vs-radio--border"></span>
                                                            <span class="vs-radio--circle"></span>
                                                        </span>
                                                            <span class="">Male</span>
                                                        </div>
                                                    </fieldset>

                                                    <fieldset class="ml-1">
                                                        <div class="vs-radio-con vs-radio-primary">
                                                            <input type="radio" name="gen" value="female" >
                                                            <span class="vs-radio vs-radio-sm">
                                                            <span class="vs-radio--border"></span>
                                                            <span class="vs-radio--circle"></span>
                                                        </span>
                                                            <span class="">Female</span>
                                                        </div>
                                                    </fieldset>
                                                    <fieldset class="ml-1">
                                                        <div class="vs-radio-con vs-radio-primary">
                                                            <input type="radio" name="gen" value="other" >
                                                            <span class="vs-radio vs-radio-sm">
                                                            <span class="vs-radio--border"></span>
                                                            <span class="vs-radio--circle"></span>
                                                        </span>
                                                            <span class="">Other</span>
                                                        </div>
                                                    </fieldset>
                                                    </div>
                                                </div>

                                                <br>

                                                <fieldset
                                                        class="form-label-group form-group position-relative has-icon-left">

                                                    <input type="text" class="form-control" required
                                                           data-validation-required-message="This field is required" value="<?php echo $collegeID ?>" id="id" name="id" placeholder="College ID">

                                                    <div class="form-control-position">
                                                        <i class="feather icon-home"></i>
                                                    </div>

                                                    <label for="id">College ID</label>
                                                </fieldset>

                                                <fieldset
                                                        class="form-label-group form-group position-relative has-icon-left">

                                                    <input type="text" class="form-control" required
                                                           data-validation-required-message="This field is required"
                                                           id="email" name="email" placeholder="Email" value="<?php echo $useremail ?>">

                                                    <div class="form-control-position">
                                                        <i class="feather icon-mail"></i>
                                                    </div>

                                                    <label for="email">Email</label>
                                                </fieldset>


                                                <fieldset class="form-group">
                                                    <label for="basicInput">Department Name</label>
                                                    <div class="controls position-relative has-icon-left">
                                                      <select type="text" class="form-control" id="dept" name="dept" required>
                                                        <option value="">--Select Department Name--</option>
                                                        <option value="ARIP">ARIP</option>
                                                        <option value="RPCP">RPCP</option>
                                                        <option value="PDPIAS">PDPIAS</option>
                                                        <option value="DEPSTAR">DEPSTAR</option>
                                                        <option value="CSPIT">CSPIT</option>
                                                        <option value="CMPICA">CMPICA</option>
                                                        <option value="MTIN">MTIN</option>
                                                        <option value="CIPS">CIPS</option>

                                                      </select>


                                                        <div class="form-control-position">
                                                            <i class="fa fa-hand-o-right"></i>
                                                        </div>
                                                    </div>
                                                </fieldset>


                                                <fieldset class="form-label-group position-relative has-icon-left">

                                                    <input type="password" class="form-control" required
                                                           data-validation-required-message="Password must be contain 8 characters"
                                                           id="pwd" name="pwd" placeholder="Password" value="<?php echo $userpass ?>">

                                                    <div class="form-control-position">
                                                        <i class="feather icon-lock"></i>
                                                    </div>

                                                    <label for="pwd">Password</label>

                                                </fieldset>
                                                <fieldset class="form-label-group position-relative has-icon-left">

                                                    <input type="text" class="form-control" required
                                                           data-validation-required-message="Write Question"
                                                           id="que" name="que" placeholder="Question" value="<?php echo $userquestion ?>">

                                                    <div class="form-control-position">
                                                        <i class="fa fa-hand-o-right"></i>
                                                    </div>

                                                    <label for="pwd">Question</label>

                                                </fieldset>
                                                <fieldset class="form-label-group position-relative has-icon-left">

                                                    <input type="text" class="form-control" required
                                                           data-validation-required-message="Write Answer"
                                                           id="ans" name="ans" placeholder="Answer" value="<?php echo $userans ?>">

                                                    <div class="form-control-position">
                                                        <i class="fa fa-hand-o-right"></i>
                                                    </div>

                                                    <label for="pwd">Answer</label>

                                                </fieldset>


                                                <button type="submit" id="x" value="Register" class="btn btn-primary float-right btn-inline">
                                                    Update
                                                </button>

                                            </form>
                                        </div>
                                    </div>
                                    <div class="login-footer">
                                        <div class="divider">
                                        </div>
                                        <div class="footer-btn d-inline">
                                          <?php
                                              if(isset($_GET['error']))
                                              {
                                                echo '<font color="red">'.$_GET['error'].'</font>';
                                                echo '<br><br>';
                                              }
                                            ?>
                                        </div>
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
