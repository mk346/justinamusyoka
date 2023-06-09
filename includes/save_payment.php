<?php
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

    $amount = strip_tags(($_POST['amount']));

    $quantity = strip_tags($_POST['quantity']);

    $payment = strip_tags($_POST['payment']);

    $status = strip_tags($_POST['status']);

    $price = $amount * $quantity;

    $query = mysqli_query($con, "INSERT INTO payment VALUES('', '$client_name','$type','$amount','$price','$payment','$status')");

    header("Location: ./payment.php");
}

?>