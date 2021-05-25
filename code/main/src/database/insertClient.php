<?php

include_once 'db_config.php';

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

    $conn = OpenCon();

    $sql ="INSERT INTO `client_info`(`company_name`, `starting_date_of_project`, `cp_from`, `cp_to`, `contract_value`,
            `service_type`, `spoc_ph_name`, `spoc_ph_email`, `spoc_ph_contact`, `spoc_bill_name`, `spoc_bill_email`, `spoc_bill_contact`)
              VALUES  ('$company_name','$starting_date_of_project','$cp_from','$cp_to','$contract_value','$service_type','$spoc_ph_name',
              '$spoc_ph_email','$spoc_ph_contact','$spoc_bill_name','$spoc_bill_email','$spoc_bill_contact')";

    if ($conn->query($sql) === TRUE) {
        echo "<script type='text/javascript'>
                alert('One raw Inserted :)');
            </script>";
       header('Location: ../../html/Create-Client.php');
       exit();
    } else {
        //echo "Error: " . $sql . "<br>" . $conn->error;
        echo "<script type='text/javascript'>
                alert('Sorry..! No Row Inserted :(');
            </script>";
        exit();
    }
    CloseCon($conn);


?>

