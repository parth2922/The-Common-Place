<?php require_once('Config/Authenticate.php'); ?>
<?php
session_start();
$email = mysqli_real_escape_string($con, $_POST['EmailAddress']);
$password = mysqli_real_escape_string($con, $_POST['Password']);
$p = "";
$Rd = "";
$st = "";
$id="";
$dtst= date('d/m/Y - h:i:s A');

if (isset($_POST) && $email != '' && $password != '') {
    $sql = $dbh->prepare("SELECT User_Id,Email_Address,Password,Role,Status FROM je_login WHERE Email_Address=?");
    $sql->execute(array($email));
    while ($r = $sql->fetch()) {
        $p = $r['Password'];
        $id = $r['User_Id'];
        $Rd = $r['Role'];
        $st = $r['Status'];
    }
    $p_salt = "2?2W9Z0B:ijS%ocGeWDjC%fBPi+gSJY|w|!]RWpLHOE9`4_<&Eq+jkX.*KdT6y";
    $salted_hash = hash('sha256', $password . Site_Salt . $p_salt);
    if ($p == $salted_hash) {
        if ($st == 1) {
            if ($Rd == 1) {
                $_SESSION['User_Id'] = $id;
                echo "<script>
alert('Sucessfully Logged In! Taking you to dashboard');
window.location.href='Admin.php';
</script>";
            } else {
                $_SESSION['User_Id'] = $id;
                echo "<script>
alert('Sucessfully Logged In! Taking you to dashboard');
window.location.href='Home.php';
</script>";
            }
            $sql = "UPDATE je_login SET TimeIn=?,Current_Status=? WHERE Email_Address=?";
            $stmt = $dbh->prepare($sql);
            $stmt->execute([$dtst, '1',$email]);
        } else {
            echo "<script>
alert('Login Failed! User Not Activated or Banned!');
window.location.href='Login.php';
</script>";
        }
    } else {
        echo "<script>
alert('Login Failed! Email Address or Password is Incorrect!');
window.location.href='Login.php';
</script>";
    }
}
require_once('Config/Unauthorized.php');
?>
