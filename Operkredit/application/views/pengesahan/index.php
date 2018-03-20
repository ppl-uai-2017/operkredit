<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Admin - Operkredit</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url("./assets/css/bootstrap.min.css")?>" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?php echo base_url("./assets/css/animate.min.css")?>" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="<?php echo base_url("./assets/css/light-bootstrap-dashboard.css")?>" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url("./assets/css/demo.css")?>" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url("./assets/css/pe-icon-7-stroke.css")?>" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="black">

        <!--

            Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
            Tip 2: you can also add an image using data-image tag

        -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    Operkredit
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="<?php echo base_url("index.php/pengesahan")?>">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url("index.php/pengesahan/customer")?>">
                        <i class="pe-7s-user"></i>
                        <p>Daftar Registrasi</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url("index.php/pengesahan/produk")?>">
                        <i class="pe-7s-note2"></i>
                        <p>Daftar Produk</p>
                    </a>
                </li>

                <li>
                    <a href="<?php echo base_url("index.php/pengesahan/transaksi")?>">
                        <i class="pe-7s-shopbag"></i>
                        <p>Daftar Transaksi</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="<?php echo base_url("index.php/login/out")?>">
                                <p>Log out</p>
                            </a>
                        </li>
                        <li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <h3 align="center">User</h3>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="header">
                                <h4 class="title" align="center">Verified User</h4>
                            </div>
                            <div class="content">
                                <h3 align="center">
                                    <?php
                                    foreach ($VerifiedUser as $VerifiedUser)
                                    {
                                        echo $VerifiedUser['jumlah'];
                                    }
                                    ?>
                                </h3>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="header">
                                <h4 class="title" align="center">Unverified User</h4>
                            </div>
                            <div class="content">
                                <h3 align="center">
                                    <?php
                                    foreach ($UnverifiedUser as $UnverifiedUser)
                                    {
                                        echo $UnverifiedUser['jumlah'];
                                    }
                                    ?>
                                </h3>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="header">
                                <h4 class="title" align="center">Total User</h4>
                            </div>
                            <div class="content">
                                <h3 align="center">
                                    <?php
                                    foreach ($TotalUser as $TotalUser)
                                    {
                                        echo $TotalUser['jumlah'];
                                    }
                                    ?>
                                </h3>
                            </div>
                        </div>

                    </div>
<hr>
                    <h3 align="center">Product</h3>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="header">
                                <h4 class="title" align="center">Verified Product</h4>
                            </div>
                            <div class="content">
                                <h3 align="center">
                                    <?php
                                    foreach ($VerifiedProduct as $VerifiedProduct)
                                    {
                                        echo $VerifiedProduct['jumlah'];
                                    }
                                    ?>
                                </h3>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="header">
                                <h4 class="title" align="center">Unverified Product</h4>
                            </div>
                            <div class="content">
                                <h3 align="center">
                                    <?php
                                    foreach ($UnverifiedProduct as $UnverifiedProduct)
                                    {
                                        echo $UnverifiedProduct['jumlah'];
                                    }
                                    ?>
                                </h3>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="header">
                                <h4 class="title" align="center">Total Product</h4>
                            </div>
                            <div class="content">
                                <h3 align="center">
                                    <?php
                                    foreach ($TotalProduct as $TotalProduct)
                                    {
                                        echo $TotalProduct['jumlah'];
                                    }
                                    ?>
                                </h3>
                            </div>
                        </div>

                    </div>

                    <hr>
                    <h3 align="center">Transaction</h3>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="header">
                                <h4 class="title" align="center">Verified Transaction</h4>
                            </div>
                            <div class="content">
                                <h3 align="center">
                                    <?php
                                    foreach ($VerifiedTransaction as $VerifiedTransaction)
                                    {
                                        echo $VerifiedTransaction['jumlah'];
                                    }
                                    ?>
                                </h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="header">
                                <h4 class="title" align="center">Unverified Transaction</h4>
                            </div>
                            <div class="content">
                                <h3 align="center">
                                    <?php
                                    foreach ($UnverifiedTransaction as $UnverifiedTransaction)
                                    {
                                        echo $UnverifiedTransaction['jumlah'];
                                    }
                                    ?>
                                </h3>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="header">
                                <h4 class="title" align="center">Total Transaction</h4>
                            </div>
                            <div class="content">
                                <h3 align="center">
                                    <?php
                                    foreach ($TotalTransaction as $TotalTransaction)
                                    {
                                        echo $TotalTransaction['jumlah'];
                                    }
                                    ?>
                                </h3>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="header">
                                <h4 class="title" align="center">Denied Transaction</h4>
                            </div>
                            <div class="content">
                                <h3 align="center">
                                    <?php
                                    foreach ($DeniedTransaction as $DeniedTransaction)
                                    {
                                        echo $DeniedTransaction['jumlah'];
                                    }
                                    ?>
                                </h3>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

<!--   Core JS Files   -->
<script src="<?php echo base_url("./assets/js/jquery-1.10.2.js")?>" type="text/javascript"></script>
<script src="<?php echo base_url("./assets/js/bootstrap.min.js")?>" type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src="<?php echo base_url("./assets/js/bootstrap-checkbox-radio-switch.js")?>"></script>

<!--  Charts Plugin -->
<script src="<?php echo base_url("./assets/js/chartist.min.js")?>"></script>

<!--  Notifications Plugin    -->
<script src="<?php echo base_url("./assets/js/bootstrap-notify.js")?>"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="<?php echo base_url("./assets/js/light-bootstrap-dashboard.js")?>"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="<?php echo base_url("./assets/js/demo.js")?>"></script>

<script type="text/javascript">
    $(document).ready(function(){
        demo.initChartist();
        $.notify({
            icon: 'pe-7s-gift',
            message: "<b>Login Berhasil</b> Selamat datang di halaman admin operkredit"

        },{
            type: 'info',
            timer: 4000
        });
    });
</script>

</html>