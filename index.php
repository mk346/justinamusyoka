 <!DOCTYPE html>
<html lang="en">
<head>
    <!-- <link href=".\Assets\index.css" rel="stylesheet" type ="text/css"> -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR
    65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- <link href="index.css" rel="stylesheet" type ="text/css"> -->
    <!-- <link href="index.css" rel="stylesheet" type ="text/css"> -->
    <link rel="stylesheet" type="text/css" href="Assets/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6
    .2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9z
    qeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">

</head>
<body>
    <section class="mysection">
    <nav class="nav">
    <div>
        
        <h2><i class="fas fa-cog"></i>Maiyan Laundry</h2>
    </div>
    <!--Navigation is mostly done in unordered list-->
    <div class="nav-links" id=" navLinks">
        <!--icon for closing the window-->
        <i class="fa fa-window-close"  onclick="hideMenu( )"></i>
    <ul>
        <li class="active"><a href="#home"><i class="fa fa-home"></i>Home</a></li>
        <li><a href="About.html">About Us</a>
            <!--
        <div class="about">
            <ul>
        <li><a href="#"></a>Mission</li>
        <li><a href="#"></a>Vision</li>
        <li><a href="#"></a>Goal</li>
        <li><a href="#"></a>Contact Us</li>
        </ul>
        </div> -->
    </li>
        <li><a href="services.html">Services</a>
            <!-- <div class="services">
                <ul>
            <li><a href="#"></a>Drycleaning</li>
            <li><a href="#"></a>Ironing</li>
            <li><a href="#"></a>Washing</li>
            
            </ul>
            </div> -->
        </li> 
        <li><a href="payment.html">Payments</a></li>
        <!-- <li><a href="register.php">Register</a></li> -->
        <li><a href="login.php">Login</a></li>
    </ul>
</div>
<!--icon for viewing menu-->
<i class="fa fa-bars" onclick="showMenu( )"></i>
</nav>

<!-- card display -->
<div class="modal-container">
    <div class="modal fade show" id="formShow" tabindex="1" role="dialog" data-backdrop="static" arial-modal="true">
        <div class="modal-dialog modal-x1 modal-dialog-centered" role="document">
            <div class="modal-content modal-dialog-scrollable">
                <div class="modal-header navbar-nav card-modal-header">
                    <div>
                        <h3 class="modal-title">Fill Out the Form</h3>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>


<!-- end modal -->

 <!--Hero Section-->
<div class="Hero"> 
    <div class="Container">
    <div class="hero-description">
<h1>Get your Laundry Done Within 24 Hours</h1>
<p>Sorting, washing, drying, pressing and folding clothing and other textile items. </p>
<a href="#"class="hero-btn">Place Order</a>

    </div>
</div>
</div>
<div class="how-it-works">
    <div class="containar">
        <h1>How it works</h1>
        <p>This is the process for customers</p>
        <div class="row">
            <div class="cardi">
                <i class="fas fa-cog"></i>
                <h1>Request a service</h1>
                <p>Tell us about the service you need</p>

            </div>
            <div class="cardi">
                <i class="fas fa-cog"></i>
                <h1>Item pick up</h1>
                <p>A pick up guy is send to fetch laundry</p>

            </div>
            <div class="cardi">
                <i class="fas fa-cog"></i>
                <h1>Delivery</h1>
                <p>Laundry is returned after cleaning</p>

            </div>

        </div>
        

    </div>

</div>
<div class="why main-spacing">
    <div class="containar">
        <h1>Why Maiyan Laundry?</h1>
        <p>We're always at your service</p>
        <div class="row-spacing">
            <div class="row">
                <div class="cardi">
                    
                    <h1>Convinience</h1>
                    <p>We pick up and return laundry at your door step</p>
    
                </div>
                <div class="cardi">
                    
                    <h1>Time</h1>
                    <p>We clean and deliver within 24 hours</p>
    
                </div>
                <div class="cardi">
                    
                    <h1>Payment</h1>
                    <p>You can pay in cash at delivery or via mpesa if needed</p>
    
                </div>
                <div class="cardi">
                    
                    <h1>Affordable</h1>
                    <p>We offer quality and affordable services to our clients</p>
    
                </div>
            </div>
        </div>
    </div>
</div>
<div class="contact main-spacing"> 
    <!-- <div class="container"></div> -->
    <h1>Contact us</h1>
    <form>
        <input type="text" placeholder="Full name"/>
        <input type="email" placeholder="Email address"/>
        <input type="submit"/>
    </form>
</div>


<footer class="main-spacing">
    <p>Maiyan laundry 2023</p>
</footer>
</section>
<!---------Javascript for toggle menu------>
<script>
    var navLinks = document.getElementById("navLinks");
    function showMenu(){
        navLinks.style.right ="0"
    }
    function hideMenu(){
        navLinks.style.right ="-200px"
    }
</script>
</body>
</html>