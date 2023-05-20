<?php
require 'config.php';

if(isset($_POST["login"])) {
    // input details, no empty fields allowed
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    $result = "SELECT * FROM client WHERE email = '$email' AND password = '$password'";
    $query = mysqli_query($conn, $result);
    
    if(mysqli_num_rows($query) == 1) {
        // user has successfully logged in, set session variables and redirect to index.php
        $row = mysqli_fetch_assoc($query);
        $_SESSION['id'] = $row['id'];
        $_SESSION['name'] = $row['name'];
        header("Location: welcome.php");
    } else {
        // invalid login credentials
        echo "Invalid email or password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2> 
    <form class="" action="login.php" method="post" autocomplete="off">
        <input type="text" placeholder="Full name"/>
        <label for="name">Email address:</label>
        <input type="email" name="email" id="email" required value=""><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required value="">
        <button type="submit" name="login">Login</button>
    </form>
    <a href="register.php">Registration</a>
</body>
</html>
