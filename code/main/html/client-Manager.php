<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
   
</head>
<!-- END: Head-->
<?php include_once 'Head.php'; ?>
<!-- BEGIN: Body-->
<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

<!-- Check User is Logged-in or Not-->
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
                            <h2 class="content-header-title float-left mb-0">Client Management</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Zero configuration table -->
                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"></h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        <div class="table-responsive">
                                            <table class="table zero-configuration">
                                                <thead>
                                                <tr>
                                                    <th>COMPANY NAME</th>
                                                    <th>WEBSITE</th>
                                                    <th>CONTACT NUMBER</th>
                                                    <th>ACTION</th>
                                                </tr>
                                                </thead>
                                                  <tbody>
                                                  <?php
                                                  $conn=OpenCon();
                                                  $query = "SELECT * FROM client_info";
                                                  $result = $conn->query($query);

                                                  if ($result->num_rows > 0) {
                                                  // output data of each row

                                                  while ($details = $result->fetch_assoc()) {
                                                  ?>
                                                    <tr>
                                                        <td><?php echo $details['company_name']; ?></td>
                                                        <td><?php echo $details['client_website']; ?></td>
                                                        <td class="product-price"><?php echo $details['client_contact']; ?></td>
                                                        <td class="product-action">
                                                         <div class="row">
                                                            <span class="action-View ">
                                                                <form action="Client-View.php" method="post">
                                                                    <input type="hidden" name="client_id" value="<?php echo $details['id']; ?>">
                                                                    <button type="submit" class="btn btn-icon btn-flat-success mr-1 mb-1 waves-effect waves-light"><i class="feather icon-eye"></i></button>
                                                                </form>
                                                            </span>
                                                            <span class="action-edit ">
                                                                <form action="Client-Manager-Edit.php" method="post">
                                                                    <input type="hidden" name="client_id" value="<?php echo $details['id']; ?>">
                                                                    <button type="submit" class="btn btn-icon btn-flat-warning mr-1 mb-1 waves-effect waves-light"><i class="feather icon-edit"></i></button>
                                                                </form>
                                                            </span>
                                                             <span class="action-delete ">
                                                                <form action="../src/database/clientDelete.php" method="post">
                                                                    <input type="hidden" name="client_id" value="<?php echo $details['id']; ?>">
                                                                    <button type="submit" class="btn btn-icon btn-flat-danger mr-1 mb-1 waves-effect waves-light"><i class="feather icon-trash"></i></button>
                                                                </form>
                                                            </span>
                                                             <span class="action-update ">
                                                                <form action="setCredential.php" method="post">
                                                                    <input type="hidden" name="client_id" value="<?php echo $details['id']; ?>">
                                                                    <button type="submit" class="btn btn-icon btn-flat-primary mr-1 mb-1 waves-effect waves-light"><i class="fa fa-key"></i></button>
                                                                </form>
                                                            </span>
                                                         </div>
                                                        </td>
                                                        <?php   }
                                                        }
                                                        ?>
                                                  </tbody>
                                                <tfoot>
                                                <tr>
                                                   <th>COMPANY NAME</th>
                                                    <th>WEBSITE</th>
                                                    <th>CONTACT NUMBER</th>
                                                    <th>ACTION</th>
                                                </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Zero configuration table -->
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    
	<?php include_once 'Footer.php'; ?>
    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>