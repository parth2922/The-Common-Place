<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    
</head>
<!-- END: Head-->
	<?php include_once 'Head.php'; ?>
<!-- BEGIN: Body-->


<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
<?php include_once 'TopNavbar.php'; ?>
<?php include_once 'LeftMenu.php'; ?>

<!-- =======================Get User Details=========================== -->
<?php

$client_id=$_POST['client_id'];
$conn=OpenCon();
$query = "SELECT * FROM client_info WHERE id = $client_id";
$result = $conn->query($query);
$details="";
if ($result->num_rows === 1) {
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
                <!-- users edit start -->
                <section class="users-edit">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">
                                        <!-- users edit account form start -->
                                        <form class="form-horizontal error" method="post" action="../src/database/clientUpdate.php" enctype="multipart/form-data" novalidate>
                                            <input name="client_id" value="<?php echo $client_id?>" hidden>
                                            <div class="card rounded-0 mb-0 p-2">
												<div class="row">
												<div class="col-md-6 col-12">
                                                <div class="media">
                                                    <a href="javascript: void(0);">
                                                        <img src="<?php
                                                        if(strlen($details['company_logo'])>0){
                                                            echo "../companyLogo/".$details['company_logo'];
                                                        }else{
                                                            echo '../companyLogo/not_found.png';
                                                        }?>"
                                                        class="rounded mr-75" alt="profile image" height="75" width="75">
                                                    </a>
                                                    <div class="media-body mt-75">
                                                        <div class="col-12 px-0 d-flex flex-sm-row flex-column justify-content-start">
                                                            <label class="btn btn-sm btn-primary ml-50 mb-50 mb-sm-0 cursor-pointer" for="account-upload">Upload new Logo</label>
                                                            <input type="file" id="account-upload" name="cmp_logo" hidden>
                                                        </div>
                                                        <p class="text-muted ml-75 mt-50"><small>Allowed JPG, JPEG or PNG. Max
                                                                size of 800kB</small></p>
                                                    </div>
                                                </div>
												</div>
												<div class="col-md-6 col-12">
												<div class="media">
                                                    <a href="javascript: void(0);">
                                                        <div class="fonticon-container">
														<div class="fonticon-wrap"><i class="fa fa-credit-card"></i></div></div>
                                                    </a>
                                                    <div class="media-body mt-75">
                                                        <div class="col-12 px-0 d-flex flex-sm-row flex-column justify-content-start">
                                                            <label class="btn btn-sm btn-primary ml-50 mb-50 mb-sm-0 cursor-pointer"
                                                                   for="account-upload">Upload new Certificate</label>
                                                            <input type="file" id="account-upload" name="cmp_certificate" hidden>
                                                        </div>
                                                        <p class="text-muted ml-75 mt-50"><small>Allowed JPG, GIF or PNG. Max
                                                                size of
                                                                800kB</small></p>
                                                    </div>
                                                </div>
												</div>
												</div>
                                                <div class="row m-0">
                                                    <div class="col-lg-6 col-12 p-0">
                                                        <div class="card-header pt-50 pb-1">
                                                            <div class="card-title">
                                                                <h4 class="mb-0">Customer Account</h4>
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
                                                                                       aria-invalid="true"
                                                                                       value="<?php
                                                                                       if(strlen($details['company_name'])>0){
                                                                                           echo $details['company_name'];
                                                                                       }else{
                                                                                           echo "Not Found";
                                                                                       }
                                                                                       ?>"
                                                                                />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 mb-1">
                                                                        <fieldset class="form-group">
                                                                            <form>
                                                                                <label for="account-username">Starting Date Of
                                                                                    Project</label>
                                                                                <input type='text' class="form-control pickadate"
                                                                                       name="starting_date"
                                                                                       value="<?php
                                                                                       if(strlen($details['starting_date_of_project'])>0){
                                                                                           echo $details['starting_date_of_project'];
                                                                                       }else{
                                                                                           echo "Not Found";
                                                                                       }?>"
                                                                                />
                                                                            </form>
                                                                        </fieldset>
                                                                    </div>
                                                                    <div class="col-md-6 col-12">
                                                                        <fieldset class="form-group">
                                                                                <label for="account-username">Contract Period</label>
                                                                                <input type='text' class="form-control pickadate"
                                                                                       placeholder="From" name="contract_from"
                                                                                       value="<?php
                                                                                       if(strlen($details['cp_from'])>0){
                                                                                           echo $details['cp_from'];
                                                                                       }else{
                                                                                           echo "Not Found";
                                                                                       }?>"
                                                                                />
                                                                        </fieldset>
                                                                    </div>
                                                                    <div class="col-md-6 col-12">
                                                                        <fieldset class="form-group">
                                                                                <label for="account-username"></label>
                                                                                <input type='text' class="form-control pickadate"
                                                                                       placeholder="To" name="contract_to"
                                                                                       value="<?php
                                                                                       if(strlen($details['cp_to'])>0){
                                                                                           echo $details['cp_to'];
                                                                                       }else{
                                                                                           echo "Not Found";
                                                                                       }?>"
                                                                                />
                                                                        </fieldset>
                                                                    </div>
                                                                    <div class="col-md-6 col-12">
                                                                        <label for="account-username">Contract Value</label>
                                                                        <fieldset class="form-group">
                                                                            <select class="form-control" id="basicSelect" name="contract_value">
                                                                                <option <?php if(strcmp("Annual",$details['contract_value'])===0){echo "selected";} ?>>Annual</option>
                                                                                <option <?php if(strcmp("Half Yearly",$details['contract_value'])===0){echo "selected";} ?>>Half Yearly</option>
                                                                                <option <?php if(strcmp("Quarterly",$details['contract_value'])===0){echo "selected";} ?>>Quarterly</option>
                                                                                <option <?php if(strcmp("Monthly",$details['contract_value'])===0){echo "selected";} ?>>Monthly</option>
                                                                            </select>
                                                                        </fieldset>
                                                                    </div>
                                                                    <div class="col-md-6 col-12">
                                                                        <label for="account-username">Service Type</label>
                                                                        <fieldset class="form-group">
                                                                            <select class="form-control" id="basicSelect" name="service_type">
                                                                                <option <?php if(strcmp("GRC",$details['service_type'])===0){echo "selected";} ?>>GRC</option>
                                                                                <option <?php if(strcmp("Self Assessment",$details['service_type'])===0){echo "selected";} ?>>Self Assessment</option>
                                                                                <option <?php if(strcmp("Audit",$details['service_type'])===0){echo "selected";} ?>>Audit</option>
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
                                                                                               data-validation-required-message="This field is required"
                                                                                               value="<?php
                                                                                               if(strlen($details['spoc_ph_name'])>0){
                                                                                                   echo $details['spoc_ph_name'];
                                                                                               }else{
                                                                                                   echo "Not Found";
                                                                                               }?>"
                                                                                        >
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
                                                                                       placeholder="Email" aria-invalid="true"
                                                                                       value="<?php
                                                                                       if(strlen($details['spoc_ph_email'])>0){
                                                                                           echo $details['spoc_ph_email'];
                                                                                       }else{
                                                                                           echo "Not Found";
                                                                                       }?>"
                                                                                >
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <div class="controls">
                                                                                <label>Contact Detail</label>
                                                                                <input type="number" class="form-control"
                                                                                       required="" data-validation-containsnumber-regex="([^0-9]*[0-9]+)+"
                                                                                       maxlength="10" minlength="10"
                                                                                       name="spoc_project_handle_contact"
                                                                                       id="spoc_project_handle_contact"
                                                                                       data-validation-containsnumber-message="must be number and exact 10 digit."
                                                                                       placeholder="Numbers only" aria-invalid="false"
                                                                                       value="<?php
                                                                                       if(strlen($details['spoc_ph_contact'])>0){
                                                                                           echo $details['spoc_ph_contact'];
                                                                                       }else{
                                                                                           echo "Not Found";
                                                                                       }?>"
                                                                                >
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
                                                                                       data-validation-required-message="This field is required"
                                                                                       value="<?php
                                                                                       if(strlen($details['spoc_bill_name'])>0){
                                                                                           echo $details['spoc_bill_name'];
                                                                                       }else{
                                                                                           echo "Not Found";
                                                                                       }?>"
                                                                                >
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <div class="controls">
                                                                                <label>Email</label>
                                                                                <input type="email" class="form-control"
                                                                                       name="spoc_project_bill_email"
                                                                                       id="spoc_project_bill_email"
                                                                                       data-validation-required-message="Must be a valid email"
                                                                                       placeholder="Email" aria-invalid="true"
                                                                                       value="<?php
                                                                                       if(strlen($details['spoc_bill_email'])>0){
                                                                                           echo $details['spoc_bill_email'];
                                                                                       }else{
                                                                                           echo "Not Found";
                                                                                       }?>">
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
                                                                                       placeholder="Numbers only" aria-invalid="false"
                                                                                       value="<?php
                                                                                       if(strlen($details['spoc_bill_contact'])>0){
                                                                                           echo $details['spoc_bill_contact'];
                                                                                       }else{
                                                                                           echo "Not Found";
                                                                                       }?>"
                                                                                >
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8 offset-md-4">
                                                        <button class="btn btn-primary mr-1 mb-1" type="submit">Submit
                                                        </button>
                                                        <button class="btn btn-outline-warning mr-1 mb-1" type="reset">
                                                            Cancel
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- users edit account form ends -->
                                    </div>
                                    <div class="tab-pane" id="information" aria-labelledby="information-tab" role="tabpanel">
                                        <!-- users edit Info form start -->
                                        <form novalidate>
                                            <div class="row mt-1">
                                                <div class="col-12 col-sm-6">
                                                    <h5 class="mb-1"><i class="feather icon-user mr-25"></i>Personal Information</h5>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    <label>Birth date</label>
                                                                    <input type="text" class="form-control birthdate-picker" required placeholder="Birth date" data-validation-required-message="This birthdate field is required">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Mobile</label>
                                                            <input type="text" class="form-control" value="&#43;6595895857" placeholder="Mobile number here..." data-validation-required-message="This mobile number is required">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Website</label>
                                                            <input type="text" class="form-control" required placeholder="Website here..." value="https://rowboat.com/insititious/Angelo" data-validation-required-message="This Website field is required">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Languages</label>
                                                        <select class="form-control" id="users-language-select2" multiple="multiple">
                                                            <option value="English" selected>English</option>
                                                            <option value="Spanish">Spanish</option>
                                                            <option value="French">French</option>
                                                            <option value="Russian">Russian</option>
                                                            <option value="German">German</option>
                                                            <option value="Arabic" selected>Arabic</option>
                                                            <option value="Sanskrit">Sanskrit</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Gender</label>
                                                        <ul class="list-unstyled mb-0">
                                                            <li class="d-inline-block mr-2">
                                                                <fieldset>
                                                                    <div class="vs-radio-con">
                                                                        <input type="radio" name="vueradio" checked value="false">
                                                                        <span class="vs-radio">
                                                                            <span class="vs-radio--border"></span>
                                                                            <span class="vs-radio--circle"></span>
                                                                        </span>
                                                                        Male
                                                                    </div>
                                                                </fieldset>
                                                            </li>
                                                            <li class="d-inline-block mr-2">
                                                                <fieldset>
                                                                    <div class="vs-radio-con">
                                                                        <input type="radio" name="vueradio" value="false">
                                                                        <span class="vs-radio">
                                                                            <span class="vs-radio--border"></span>
                                                                            <span class="vs-radio--circle"></span>
                                                                        </span>
                                                                        Female
                                                                    </div>
                                                                </fieldset>
                                                            </li>
                                                            <li class="d-inline-block mr-2">
                                                                <fieldset>
                                                                    <div class="vs-radio-con">
                                                                        <input type="radio" name="vueradio" value="false">
                                                                        <span class="vs-radio">
                                                                            <span class="vs-radio--border"></span>
                                                                            <span class="vs-radio--circle"></span>
                                                                        </span>
                                                                        Other
                                                                    </div>
                                                                </fieldset>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Contact Options</label>
                                                        <ul class="list-unstyled mb-0">
                                                            <li class="d-inline-block mr-2">
                                                                <fieldset>
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input" checked name="customCheck1" id="customCheck1">
                                                                        <label class="custom-control-label" for="customCheck1">Email</label>
                                                                    </div>
                                                                </fieldset>
                                                            </li>
                                                            <li class="d-inline-block mr-2">
                                                                <fieldset>
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input" checked name="customCheck2" id="customCheck2">
                                                                        <label class="custom-control-label" for="customCheck2">Message</label>
                                                                    </div>
                                                                </fieldset>
                                                            </li>
                                                            <li class="d-inline-block mr-2">
                                                                <fieldset>
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input" name="customCheck3" id="customCheck3">
                                                                        <label class="custom-control-label" for="customCheck3">Phone</label>
                                                                    </div>
                                                                </fieldset>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <h5 class="mb-1 mt-2 mt-sm-0"><i class="feather icon-map-pin mr-25"></i>Address</h5>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Address Line 1</label>
                                                            <input type="text" class="form-control" value="A-65, Belvedere Streets" required placeholder="Address Line 1" data-validation-required-message="This Address field is required">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Address Line 2</label>
                                                            <input type="text" class="form-control" required placeholder="Address Line 2" data-validation-required-message="This Address field is required">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Postcode</label>
                                                            <input type="text" class="form-control" required placeholder="postcode" value="1868" data-validation-required-message="This Postcode field is required">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>City</label>
                                                            <input type="text" class="form-control" required value="New York" data-validation-required-message="This Time Zone field is required">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>State</label>
                                                            <input type="text" class="form-control" required value="New York" data-validation-required-message="This Time Zone field is required">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Country</label>
                                                            <input type="text" class="form-control" required value="United Kingdom" data-validation-required-message="This Time Zone field is required">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                                    <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Save
                                                        Changes</button>
                                                    <button type="reset" class="btn btn-outline-warning">Reset</button>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- users edit Info form ends -->
                                    </div>
                                    <div class="tab-pane" id="social" aria-labelledby="social-tab" role="tabpanel">
                                        <!-- users edit socail form start -->
                                        <form novalidate>
                                            <div class="row">
                                                <div class="col-12 col-sm-6">

                                                    <fieldset>
                                                        <label>Twitter</label>
                                                        <div class="input-group mb-75">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text feather icon-twitter" id="basic-addon3"></span>
                                                            </div>
                                                            <input type="text" class="form-control" value="https://www.twitter.com/adoptionism744" placeholder="https://www.twitter.com/" aria-describedby="basic-addon3">
                                                        </div>

                                                        <label>Facebook</label>
                                                        <div class="input-group mb-75">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text feather icon-facebook" id="basic-addon4"></span>
                                                            </div>
                                                            <input type="text" class="form-control" value="https://www.facebook.com/adoptionism664" placeholder="https://www.facebook.com/" aria-describedby="basic-addon4">
                                                        </div>
                                                        <label>Instagram</label>
                                                        <div class="input-group mb-75">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text feather icon-instagram" id="basic-addon5"></span>
                                                            </div>
                                                            <input type="text" class="form-control" value="https://www.instagram.com/adopt-ionism744" placeholder="https://www.instagram.com/" aria-describedby="basic-addon5">
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <label>Github</label>
                                                    <div class="input-group mb-75">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text feather icon-github" id="basic-addon9"></span>
                                                        </div>
                                                        <input type="text" class="form-control" value="https://www.github.com/madop818" placeholder="https://www.github.com/" aria-describedby="basic-addon9">
                                                    </div>
                                                    <label>Codepen</label>
                                                    <div class="input-group mb-75">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text feather icon-codepen" id="basic-addon12"></span>
                                                        </div>
                                                        <input type="text" class="form-control" value="https://www.codepen.com/adoptism243" placeholder="https://www.codepen.com/" aria-describedby="basic-addon12">
                                                    </div>
                                                    <label>Slack</label>
                                                    <div class="input-group mb-75">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text feather icon-slack" id="basic-addon11"></span>
                                                        </div>
                                                        <input type="text" class="form-control" value="@adoptionism744" placeholder="https://www.slack.com/" aria-describedby="basic-addon11">
                                                    </div>
                                                </div>
                                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                                    <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Save
                                                        Changes</button>
                                                    <button type="reset" class="btn btn-outline-warning">Reset</button>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- users edit socail form ends -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- users edit ends -->
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <?php include_once "Footer.php"?>
</body>
<!-- END: Body-->

</html>