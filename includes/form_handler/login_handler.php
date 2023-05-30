<?php
require 'config.php';
$error_array = array(); // create array variable to store form errors
if(isset($_POST['submit'])){
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL); // sanitize email before sending to post
    
    $password = md5($_POST['password']); //encrypt password

    $check_db =  mysqli_query($con, "SELECT * FROM admin WHERE email = '$email' AND password='$password'"); //fetch data from db

    $query_run = mysqli_num_rows($check_db); //store db results in a row
    if($query_run == 1){ //check if user email and password exists
        header("Location: ./adminn.php"); //redirect to the desired page
        exit();
    }else{
        array_push($error_array, "<span style='color: red;'>Email or Password was Incorrect</span><br>"); // push error in to the array if no user is found.
    }
}
?>