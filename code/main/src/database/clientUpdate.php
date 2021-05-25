<head>

    <link rel="shortcut icon" type="image/x-icon" href="../../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/core/colors/palette-gradient.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<?php
include_once 'db_config.php';


$client_id=$_POST['client_id'];
$company_name=$_POST['name'];
$starting_date_of_project=$_POST['starting_date'];
$cp_from=$_POST['contract_from'];
$cp_to=$_POST['contract_to'];
$contract_value=$_POST['contract_value'];
$service_type=$_POST['service_type'];
$spoc_ph_name=$_POST['spoc_project_handle_name'];
$spoc_ph_email=$_POST['spoc_project_handle_email'];
$spoc_ph_contact=$_POST['spoc_project_handle_contact'];
$spoc_bill_name=$_POST['spoc_project_bill_name'];
$spoc_bill_email=$_POST['spoc_project_bill_email'];
$spoc_bill_contact=$_POST['spoc_project_bill_contact'];


if(isset($_FILES['cmp_logo'])) {


//======================== Upload File ====================

    #Set File Name
        $pname = $client_id.".jpg";

    #Store Temp File Name
        $tname = $_FILES['cmp_logo']['tmp_name'];

   #Set Upload Directory Name
        $upload_dir = '../../companyLogo/';

    // Valid file extensions
    $extensions_arr = array("jpg","jpeg","png","gif");
    $imageFileType = strtolower(pathinfo($_FILES['cmp_logo']['name'],PATHINFO_EXTENSION));
    // Check extension

    if (in_array($imageFileType, $extensions_arr)) {

        // Insert record
        $logo = $pname;

        // Upload file
        move_uploaded_file($tname, $upload_dir . $pname);

        $sql ="UPDATE `client_info` SET `company_name`='$company_name',`starting_date_of_project`='$starting_date_of_project',
        `cp_from`='$cp_from',`cp_to`='$cp_to',`contract_value`='$contract_value',`service_type`='$service_type',
        `spoc_ph_name`='$spoc_ph_name',`spoc_ph_email`='$spoc_ph_email',`spoc_ph_contact`='$spoc_ph_contact',
        `spoc_bill_name`='$spoc_bill_name',`spoc_bill_email`='$spoc_bill_email',`spoc_bill_contact`='$spoc_bill_contact',
         `company_logo`='$logo' WHERE `id`=$client_id";
    }else{
        $sql ="UPDATE `client_info` SET `company_name`='$company_name',`starting_date_of_project`='$starting_date_of_project',
        `cp_from`='$cp_from',`cp_to`='$cp_to',`contract_value`='$contract_value',`service_type`='$service_type',
        `spoc_ph_name`='$spoc_ph_name',`spoc_ph_email`='$spoc_ph_email',`spoc_ph_contact`='$spoc_ph_contact',
        `spoc_bill_name`='$spoc_bill_name',`spoc_bill_email`='$spoc_bill_email',`spoc_bill_contact`='$spoc_bill_contact'
         WHERE `id`=$client_id";
    }
}else{
    $sql ="UPDATE `client_info` SET `company_name`='$company_name',`starting_date_of_project`='$starting_date_of_project',
        `cp_from`='$cp_from',`cp_to`='$cp_to',`contract_value`='$contract_value',`service_type`='$service_type',
        `spoc_ph_name`='$spoc_ph_name',`spoc_ph_email`='$spoc_ph_email',`spoc_ph_contact`='$spoc_ph_contact',
        `spoc_bill_name`='$spoc_bill_name',`spoc_bill_email`='$spoc_bill_email',`spoc_bill_contact`='$spoc_bill_contact'
         WHERE `id`=$client_id";

}

$conn=OpenCon();
echo $sql;
if ($conn->query($sql) === TRUE) {
    echo "<script type='text/javascript'>
                       
            </script>";

   header('Location: ../../html/Client-Manager.php');
   exit();
} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
    echo "<script type='text/javascript'>
                alert('Sorry..! No Row Change :(');
            </script>";

    //sleep for 3 seconds
    sleep(3);
    exit();
}
CloseCon($conn);


?>


<!-- BEGIN: Vendor JS-->
<script src="../../../app-assets/vendors/js/vendors.min.js"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="../../../app-assets/js/core/app-menu.js"></script>
<script src="../../../app-assets/js/core/app.js"></script>
<script src="../../../app-assets/js/scripts/components.js"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="../../../app-assets/js/scripts/pages/bootstrap-toast.js"></script>
<!-- END: Page JS-->
