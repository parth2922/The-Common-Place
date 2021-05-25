<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
<?php include_once 'Head.php'; ?>
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

<!-- Check User is Logged-in or Not-->
<?php
CheckSession();
?>
    <!-- BEGIN: Header-->
    <?php include_once "TopNavbar.php" ?>
	<?php include_once "LeftMenu.php" ?>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Standerd Library</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Data list view starts -->
                <section id="data-list-view" class="data-list-view-header">
                    <div class="action-btns d-none">
                        <div class="btn-dropdown mr-1 mb-1">
                        </div>
                    </div>

                    <!-- DataTable starts -->
                    <div class="table-responsive">
                        <table class="table data-list-view">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>NAME</th>
                                    <th>CATEGORY</th>
                                    <th>ISSUED BY</th>
                                    <th>ISSUE DATE</th>
                                    <th>COST</th>
									<th>COMMENTS</th>
                                    <th>ACTION</th>
									
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td class="product-name">Apple Watch series 4 GPS</td>
                                    <td class="product-category">Computers</td>
                                    <td>
                                        MR.PATEL
                                    </td>
                                    <td>
                                        01-02-2020
                                    </td>
                                    <td class="product-price">$69.99</td>
									<td>-
									</td>
                                    <td class="product-action">
                                        <span class="action-edit"><i class="feather icon-edit"></i></span>
                                        <span class="action-delete"><i class="feather icon-trash"></i></span>
                                    </td>
									
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                    <!-- DataTable ends -->

                    <!-- add new sidebar starts -->
                    <div class="add-new-data-sidebar">
                        <div class="overlay-bg"></div>
                        <div class="add-new-data">
                            <div class="div mt-2 px-2 d-flex new-data-title justify-content-between">
                                <div>
                                    <h4 class="text-uppercase">List View Data</h4>
                                </div>
                                <div class="hide-data-sidebar">
                                    <i class="feather icon-x"></i>
                                </div>
                            </div>
                            <div class="data-items pb-3">
                                <div class="data-fields px-2 mt-3">
                                    <div class="row">
                                        <div class="col-sm-12 data-field-col">
                                            <label for="data-name">Name</label>
                                            <input type="text" class="form-control" id="data-name" required data-validation-required-message="This field is required">
                                        </div>
                                        <div class="col-sm-12 data-field-col">
                                            <label for="data-name">Category</label>
                                            <input type="text" class="form-control" id="data-category" required data-validation-required-message="This field is required">
                                        </div>
										<div class="col-sm-12 data-field-col">
                                            <label for="data-name">Issued By</label>
                                            <input type="text" class="form-control" id="data-IssuedBy" required data-validation-required-message="This field is required">
                                        </div>
										<div class="col-sm-12 data-field-col">
                                            <label for="data-name">Issue Date</label>
                                            <input type="text" class="form-control" id="data-Date" required data-validation-required-message="This field is required">
                                        </div>
                                        <div class="col-sm-12 data-field-col">
                                            <label for="data-price">Cost</label>
                                            <input type="text" class="form-control" id="data-cost" required data-validation-required-message="This field is required">
                                        </div>
										<div class="col-sm-12 data-field-col">
                                            <label for="data-name">Comments</label>
                                            <input type="text" class="form-control" id="data-Comments" required data-validation-required-message="This field is required">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="add-data-footer d-flex justify-content-around px-3 mt-2">
                                <div class="add-data-btn">
                                    <button class="btn btn-primary">Add Data</button>
                                </div>
                                <div class="cancel-data-btn">
                                    <button class="btn btn-outline-danger">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- add new sidebar ends -->
                </section>
                <!-- Data list view end -->

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


</body>
<!-- END: Body-->

</html>