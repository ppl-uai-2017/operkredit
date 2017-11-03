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
                        <div>
                            <?php
                                $info = $this->session->flashdata('info');
                                if(!empty($info)){
                                    echo $info;
                                }
                            ?>
                        </div>
                        <form class="form-horizontal" role="form" method="POST" action="<?php echo base_url("index.php/register/create_account")?>">
                            <!-- Personal Information Starts -->
                            <div class="form-group">
                                <label for="nama_depan" class="col-sm-3 control-label">Nama Depan :</label>
                                <div class="col-sm-9">
                                    <br><?php echo form_error('nama_depan'); ?>
                                    <input type="text" class="form-control" name="nama_depan" id="nama_depan" placeholder="First Name" value="<?php echo set_value('nama_depan', '') ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nama_belakang" class="col-sm-3 control-label">Nama Belakang :</label>
                                <div class="col-sm-9">
                                    <br><?php echo form_error('nama_belakang'); ?>
                                    <input type="text" class="form-control" name="nama_belakang" id="nama_belakang" placeholder="Last Name" value="<?php echo set_value('nama_belakang', '') ?>" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tempat_lahir" class="col-sm-3 control-label">Tempat Lahir :</label>
                                <div class="col-sm-9">
                                    <br><?php echo form_error('tempat_lahir'); ?>
                                    <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir" value="<?php echo set_value('tempat_lahir', '') ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tanggal_lahir" class="col-sm-3 control-label">Tanggal Lahir :</label>
                                <div class="col-sm-9">
                                    <br><?php echo form_error('tanggal_lahir'); ?>
                                    <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" placeholder="Tanggal Lahir" value="<?php echo set_value('tanggal_lahir', '') ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="jenis_kelamin" class="col-sm-3 control-label">Jenis Kelamin :</label>
                                <div class="col-sm-9">
                                    <br><?php echo form_error('jenis_kelamin'); ?>
                                    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="<?php echo set_value('jenis_kelamin', '') ?>">
                                        <option>- Jenis Kelamin -</option>
                                        <option>Laki-laki</option>
                                        <option>Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-sm-3 control-label">Email :</label>
                                <div class="col-sm-9">
                                    <br><?php echo form_error('email'); ?>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo set_value('email', '') ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="no_hp" class="col-sm-3 control-label">No.HP :</label>
                                <div class="col-sm-9">
                                    <br><?php echo form_error('no_hp'); ?>
                                    <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="No.HP" value="<?php echo set_value('no_hp', '') ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="status_pernikahan" class="col-sm-3 control-label">Status Pernikahan :</label>
                                <div class="col-sm-9">
                                    <br><?php echo form_error('status_pernikahan'); ?>
                                    <input type="text" class="form-control" name="status_pernikahan" id="status_pernikahan" placeholder="Status Pernikahan" value="<?php echo set_value('status_pernikahan', '') ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="alamat" class="col-sm-3 control-label">Alamat :</label>
                                <div class="col-sm-9">
                                    <br><?php echo form_error('alamat'); ?>
                                    <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" value="<?php echo set_value('alamat', '') ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="kota" class="col-sm-3 control-label">Kota :</label>
                                <div class="col-sm-9">
                                    <br><?php echo form_error('kota'); ?>
                                    <input type="text" class="form-control" name="kota" id="kota" placeholder="City" value="<?php echo set_value('kota', '') ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="kode_pos" class="col-sm-3 control-label">kode Pos :</label>
                                <div class="col-sm-9">
                                    <br><?php echo form_error('kode_pos'); ?>
                                    <input type="text" class="form-control" name="kode_pos" id="kode_pos" placeholder="Kode Pos" value="<?php echo set_value('kode_pos', '') ?>" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="provinsi" class="col-sm-3 control-label">Provinsi :</label>
                                <div class="col-sm-9">
                                    <br><?php echo form_error('provinsi'); ?>
                                    <input type="text" class="form-control" name="provinsi" id="provinsi" placeholder="Provinsi" value="<?php echo set_value('provinsi', '') ?>">
                                </div>
                            </div>
                            <!-- Personal Information Ends -->
                            <h3 class="panel-heading inner">
                                Username & Password
                            </h3>
                            <!-- Password Area Starts -->
                            <div class="form-group">
                                <label for="username" class="col-sm-3 control-label">Username :</label>
                                <div class="col-sm-9">
                                    <br><?php echo form_error('username'); ?>
                                    <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?php echo set_value('username', '') ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-sm-3 control-label">Password :</label>
                                <div class="col-sm-9">
                                    <br><?php echo form_error('password'); ?>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="ulangipassword" class="col-sm-3 control-label">Ulangi Password :</label>
                                <div class="col-sm-9">
                                    <br><?php echo form_error('ulangipassword'); ?>
                                    <input type="password" class="form-control" name="ulangipassword" id="ulangipassword" placeholder="Ulangi Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <button type="submit" class="btn btn-black" id="password" value="submit">
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
