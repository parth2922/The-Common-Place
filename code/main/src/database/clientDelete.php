<?php
    include_once 'db_config.php';


    $conn = OpenCon();

    $client_id=$_POST['client_id'];

    $sql="DELETE FROM `client_info` WHERE `id`=$client_id";

    if ($conn->query($sql) === TRUE) {
        unlink('../../companyLogo/'.$client_id.'.jpg');

        echo "<script type='text/javascript'>
                alert('One Record Deleted :)');
            </script>";
        //sleep for 3 seconds
        sleep(3);
        header('Location: ../../html/client-Manager.php');
        exit();
    } else {
        //echo "Error: " . $sql . "<br>" . $conn->error;
        echo "<script type='text/javascript'>
                alert('Sorry..! No Row deleted :(');
            </script>";
          exit();
        }

    CloseCon($conn);


?>
