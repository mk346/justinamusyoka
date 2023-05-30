<?php
// connect to database
ob_start();
session_start();
$con= mysqli_connect("localhost","root","","maiyan");
if (mysqli_connect_errno()){
    echo "Failed to Connect".mysqli_connect_errno();
}
?>

