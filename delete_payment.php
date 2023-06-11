<?php
require 'config.php';
if (isset($_GET['del_id'])){
    $id = $_GET['del_id'];
    $query = "DELETE FROM payment WHERE paymentID = '$id'";
    $exec_query = mysqli_query($con, $query);

    header("Location: payment.php");
}



?>