<div class="header">
    <div class="container">
        <div class="header-top-grids">
            <!-- Align the logo to the left -->
            <div class="agileitits-logo pull-left">
                <!-- Change text color of the logo -->
                <h1 style="color: #CACACB;"><a href="index.php">Royal Aria</a></h1>
            </div>
            <!-- Navigation -->
            <div class="top-nav">
                <nav class="navbar navbar-default">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                        <nav>
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="index.php">Home</a></li>
                                <li><a href="about.php">About</a></li>
                                <li><a href="services.php">Services</a></li>
                                <?php if (strlen($_SESSION['obbsuid']) != 0) {?>
                                    <li class=""><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Account<span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a class="hvr-bounce-to-bottom" href="profile.php">Profile</a></li>
                                            <li><a class="hvr-bounce-to-bottom" href="booking-history.php">Booking History</a></li>   
                                            <li><a class="hvr-bounce-to-bottom" href="change-password.php">Change Password</a></li>
                                            <li><a class="hvr-bounce-to-bottom" href="logout.php">Logout</a></li>        
                                        </ul>
                                    </li>
                                <?php } ?> 

                                <li><a href="mail.php">Mail Us</a></li>

                            </ul>
                        </nav>
                    </div>
                    <!-- /.navbar-collapse -->
                </nav>
            </div>
            <?php if (strlen($_SESSION['obbsuid']) == 0) {?>
                <!-- Show login and register links -->
                <div class="agileitits-logo pull-left">
                    <ul style="color: white;">
                        <li style="color: white;"><a href="login.php">Login</a></li>
                        <li style="color: white;"> <a href="signup.php">Register</a></li>
                        <li><a href="admin/login.php">Admin</a></li>
                    </ul>
                </div>
            <?php } ?>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
