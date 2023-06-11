<?php
require 'config.php';
require 'includes/save_order.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <script src="https://kit.fontawesome.com/0fe3bc1f22.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="Assets/style.css">

</head>

<body>
    <section class="mysection">
        <nav class="nav">
            <div>
                <h2>Maiyan Laundry</h2>
            </div>
            <div class="nav-links" id=" navLinks">
                <i class="fa fa-window-close" onclick="hideMenu( )"></i>
                <ul>
                    <li class="active"><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
                    <li><a href="About.html">About Us</a>
                    </li>
                    <li><a href="services.html">Services</a>
                    </li>
                    <li><a href="payment.html">Payments</a></li>
                    <li><a href="login.php">Login</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu( )"></i>
        </nav>
    </section>
    <div class="form-section">
        <div class="form-container">
            <br><br><br>
            <div class="form-row">
                <div class="form-col">
                    <form action="placeorder.php" method="POST" class="contact-form">
                        <h3 class="form-title">Fill Out the Form</h3>
                        <div class="form-group">
                            <input type="text" class="form-control" name="fname" placeholder="Enter First Name" required>
                            <br>
                            <?php if (in_array("<span style='color: red;'>Your first name must between 3 and 25 characters</span><br>", $error_array)) {
                                echo "<span style='color: red;'>Your first name must between 3 and 25 characters</span><br>";
                            } ?>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="lname" placeholder="Enter Last Name" required>
                            <br>
                            <?php if (in_array("<span style='color: red;'>Your last name must between 3 and 25 characters</span><br>", $error_array)) {
                                echo "<span style='color: red;'>Your last name must between 3 and 25 characters</span><br>";
                            } ?>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="phone" placeholder="Enter Phone Number" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Enter Your Email" required>
                            <br>
                            <?php
                            if (in_array("<span style='color: red;'>Invalid Email Format</span><br>", $error_array)) {
                                echo "<span style='color: red;'>Invalid Email Format</span><br>";
                            }
                            ?>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="location" placeholder="Enter Your Location" required>
                        </div>
                        <div class="form-group">
                            <select name="service" class="form-control" required>
                                <option value="#">Select Service</option>
                                <option value="Everyday Wear">Everyday Wear</option>
                                <option value="Beddings">Beddings</option>
                                <option value="Delicate Fabrics">Delicate Fabrics</option>
                                <option value="Formal Wear">Formal Wear</option>
                                <option value="Formal Wear">Special Garments</option>
                            </select>
                        </div>
                        <div class="form-submit">
                            <input type="submit" name="submit" class="form-btn" value="SEND">
                            <br>
                        </div>
                        <div class="error-display">
                            <?php if (in_array("<span style='color: #14C800;'>Request Sent Successfully</span><br>", $error_array)) {
                                echo "<span style='color: #14C800;'>Request Sent Successfully</span><br>";
                            } ?>
                        </div>
                    </form>
                </div>
                <div class="form-col mg-rl">
                    <div class="info-box">
                        <h3 class="form-title2">Contact Information</h3>
                        <div class="info-container">
                            <i class="fa fa-phone color" aria-hidden="true"></i>
                            <span class="item">
                                0700123456
                            </span>
                        </div>
                        <div class="info-container">
                            <i class="fa fa-envelope color" aria-hidden="true"></i>
                            <span class="item">
                                info@laundry.com
                            </span>
                        </div>
                        <div class="info-container">
                            <i class="fa fa-whatsapp color" aria-hidden="true"></i>
                            <span class="item">
                                0700123456
                            </span>
                        </div>
                        <div class="info-container">
                            <i class="fa-sharp fa-solid fa-location-dot color"></i>
                            <span class="item">
                                Tumaini, Behind Quickmart
                            </span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>