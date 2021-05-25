<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <title>Register</title>
    <?php include_once 'Head.php'; ?>
</head>

<body class="vertical-layout vertical-menu-modern 1-column  navbar-floating footer-static bg-full-screen-image  blank-page blank-page"
      data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
<!-- BEGIN: Content-->
<div class="app-content content">

    <div class="content-wrapper">

        <div class="content-body">

            <section class="row flexbox-container">

                <div class="col-xl-8 col-11 d-flex justify-content-center">

                    <div class="card bg-authentication rounded-0 mb-0">

                        <div class="row m-0">

                            <div class="col-lg-6 d-lg-block d-none text-center align-self-center px-1 py-0">

                                <img src="../main/app-assets/images/pages/login.png" alt="branding logo">

                            </div>

                            <div class="col-lg-6 col-12 p-0">
                                <div class="card rounded-0 mb-0 px-2">
                                    <div class="card-header pb-1">
                                        <div class="card-title">
                                            <h4 class="mb-0">Register</h4>
                                        </div>
                                    </div>
                                    <p class="px-2">Welcome, please Register your account.</p>
                                    <div class="card-content">
                                        <div class="card-body pt-1">

                                            <form action="process_register.php" method="post" >

                                                <fieldset
                                                        class="form-label-group form-group position-relative has-icon-left">

                                                    <input type="text" class="form-control" required
                                                           data-validation-required-message="This field is required"
                                                           id="usernm" name="usernm" placeholder="Full Name">

                                                    <div class="form-control-position">
                                                        <i class="feather icon-user"></i>
                                                    </div>

                                                    <label for="usernm">Full Name</label>
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

                                                <fieldset
                                                        class="form-label-group form-group position-relative has-icon-left">

                                                    <input type="text" class="form-control" required
                                                           data-validation-required-message="This field is required"
                                                           id="id" name="id" placeholder="College ID">

                                                    <div class="form-control-position">
                                                        <i class="feather icon-home"></i>
                                                    </div>

                                                    <label for="id">College ID</label>
                                                </fieldset>

                                                <fieldset
                                                        class="form-label-group form-group position-relative has-icon-left">

                                                    <input type="text" class="form-control" required
                                                           data-validation-required-message="This field is required"
                                                           id="email" name="email" placeholder="Email">

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
                                                           id="pwd" name="pwd" placeholder="Password">

                                                    <div class="form-control-position">
                                                        <i class="feather icon-lock"></i>
                                                    </div>

                                                    <label for="pwd">Password</label>

                                                </fieldset>
                                                <fieldset class="form-label-group position-relative has-icon-left">

                                                    <input type="text" class="form-control" required
                                                           data-validation-required-message="Write Question"
                                                           id="que" name="que" placeholder="Question">

                                                    <div class="form-control-position">
                                                        <i class="fa fa-hand-o-right"></i>
                                                    </div>

                                                    <label for="pwd">Question</label>

                                                </fieldset>
                                                <fieldset class="form-label-group position-relative has-icon-left">

                                                    <input type="text" class="form-control" required
                                                           data-validation-required-message="Write Answer"
                                                           id="ans" name="ans" placeholder="Answer">

                                                    <div class="form-control-position">
                                                        <i class="fa fa-hand-o-right"></i>
                                                    </div>

                                                    <label for="pwd">Answer</label>

                                                </fieldset>
                                                <a href="login.php" class="btn btn-outline-primary float-left btn-inline">Login</a>

                                                <button type="submit" id="x" value="Register" class="btn btn-primary float-right btn-inline">
                                                    Register
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
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<!-- END: Content-->
</body>
<!-- END: Body-->

</html>
