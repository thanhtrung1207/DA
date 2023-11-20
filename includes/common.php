<!--establish the connection to database, and start the session-->
<?php
$servename = "localhost";
$username = "root";
$password = "";
$dbname = "store";
$con = new mysqli($servename,$username,$password,$dbname)or die($mysqli_error($con));
if($con->connect_error){
    die ("Connection failed: " . $con->connect_error);
}
echo "Connected successfully";
if(session_status() ==   PHP_SESSION_NONE){
    session_start();
}
?>