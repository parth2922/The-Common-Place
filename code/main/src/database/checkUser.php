<?php
include_once 'db_config.php';

//Get Connection & set table Name
$conn=OpenCon();
$tbl_name='admin_info';

// username and password sent from form
$username=$_POST['user-email'];
$password=$_POST['user-password'];

// To protect MySQL injection (more detail about MySQL injection)
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($conn,$username);
$password = mysqli_real_escape_string($conn,$password);

$sql="SELECT * FROM $tbl_name WHERE email='$username' and password='$password'";
$result=$conn->query($sql);

// Mysql_num_row is counting table row
$count=$result->num_rows;

// If result matched $username and $password, table row must be 1 row
if($count==1){
    $r=$result->fetch_assoc();
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    $_SESSION['user_id'] = $r['id'];
    header('Location: ../../html/dashboard.php');
    exit();
}else{
    //echo "Error: " . $sql . "<br>" . $conn->error;
    echo "<script type='text/javascript'>
                alert('Sorry..! Login Failed :(');
            </script>";
    header('Location: ../../html/OSALogin.php');
    exit();
}

?>
