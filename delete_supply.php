<?php
require 'config.php';
if(isset($_GET['del_id'])){
    $id = $_GET['del_id'];
    $sql = "DELETE FROM supplies WHERE itemID=$id";
    $result = mysqli_query($con,$sql);

    header("Location: supplies.php");
}
?>