<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <?php include_once 'Head.php'; ?>
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

<?php CheckSession(); ?>

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
                            <h2 class="content-header-title float-left mb-0">Create Client</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
               <section class="row flexbox-container">
                <div class="col-xl-12 col-12 d-flex justify-content-center">
                    <div class="card bg-authentication rounded-0 mb-0">
                        <div class="row">
                            <div class="col-lg-12 col-12 p-0">
                                <form class="form-horizontal error" action="../src/database/insertClient.php" method="post" novalidate>
                                    <div class="card rounded-0 mb-0 p-2">
                                        <div class="row m-0">
                                            <div class="col-lg-6 col-12 p-0">
                                                <div class="card-header pt-50 pb-1">
                                                    <div class="card-title">
                                                        <h4 class="mb-0">Creation of Customer Account</h4>
                                                    </div>
                                                </div>
                                                <div class="card-content">
                                                    <div class="card-body pt-0">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <label for="account-username">Company Name</label>
                                                                        <input type="text" name="name" id="client_name"
                                                                               class="form-control" required=""
                                                                               data-validation-required-message="The name field is required It must be at least 3 characters."
                                                                               minlength="3" placeholder="Name"
                                                                               aria-invalid="true"/>
                                                                        </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <label for="account-username">Starting Date Of Project</label>
                                                                        <input type="text" name="starting_date" id="project_start_date"
                                                                               class="form-control pickadate" required=""
                                                                               placeholder="Starting Date"
                                                                               data-validation-required-message="The Starting date field is required."
                                                                               aria-invalid="true"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label for="contract_period">Contract Period</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-12">
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <input type='text' name="contract_from"
                                                                               id="contract_period_from"
                                                                               class="form-control pickadate"
                                                                               data-validation-required-message="Start Date is required"
                                                                               placeholder="From" required=""/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-12">
                                                                <div class="form-group">
                                                                    <div class="controls">
                                                                        <input type='text' name="contract_to"
                                                                               id="contract_period_to" required=""
                                                                               class="form-control pickadate"
                                                                               data-validation-required-message="End Date is required"
                                                                               placeholder="To"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-12">
                                                                <label for="contract_value">Contract Value</label>
                                                                <fieldset class="form-group">
                                                                    <select class="form-control" name="contract_value" id="contract_value">
                                                                        <option>Annual</option>
                                                                        <option>Half Yearly</option>
                                                                        <option>Quarterly</option>
                                                                        <option>Monthly</option>
                                                                    </select>
                                                                </fieldset>
                                                            </div>
															<div class="col-md-6 col-12">
                                                                <label for="service_type">Service Type</label>
                                                                <fieldset class="form-group">
                                                                    <select class="form-control" name="service_type" id="service_type">
                                                                        <option>GRC</option>
                                                                        <option>Self Assessment</option>
                                                                        <option>Audit</option>
                                                                    </select>
                                                                </fieldset>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-12 p-0">
                                                <div class="card-header pt-50 pb-1">
                                                    <div class="card-title">
                                                        <h4 class="mb-0">Company’s Contact Person</h4>
                                                    </div>
                                                </div>
                                                <div class="card-content">
                                                    <div class="card-body pt-0">
                                                        <div class="row mt-1">
                                                                <div class="col-12 col-sm-6">
                                                                    <h6 class="mb-1">SPOC for project Handling</h6>
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <div class="form-group">
                                                                                <div class="controls">
                                                                                    <label>Name</label>
                                                                                    <input type="text" class="form-control"
                                                                                           name="spoc_project_handle_name"
                                                                                           required="" minlength="3"
                                                                                           placeholder="Name"
                                                                                           id="spoc_project_handle_name"
                                                                                           data-validation-required-message="This field is required">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div class="controls">
                                                                            <label>Email</label>
                                                                            <input type="email" class="form-control"
                                                                                   name="spoc_project_handle_email"
                                                                                   id="spoc_project_handle_email"
                                                                                   data-validation-required-message="Must be a valid email"
                                                                                   placeholder="Email" aria-invalid="true">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div class="controls">
                                                                            <label>Contact Detail</label>
                                                                            <input type="number" class="form-control"
                                                                                    data-validation-containsnumber-regex="([^0-9]*[0-9]+)+"
                                                                                   maxlength="10" minlength="10"
                                                                                   name="spoc_project_handle_contact"
                                                                                   id="spoc_project_handle_contact"
                                                                                   data-validation-containsnumber-message="must be number and exact 10 digit."
                                                                                   placeholder="Numbers only" required="" aria-invalid="false">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-6">
                                                                    <h6 class="mb-1 mt-2 mt-sm-0">SPOC for Billing Purpose</h6>
                                                                    <div class="form-group">
                                                                        <div class="controls">

                                                                            <label>Name</label>
                                                                            <input type="text" class="form-control"
                                                                                    required="" minlength="3"
                                                                                   placeholder="Name"
                                                                                   name="spoc_project_bill_name"
                                                                                   id="spoc_project_bill_name"
                                                                                   data-validation-required-message="This field is required">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div class="controls">
                                                                            <label>Email</label>
                                                                            <input type="email" class="form-control"
                                                                                   name="spoc_project_bill_email"
                                                                                   id="spoc_project_bill_email"
                                                                                   data-validation-required-message="Must be a valid email"
                                                                                   placeholder="Email" aria-invalid="true">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div class="controls">
                                                                            <label>Contact Detail</label>
                                                                            <input type="number" class="form-control"
                                                                                   required="" data-validation-containsnumber-regex="([^0-9]*[0-9]+)+"
                                                                                   maxlength="10" minlength="10"
                                                                                   id="spoc_project_bill_contact"
                                                                                   name="spoc_project_bill_contact"
                                                                                   data-validation-containsnumber-message="must be number and exact 10 digit."
                                                                                   placeholder="Numbers only" aria-invalid="false">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <center>
                                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                    Submit</button>
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
   <?php include_once 'Footer.php';	?>


</body>
<!-- END: Body-->

</html>