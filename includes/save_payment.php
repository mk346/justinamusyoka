<?php
require '../config.php';
// declare variables
$client_name = "";
$quantity = 0;
$amount = 0;
$price = 0;
$payment = "";
$status = "";

if(isset($_POST['save_payment'])){
    $client_name = strip_tags($_POST['client']);

    $type = strip_tags($_POST['type']);

    if($type == 'Special Garmets'){
        $amount = 150;
    }else if($type == 'Beddings'){
        $amount = 100;
    }else if($type == 'Delicate Fabrics'){
        $amount = 150;
    }else if($type == 'Formal Wear'){
        $amount = 120;
    }else if($type == 'Everyday Wear'){
        $amount = 80;
    }

    $quantity = strip_tags($_POST['quantity']);
    $quantity = intval($quantity);

    $payment = strip_tags($_POST['payment']);

    $status = strip_tags($_POST['status']);

    $price = $amount * $quantity;

    $query = mysqli_query($con, "INSERT INTO payment VALUES('', '$client_name','$type','$amount','$quantity','$price','$payment','$status')");

    header("Location: ../payment.php");
}

?>