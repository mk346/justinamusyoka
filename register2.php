<?php
require 'config.php';//see why
if(!empty($SESSION["id"]))
{
    header("Location:index.php");

}
    //variables
    $name="username";
    $phone="phone";
    $email="email";
    $location="location";
    $password="password";


if(isset($_POST["submit"])){
    
    // $name =strip_tags($name);//strip tags
    $name= $_POST["name"];
    // $phone =strip_tags($phone);
    $phone= $_POST["phone"];
    // $email =strip_tags($email);
    $email= $_POST["email"];
    // $location =strip_tags($location);
    $location= $_POST["location"];
    // $password =strip_tags($password);
    $password= $_POST["password"];
   
    $confirm= $_POST["confirm"];
    // $confirm =strip_tags($confirm);
    // if($name && $phone  &&  $email &&
    // $location && $password  &&
    // $confirm  && $password ==$confirm)
    //if($password ==$confirm)//password and confirm should match
    // {
        var_dump($location);
        $query = "INSERT INTO client(username, phone,email, location, password) VALUES('$name','$phone','$email','$location','$password')";
        var_dump($query);
        mysqli_query($conn,$query);
        echo
        "<script> alert('Registration successful');</script>";


    }
    else{
        echo
        "<script> alert('Records not captured successfully');</script>";;
    }

// }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Registration</title>
        <link href="register.css" rel="stylesheet" type ="text/css">

    </head>
    <body>
        <div class="container">
            
       <h2>Registration</h2> 
       <form class = ""actions ="" method="post">
        <label for ="name">Username :</label>
        <input type ="text" name = "name" id = "name" required value =""><br>
        <label for ="phone">Phone number :</label>
        <input type ="text" name = "phone" id = "phone" required value =""><br>
        <label for ="name">Email address :</label>
        <input type ="email" name = "email" id = "email" onkeyup="validateEmail()"value =""><br>
        <label for ="location">Location :</label>
        <input type ="text" name = "location" id = "location" required value =""><br>
        <label for ="password">Password :</label>
        <input type ="password" name = "password" id = "password" required value =""><br>
        <label for ="confirm">Confirm Password :</label>
        <input type ="password" name = "confirm" id = "confirm" required value =""><br>
        <button type = "submit" name ="submit">Register</button>
       </form>
       </div>
       <br>
       <a href="login.php">Login</a>
    </body>
</html>
<script>
    const validateEmail = (email) => {
  return String(email)
    .toLowerCase()
    .match(
      /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    );
};
</script>