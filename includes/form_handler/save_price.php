<?php
//declaring variables
$price = "";
$category = "";

if(isset($_POST['save_price'])){
    $price = strip_tags($_POST['price']);
    $_SESSION['price'] = $price;

    $category = strip_tags($_POST['category']);
    $category = ucwords($_POST['category']);
    $_SESSION['category'] = $category;

    $query = mysqli_query($con, "INSERT INTO pricelist VALUES ('', '$price','$category')");


    //clear session variable
    $_SESSION['price'] = "";
    $_SESSION['category'] = "";

    header("Location: ./pricelist.php");
    
}



?>