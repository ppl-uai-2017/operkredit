<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login Operkredit</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url("./css/bootstrap.min.css")?>" rel="stylesheet">

    <!-- Google Web Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Oswald:400,700,300" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400" rel="stylesheet" type="text/css">

    <!-- CSS Files -->
    <link href="<?php echo base_url("./font-awesome/css/font-awesome.min.css")?>" rel="stylesheet">
    <link href="<?php echo base_url("./css/style.css")?>" rel="stylesheet">

    <link href="<?php echo base_url("./css/responsive.css")?>" rel="stylesheet">
    <script src="<?php echo base_url("./js/ie8-responsive-file-warning.js")?>"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url("./images/fav-144.html")?>">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url("./images/fav-114.html")?>">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url("./images/fav-72.html")?>">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url("./images/fav-57.html")?>">
    <link rel="shortcut icon" href="<?php echo base_url("./images/fav.html")?>">

</head>
<body>
<!-- Header Section Starts -->
<header id="header-area">
    <!-- Nested Container Starts -->
    <div class="container">
        <!-- Header Top Starts -->
        <?php
        $this->load->view("navbar");
        ?>
    </div>
    <!-- Nested Container Ends -->
</header>
<!-- Header Section Ends -->
<!-- Main Menu Starts -->

<!-- Main Menu Ends -->
<!-- Main Container Starts -->
<div id="main-container" class="container">
    <!-- Breadcrumb Starts -->
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url("index.php/home")?>">Home</a></li>
        <li class="active">Login</li>
    </ol>
    <!-- Breadcrumb Ends -->
    <!-- Main Heading Starts -->
    <h2 class="main-heading text-center">
        Login or create new account
    </h2>
    <!-- Main Heading Ends -->
    <!-- Login Form Section Starts -->
    <section class="login-area">
        <div class="row">
            <div class="col-sm-6">
                <!-- Login Panel Starts -->
                <div class="panel panel-smart">
                    <div class="panel-heading">
                        <h3 class="panel-title">Login</h3>
                    </div>
                    <div class="panel-body">
                        <p>
                            Please login using your existing account
                        </p>
                        <!-- Login Form Starts -->
                        <form class="form-inline" role="form" method="POST" action="<?php echo base_url("index.php/login/validasi")?>">
                            <div class="form-group">
                                <label class="sr-only" for="exampleInputEmail2">Username</label>
                                <input type="text" name="username" class="form-control" id="exampleInputEmail2" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="exampleInputPassword2">Password</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                            </div>
                            <button type="submit" class="btn btn-black">
                                Login
                            </button>
                        </form>
                        <!-- Login Form Ends -->
                    </div>
                </div>
                <!-- Login Panel Ends -->
            </div>
            <div class="col-sm-6">
                <!-- Account Panel Starts -->
                <div class="panel panel-smart">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            Create new account
                        </h3>
                    </div>
                    <div class="panel-body">
                        <p>
                            Registration allows you to avoid filling in billing and shipping forms every time you checkout on this website
                        </p>
                        <a href="<?php echo base_url("index.php/register")?>" class="btn btn-black">
                            Register
                        </a>
                    </div>
                </div>
                <!-- Account Panel Ends -->

            </div>
        </div>
    </section>
    <!-- Login Form Section Ends -->
