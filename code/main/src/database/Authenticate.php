<?php
session_start();
date_default_timezone_set('Asia/Kolkata');
//-------------------------------
//Error Reporting (0 off|1 On)
//-------------------------------
error_reporting(E_ALL);
@ini_set("display_errors", 1);
//-------------------------------
//Server Host Details
//-------------------------------
define('MOP',1);
//(1 Staging | 0 Production)
if(MOP==1)
{
    //Staging Server Details Below
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "jemistry";
}
else
{
    //Production Server Details Below
    $servername = "localhost";
    $username = "jemistry_HNYNETS";
    $password = "L]XZtfkkt.o9aRO[;I";
    $dbname = "jemistry_HoneyNETS";
}
//-------------------------------
//Salt
//-------------------------------
define('Site_Salt', "vtLIprt+kN)DXu0]I3as_z]Ek1RN+");
//-------------------------------
//Server Connection String
//-------------------------------
$con = mysqli_connect($servername, $username, $password, $dbname);
$dbh=new PDO('mysql:dbname='.$dbname.';host='.$servername.";port=3306",$username, $password);

if (!$con) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
//Below Code In Case of Debugging
//-------------------------------
//echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
//echo "Host information: " . mysqli_get_host_info($con) . PHP_EOL;
//-------------------------------
//Closing Database Connection
//-------------------------------
//mysqli_close($con);

function je_crypt( $string, $action = 'e' ) {
    // you may change these values to your own
    $secret_key = '616CFC9E0918EBA1C7792E5FC6CE4A644FB35C251DB2BC33';
    $secret_iv = '19F31EF5BA2C35CE045A19BEE4C8FDF5';

    $output = false;
    $encrypt_method = "AES-256-CBC";
    $key = hash( 'sha256', $secret_key );
    $iv = substr( hash( 'sha256', $secret_iv ), 0, 16 );

    if( $action == 'e' ) {
        $output = base64_encode( openssl_encrypt( $string, $encrypt_method, $key, 0, $iv ) );
    }
    else if( $action == 'd' ){
        $output = openssl_decrypt( base64_decode( $string ), $encrypt_method, $key, 0, $iv );
    }

    return $output;
}