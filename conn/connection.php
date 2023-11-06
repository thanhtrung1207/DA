<?php
$severname = "localhost";
$username = "root";
$password = "";
$database = "store";

$conn= new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($conn->connect_error) {
    die("Connection failed". $conn->connect_error);
}else{
    $sql = "Successfully";
}
$conn->close();

?>