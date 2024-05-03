<?php
include('includes/dbconnection.php');
session_start();
error_reporting(0);
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $sql = "INSERT INTO tblcontact (Name, Email, Message) VALUES (:name, :email, :message)";
    $query = $dbh->prepare($sql);
    $query->bindParam(':name', $name, PDO::PARAM_STR);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':message', $message, PDO::PARAM_STR);
    $query->execute();
    $LastInsertId = $dbh->lastInsertId();
    if ($LastInsertId > 0) {
        echo "<script>alert('Your message was sent successfully!.');</script>";
        echo "<script>window.location.href ='mail.php'</script>";
    } else {
        echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Royal Aria Booking System | Mail</title>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href='//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){        
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script> 
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
</head>
<body>
    <div class="banner jarallax">
        <div class="agileinfo-dot">
            <?php include_once('includes/header.php');?>
            <div class="wthree-heading">
                <h2>Contact</h2>
            </div>
        </div>
    </div>
    <div class="contact">
        <div class="container">
            <div class="agile-contact-form">
                <div class="col-md-6 contact-form-left">
                    <div class="w3layouts-contact-form-top">
                        <h3>Get in touch</h3>
                        <p>Get in touch so we can start working together.</p>
                    </div>
                    <div class="agileits-contact-address">
                        <ul>
                            <li><i class="fa fa-phone" aria-hidden="true"></i> <span>+267 75 420 192</span></li>
                            <li><i class="fa fa-envelope" aria-hidden="true"></i> <span>bookings@royal aria.com</span></li>
                            <li><i class="fa fa-map-marker" aria-hidden="true"></i> <span>Tlokweng, Gaborone, Botswana</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 contact-form-right">
                    <div class="contact-form-top">
                        <h3>Send us a message</h3>
                    </div>
                    <div class="agileinfo-contact-form-grid">
                        <form action="#" method="post">
                            <input  placeholder="Full Name " name="name" type="text" required="true">
                            <input  placeholder="Email" name="email" type="email" required="true">
                            <textarea name="message" placeholder="Message" required=""></textarea>
                            <button class="btn1" name="submit">Submit</button>
                        </form>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <?php include_once('includes/footer.php');?>
    <script src="js/jarallax.js"></script>
    <script src="js/SmoothScroll.min.js"></script>
    <script type="text/javascript">
        $('.jarallax').jarallax({
            speed: 0.5,
            imgWidth: 1366,
            imgHeight: 768
        })
    </script>
    <script src="js/SmoothScroll.min.js"></script>
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $().UItoTop({ easingType: 'easeOutQuart' });
        });
    </script>
    <script src="js/modernizr.custom.js"></script>
</body>    
</html>
