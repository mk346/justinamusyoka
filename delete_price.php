<?php
require 'config.php';
if(isset($_GET['del_id'])){
    $id = $_GET['del_id'];
    $sql = "DELETE FROM pricelist WHERE priceID=$id";
    $result = mysqli_query($con,$sql);

    header("Location: pricelist.php");
}
?>