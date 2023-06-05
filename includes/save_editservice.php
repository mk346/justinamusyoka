<?php
require '../config.php';

//post data capture
$id = $_POST['id'];
$a = $_POST['price'];
$b = $_POST['category'];

//query to update table
$sql = "UPDATE pricelist SET price='$a', category='$b' WHERE priceID='$id'";
$exec = mysqli_query($con,$sql);

header("Location: ../pricelist.php");
?>