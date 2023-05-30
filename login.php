<?php
include 'includes/form_handler/login_handler.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- <link href="login.css" rel="stylesheet" type ="text/css"> -->
    <link rel="stylesheet" type="text/css" href="Assets/style.css">
</head>
<body>
    <div class="contact main-spacing"> 
        <div class="container"></div>
        <h1>Login</h1>
        <form action="login.php" method="POST">
            <input type="email" name="email" placeholder="Email address" required/>
            <input type="password" name="password" placeholder="Password" required/>
            <input type="submit" name="submit" value="Login"/>
            <br>
            <?php
            if (in_array("<span style='color: red;'>Email or Password was Incorrect</span><br>", $error_array)){
                echo "<span style='color: red;'>Email or Password was Incorrect</span><br>";
            }
            
            ?>
        </form>
    </div>
</body>
</html>