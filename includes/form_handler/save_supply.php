<?php
//declaring variables
$item = "";
$quantity = "";
$price = "";
$date_purchased = "";

if(isset($_POST['save_item'])){
    $item = strip_tags($_POST['item']); //strip html tags
    $item = ucwords($_POST['item']); //capitalize first letter
    $_SESSION['item'] = $item; //store session varible

    $quantity = strip_tags($_POST['quantity']); //strip html tags
    $_SESSION['quantity'] = $quantity;

    $price = strip_tags($_POST['price']); //strip html tags
    $_SESSION['price'] = $price;

    $date_purchased = strip_tags($_POST['date_purchased']); //strip html tags
    $_SESSION['date_purchased'] = $date_purchased;

    $query = mysqli_query($con, "INSERT INTO supplies VALUES ('', '$item', '$quantity','$price','$date_purchased')");

    //clear session variables
    $_SESSION['item'] ="";
    $_SESSION['quantity'] = "";
    $_SESSION['price'] = "";
    $_SESSION['date_purchased'] = "";

    header("Location: ./supplies.php");
}



?>