</div>
<!-- Main Container Ends -->
<!-- Footer Section Starts -->
<footer id="footer-area">
    <!-- Footer Links Starts -->
    <div class="footer-links">
        <!-- Container Starts -->
        <div class="container">
            <!-- Information Links Starts -->
            <div class="col-md-2 col-sm-6">
                <h5>Information</h5>
                <ul>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="#">Delivery Information</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms &amp; Conditions</a></li>
                </ul>
            </div>
            <!-- Information Links Ends -->
            <!-- My Account Links Starts -->
            <div class="col-md-2 col-sm-6">
                <h5>My Account</h5>
                <ul>
                    <li><a href="#">My orders</a></li>
                    <li><a href="#">My merchandise returns</a></li>
                    <li><a href="#">My credit slips</a></li>
                    <li><a href="#">My addresses</a></li>
                    <li><a href="#">My personal info</a></li>
                </ul>
            </div>
            <!-- My Account Links Ends -->
            <!-- Clearfix Spacer Starts -->
            <div class="clearfix visible-sm"></div>
            <!-- Clearfix Spacer Ends -->
            <!-- Customer Service Links Starts -->
            <div class="col-md-2 col-sm-6">
                <h5>Service</h5>
                <ul>
                    <li><a href="contact.html">Contact Us</a></li>
                    <li><a href="#">Returns</a></li>
                    <li><a href="#">Site Map</a></li>
                    <li><a href="#">Affiliates</a></li>
                    <li><a href="#">Specials</a></li>
                </ul>
            </div>
            <!-- Customer Service Links Ends -->
            <!-- Follow Us Links Starts -->
            <div class="col-md-2 col-sm-6">
                <h5>Follow Us</h5>
                <ul>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">RSS</a></li>
                    <li><a href="#">YouTube</a></li>
                </ul>
            </div>
            <!-- Follow Us Links Ends -->
            <!-- Contact Us Starts -->
            <div class="col-md-4 col-sm-12 last">
                <h5>Contact Us</h5>
                <ul>
                    <li>My Company</li>
                    <li>
                        1247 LB Nagar Road, Hyderabad, Telangana - 35
                    </li>
                    <li>
                        Email: <a href="#">info@demolink.com</a>
                    </li>
                </ul>
                <h4 class="lead">
                    Tel: <span>1(234) 567-9842</span>
                </h4>
            </div>
            <!-- Contact Us Ends -->
        </div>
        <!-- Container Ends -->
    </div>
    <!-- Footer Links Ends -->
    <!-- Copyright Area Starts -->
    <div class="copyright">
        <!-- Container Starts -->
        <div class="container">
            <!-- Starts -->
            <p class="pull-left">
                &copy; 2015 Mobile Shoppe Stores. Designed By <a href="http://sainathchillapuram.com/">Sainath Chillapuram</a>
            </p>
            <!-- Ends -->
            <!-- Payment Gateway Links Starts -->
            <ul class="pull-right list-inline">
                <li>
                    <img src="<?php echo base_url("./images/payment-icon/cirrus.png")?>" alt="PaymentGateway" />
                </li>
                <li>
                    <img src="<?php echo base_url("./images/payment-icon/paypal.png")?>" alt="PaymentGateway" />
                </li>
                <li>
                    <img src="<?php echo base_url("./images/payment-icon/visa.png")?>" alt="PaymentGateway" />
                </li>
                <li>
                    <img src="<?php echo base_url("./images/payment-icon/mastercard.png")?>" alt="PaymentGateway" />
                </li>
                <li>
                    <img src="<?php echo base_url("./images/payment-icon/americanexpress.png")?>" alt="PaymentGateway" />
                </li>
            </ul>
            <!-- Payment Gateway Links Ends -->
        </div>
        <!-- Container Ends -->
    </div>
    <!-- Copyright Area Ends -->
</footer>
<!-- Footer Section Ends -->
<!-- JavaScript Files -->
<script src="<?php echo base_url("./js/jquery-1.11.1.min.js")?>"></script>
<script src="<?php echo base_url("./js/jquery-migrate-1.2.1.min.js")?>"></script>
<script src="<?php echo base_url("./js/bootstrap.min.js")?>"></script>
<script src="<?php echo base_url("./js/bootstrap-hover-dropdown.min.js")?>"></script>
<script src="<?php echo base_url("./js/jquery.magnific-popup.min.js")?>"></script>
<script src="<?php echo base_url("./js/owl.carousel.min.js")?>"></script>
<script src="<?php echo base_url("./js/custom.js")?>"></script>
</body>

</html>