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

    <title>Register Operkredit</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url("./css/bootstrap.min.css")?>" rel="stylesheet">

    <!-- Google Web Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Oswald:400,700,300" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400" rel="stylesheet" type="text/css">

    <!-- CSS Files -->
    <link href="<?php echo base_url("./font-awesome/css/font-awesome.min.css")?>" rel="stylesheet">
    <link href="<?php echo base_url("./css/style.css")?>" rel="stylesheet">
    <link href="<?php echo base_url("css/responsive.css")?>" rel="stylesheet">


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
        <?php
        $this->load->view("navbar");
        ?>
    </div>
    <!-- Nested Container Ends -->
</header>
<!-- Header Section Ends -->

<!-- Main Container Starts -->
<div id="main-container" class="container">
    <!-- Breadcrumb Starts -->
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url("index.php/home")?>">Home</a></li>
        <li class="active">Register</li>
    </ol>
    <!-- Breadcrumb Ends -->
    <!-- Main Heading Starts -->
    <h2 class="main-heading text-center">
        Register <br />
        <span>Create New Account</span>
    </h2>
    <!-- Main Heading Ends -->
    <!-- Registration Section Starts -->
    <section class="registration-area">
        <div class="row">
            <div class="col-sm-6">
                <!-- Registration Block Starts -->
                <div class="panel panel-smart">
                    <div class="panel-heading">
                        <h3 class="panel-title">Personal Information</h3>
                    </div>
                    <div class="panel-body">
                        <!-- Registration Form Starts -->
                        <form class="form-horizontal" role="form" method="POST" action="<?php echo base_url("index.php/register/create_account")?>">
                            <!-- Personal Information Starts -->
                            <div class="form-group">
                                <label for="inputFname" class="col-sm-3 control-label">First Name :</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputFname" placeholder="First Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputLname" class="col-sm-3 control-label">Last Name :</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputLname" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-3 control-label">Email :</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPhone" class="col-sm-3 control-label">Phone :</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputPhone" placeholder="Phone">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputFax" class="col-sm-3 control-label">Fax :</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputFax" placeholder="Fax">
                                </div>
                            </div>
                            <!-- Personal Information Ends -->
                            <h3 class="panel-heading inner">
                                Delivery Information
                            </h3>
                            <!-- Delivery Information Starts -->
                            <div class="form-group">
                                <label for="inputCompany" class="col-sm-3 control-label">Company :</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputCompany" placeholder="Company">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputCompanyId" class="col-sm-3 control-label">Company ID :</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputCompanyId" placeholder="Company ID">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress1" class="col-sm-3 control-label">Address/1 :</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputAddress1" placeholder="Address/1">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2" class="col-sm-3 control-label">Address/2 :</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputAddress2" placeholder="Address/2">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputCity" class="col-sm-3 control-label">City :</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputCity" placeholder="City">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPostCode" class="col-sm-3 control-label">Postal Code :</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputPostCode" placeholder="Postal Code">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputCountry" class="col-sm-3 control-label">Country :</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="inputCountry">
                                        <option>- All Countries -</option>
                                        <option>India</option>
                                        <option>USA</option>
                                        <option>UK</option>
                                        <option>China</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputRegion" class="col-sm-3 control-label">Region :</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="inputRegion">
                                        <option>- All Regions -</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Delivery Information Ends -->
                            <h3 class="panel-heading inner">
                                Password
                            </h3>
                            <!-- Password Area Starts -->
                            <div class="form-group">
                                <label for="inputPassword" class="col-sm-3 control-label">Password :</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputRePassword" class="col-sm-3 control-label">Re-Password :</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="inputRePassword" placeholder="Re-Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="col-sm-3 control-label">Newsletter :</span>
                                <div class="col-sm-9">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                            Subscribe
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option1">
                                            Unsubscribe
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> I'v read and agreed on Conditions
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <button type="submit" class="btn btn-black">
                                        Register
                                    </button>
                                </div>
                            </div>
                            <!-- Password Area Ends -->
                        </form>
                        <!-- Registration Form Starts -->
                    </div>
                </div>
                <!-- Registration Block Ends -->
            </div>
            <div class="col-sm-6">

                <!-- Conditions Panel Starts -->
                <div class="panel panel-smart">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            Conditions
                        </h3>
                    </div>
                    <div class="panel-body">
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including  versions of Lorem Ipsum.
                        </p>
                        <ol>
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Consectetur adipiscing elit</li>
                            <li>Integer molestie lorem at massa</li>
                            <li>Facilisis in pretium nisl aliquet</li>
                            <li>Nulla volutpat aliquam velit</li>
                            <li>Faucibus porta lacus fringilla vel</li>
                            <li>Aenean sit amet erat nunc</li>
                            <li>Eget porttitor lorem</li>
                        </ol>
                        <p>
                            HTML Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris.
                        </p>
                        <p>
                            Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam. Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi. Duis sapien sem, aliquet nec, commodo eget, consequat quis, neque.
                        </p>
                        <p>
                            Aliquam faucibus, elit ut dictum aliquet, felis nisl adipiscing sapien, sed malesuada diam lacus eget erat. Cras mollis scelerisque nunc. Nullam arcu. Aliquam consequat. Curabitur augue lorem, dapibus quis, laoreet et, pretium ac, nisi.
                        </p>
                        <p>
                            Aenean magna nisl, mollis quis, molestie eu, feugiat in, orci. In hac habitasse platea dictumst.
                        </p>
                    </div>
                </div>
                <!-- Conditions Panel Ends -->
            </div>
        </div>
    </section>
    <!-- Registration Section Ends -->
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