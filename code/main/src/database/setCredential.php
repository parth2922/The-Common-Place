<?php

include_once 'db_config.php';


    $client_id=$_POST['client_id'];
    $name=$_POST['client_name'];
    $user_name=$_POST['user_name'];
    $password=$_POST['password'];
    $confirm_password=$_POST['confirm_password'];

    //0 for insert 1 for update
    $flag=$_POST['flag'];

    if(isset($_POST['submit'])){
        $conn=OpenCon();
        CheckSession();


        if($flag==0){
            $sql="INSERT INTO `client_login_info`(`client_id`,`client_name`, `user_name`, `password`) VALUES
                    ($client_id,'$name','$user_name','$password')";

            $client_sql="INSERT INTO `admin_login`(`cmp_id`, `Name`, `user_name`, `password`) 
                            VALUES ($client_id,'$name','$user_name','$password')";

            $client_sql_cmp="INSERT INTO `companyinfo`(`cmp_id`) VALUES ($client_id)";
        }else{
            $sql="UPDATE `client_login_info` SET `client_id`=$client_id,`client_name`='$name',`user_name`='$user_name',
                    `password`='$password' WHERE `client_id`=$client_id ";

            $client_sql="UPDATE `admin_login` SET `cmp_id`=$client_id,`Name`='$name',`user_name`='$user_name',
                        `password`='$password' WHERE `cmp_id`=$client_id";
        }

        if ($conn->query($sql) === TRUE) {
            echo "<script type='text/javascript'></script>";

            //Connect and update details on Client side......

            $client_conn=mysqli_connect('localhost','root','220022','grc');

            if($client_conn->query($client_sql) === TRUE){
                if($flag==0){
                    if($client_conn->query($client_sql_cmp) === TRUE){
                        header('Location: ../../html/Client-Manager.php');
                        exit();
                    }else{
                        echo "Error: " . $client_sql . "<br>" . $client_conn->error;
                        echo "<script type='text/javascript'>
                            alert('Sorry..! No Row Change :(');
                            </script>";
                    }
                }else{
                    echo "Error: " . $client_sql . "<br>" . $client_conn->error;
                    echo "<script type='text/javascript'>
                            alert('Sorry..! No Row Change :(');
                            </script>";

                }
            }else{
                echo "Error: " . $client_sql . "<br>" . $client_conn->error;
                echo "<script type='text/javascript'>
                alert('Sorry..! No Row Change :(');
                    </script>";

            }
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            echo "<script type='text/javascript'>
                alert('Sorry..! No Row Change :(');
            </script>";

            //sleep for 3 seconds
            sleep(3);
        }
        CloseCon($conn);


    }
?>
