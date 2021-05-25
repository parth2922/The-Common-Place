<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <title>Login</title>
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
                                            <h4 class="mb-0">Login</h4>
                                        </div>
                                    </div>
                                    <p class="px-2">Welcome back, please login to your account.</p>
                                    <div class="card-content">
                                        <div class="card-body pt-1">

                                            <form action="process_login.php" method="post" >

                                                <fieldset
                                                        class="form-label-group form-group position-relative has-icon-left">

                                                    <input type="text" class="form-control" required
                                                           data-validation-required-message="This field is required"
                                                           id="email" name="email" placeholder="Email">

                                                    <div class="form-control-position">
                                                        <i class="feather icon-user"></i>
                                                    </div>

                                                    <label for="email">Email</label>
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

                                                <div class="form-group d-flex justify-content-between align-items-center">
                                                    <div class="text-left">
                                                        <fieldset class="checkbox">
                                                            <div class="vs-checkbox-con vs-checkbox-primary">                                                                
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                    <div class="text-right"><a href="forget.php"                          class="card-link"> Forget Password ?</a>
                                                    </div>
                                                </div>

                                                <a href="register.php" class="btn btn-outline-primary float-left btn-inline">Register</a>

                                                <button type="submit" id="x" value="Login" class="btn btn-primary float-right btn-inline">
                                                    Login
                                                </button>

                                            </form>
                                        </div>
                                    </div>
                                    
                                    <div class="login-footer">
                                        <div class="divider">
                                        </div>
                                        <div class="footer-btn d-inline">
                                        </div>
                                    </div>

                                    <div class="login-footer">

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

</body>

</html>
