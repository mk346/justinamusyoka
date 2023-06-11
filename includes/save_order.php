<?php
//declaring variables
$fname = "";
$lname = "";
$phone = "";
$email = "";
$location = "";
$service = "";
$username = "";
$date_created = date("Y-m-d");
$error_array = array();

if(isset($_POST['submit'])){
    $fname = strip_tags($_POST['fname']);
    $fname = ucwords($fname);
    $fname = str_replace(' ', ' ',$fname);
    $_SESSION['fname'] = $fname;

    $lname = strip_tags($_POST['lname']);
    $lname = ucwords($lname);
    $lname = str_replace(' ', ' ', $lname);
    $_SESSION['lname'] = $lname;

    $phone = strip_tags($_POST['phone']);
    $phone = str_replace(' ', ' ', $phone);
    $_SESSION['phone'] = $phone;

    $email = strip_tags($_POST['email']);
    $email = str_replace(' ', ' ', $email);
    $_SESSION['email'] = $email;

    $location = strip_tags($_POST['location']);
    $location = ucwords($location);
    $lname = str_replace(' ', ' ', $lname);
    $_SESSION['location'] = $location;

    $service = strip_tags($_POST['service']);
    $service = ucwords($service);
    $_SESSION['service'] = $service;

    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    }else{
        array_push($error_array, "<span style='color: red;'>Invalid Email Format</span><br>");
    }
    if(strlen($fname) > 25 || strlen($fname) < 3){
        array_push($error_array, "<span style='color: red;'>Your first name must between 3 and 25 characters</span><br>");
    }
    if (strlen($lname) > 25 || strlen($lname) < 3) {
        array_push($error_array, "<span style='color: red;'>Your last name must between 3 and 25 characters</span><br>");
    }

    if(empty($error_array)){
        $username = $fname . " ". $lname;

        $query  = mysqli_query($con, "INSERT INTO client VALUES('', '$username', '$phone', '$email', '$location', '$service', '$date_created')");
        array_push($error_array, "<span style='color: #14C800;'>Request Sent Successfully</span><br>");

        //clear session data
        $_SESSION['fname'] = '';
        $_SESSION['lname'] = '';
        $_SESSION['phone'] = '';
        $_SESSION['email'] = '';
        $_SESSION['location'] = '';
        $_SESSION['service'] = '';
    }

}
?>