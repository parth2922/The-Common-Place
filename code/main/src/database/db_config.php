<?php
/***
 * Developed By: Jemistry Info Solutions LLP
 * Project Name: GRC
 * Date: 18/04/2020
 **/
?>

<?php
//-------------------------------
//Error Reporting (0 off|1 On)
//-------------------------------
error_reporting(E_ALL);
@ini_set("display_errors", 1);


define('MOE',0); //Mode of Environment || 0 = Development | 1 = Production

//-------------------------------
//Server Connection Function
//-------------------------------

function OpenCon(){
    //-------------------------------
    //Server Host Details
    //-------------------------------

    if(MOE==0)
    {
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="grc_osa";
    }
    else
    {
        $servername="localhost";
        $username="df";
        $password="";
        $dbname="";
    }

    $con = mysqli_connect($servername, $username, $password, $dbname);
    if (!$con) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }else{
        return $con;
    }

}

//-------------------------------
//For close Server Connection
//-------------------------------

function CloseCon($conn){

    $conn -> close();

}


function CheckSession(){
    session_start();
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {

    } else {
        //====================If User Not Logged In==========================
        header('Location: ../html/OSALogin.php');
        exit();
    }
}

?>
