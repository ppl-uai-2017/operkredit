<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Daftar Registrasi User</title>

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

    <link href="<?php echo base_url("./css/materialize.css")?>" type="text/css" rel="stylesheet" media="screen,projection">

    <link href="<?php echo base_url("../../../../cdn.datatables.net/1.10.6/css/jquery.dataTables.min.css")?>" type="text/css" rel="stylesheet" media="screen,projection">

    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->

    <link href="<?php echo base_url("./js/plugins/data-tables/css/jquery.dataTables.min.css")?>" type="text/css" rel="stylesheet" media="screen,projection">

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="black" >
        <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->
        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    Operkredit
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="<?php echo base_url("index.php/pengesahan")?>">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="active">
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
                    <div class="col-md-15">

                            <div class="header">
                                <h4 class="title" align="center">Daftar Registrasi User</h4>
                                <hr>
                            </div>
                        <table >

                                <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                                    <thead>
                                    <tr>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Lengkap</th>
                                        <th>Email</th>
                                        <th>No Hp</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Status</th>
                                        <th>Tanggal Daftar</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>

                                    <tfoot>
                                    <tr>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Lengkap</th>
                                        <th>Email</th>
                                        <th>No Hp</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Status</th>
                                        <th>Tanggal Daftar</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </tfoot>

                                    <tbody>
                                    <?php
                                    if(isset($message))
                                    {
                                        echo $message;
                                    }
                                    $no = 1;

                                    foreach ($pengunjung as $data => $pengunjung) {
                                        ?>
                                            <td><?php echo $no ?></td>
                                            <td><?php echo $pengunjung->nama_lengkap ?></td>
                                            <td><?php echo $pengunjung->email ?></td>
                                            <td><?php echo $pengunjung->no_hp ?></td>
                                            <td><?php echo $pengunjung->jenis_kelamin ?></td>
                                            <td><?php if ($pengunjung->verifikasi == "Menunggu") {
                                                    echo "<font color='black'>" . $pengunjung->verifikasi . "</font>";
                                                } elseif ($pengunjung->verifikasi == "Terverifikasi") {
                                                    echo "<font color='#32cd32'>" . $pengunjung->verifikasi . "</font>";
                                                } elseif ($pengunjung->verifikasi == "Ditolak") echo "<font color='red'>" . $pengunjung->verifikasi . "</font>" ?></td>
                                            <td><?php echo $pengunjung->create_at ?></td>
                                            <td>
                                                <a href="<?php echo base_url("index.php/pengesahan/detailRegistrasi/" . $pengunjung->email) ?>" type="button" rel="tooltip" title="Detail"
                                                   class="btn btn-info btn-simple btn-xs">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <a href="<?php echo base_url("index.php/pengesahan/hapusRegistrasi/" . $pengunjung->email) ?>" type="button" rel="tooltip" title="Hapus"
                                                   class="btn btn-danger btn-simple btn-xs"
                                                   onclick="return confirm('User Registrasi ini akan dihapus ?')">
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php
                                        $no++;
                                    }
                                    ?>
                                    </tbody>
                                </table >
                            </div>
                </div>
            </div>
        </div>
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




<script type="text/javascript" src="<?php echo base_url("./js/materialize.js")?>"></script>
<!--prism-->
<script type="text/javascript" src="<?php echo base_url("./js/prism.js")?>"></script>
<!--scrollbar-->
<script type="text/javascript" src="<?php echo base_url("./js/plugins/perfect-scrollbar/perfect-scrollbar.min.js")?>"></script>
<!-- data-tables -->
<script type="text/javascript" src="<?php echo base_url("./js/plugins/data-tables/js/jquery.dataTables.min.js")?>"></script>
<script type="text/javascript" src="<?php echo base_url("./js/plugins/data-tables/data-tables-script.js")?>"></script>
<!-- chartist -->
<script type="text/javascript" src="<?php echo base_url("./js/plugins/chartist-js/chartist.min.js")?>"></script>

<script type="text/javascript" src="<?php echo base_url("./js/plugins.js")?>"></script>
</html>