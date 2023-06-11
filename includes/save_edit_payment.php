<?php
require '../config.php';

if(isset($_POST['edit_payment'])){
    $id = $_POST['id'];
    $a = $_POST['client'];
    $b = $_POST['type'];
    if ($b == 'Special Garmets') {
        $c = 150;
    } else if ($b == 'Beddings') {
        $c = 100;
    } else if ($b == 'Delicate Fabrics') {
        $c = 150;
    } else if ($b == 'Formal Wear') {
        $c = 120;
    } else if ($b == 'Everyday Wear') {
        $c = 80;
    }

    $d = $_POST['quantity'];
    $d = intval($d);
    $e = $_POST['payment'];
    $f = $_POST['status'];
    $g = $c * $d;

    // $query = "UPDATE payment SET client ='$a', service ='$b', amount ='$c', quantity ='$d', price = '$g', payment = '$e', status = '$f' WHERE paymentID = '$id'";
    // $exec = mysqli_query($con,$query);
    $update_query = $con->query("UPDATE payment SET client ='$a', service ='$b', amount ='$c', quantity ='$d', price = '$g', payment = '$e', status = '$f' WHERE paymentID = '$id'");

    header("Location: ../payment.php");
}

?>