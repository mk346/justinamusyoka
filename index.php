<?php
require 'config.php';
// if(!empty($SESSION["id"])){
//     $id=$_SESSION["id"];
//     $result =mysqli_query($conn,"SELECT * FROM client WHERE id=$id");
//     $row =mysqli_fetch_assoc($result );
// }
// else{
//     header("Location:login.php");
// }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Index</title>

    </head>
    <body>
    <!-- welcome user -->
        <h1>Welcome <?php echo $row["name"];?></h1>
        <a href="logout.php">Login</a>
    </body>
</html>
