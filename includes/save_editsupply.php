<?php
require '../config/pdo.php';
require '../config.php';

//post data capture
$id = $_POST['id'];
$a = $_POST['item'];
$b = $_POST['quantity'];
$c = $_POST['price'];
$d = $_POST['date_purchased'];

//query to update table
$sql = "UPDATE supplies SET name='$a', quantity='$b', price='$c', date_purchased='$d' WHERE itemID='$id'";
$exec = mysqli_query($con,$sql);


header("Location: ../supplies.php");
?>