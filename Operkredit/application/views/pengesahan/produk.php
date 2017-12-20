<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Daftar Produk</title>

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
    <div class="sidebar" data-color="black">

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
                <li>
                    <a href="<?php echo base_url("index.php/pengesahan/customer")?>">
                        <i class="pe-7s-user"></i>
                        <p>Daftar Registrasi</p>
                    </a>
                </li>
                <li class="active">
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
                    <div class="col-md-12">
                        <div class="header">
                            <h4 class="title" align="center">Daftar Produk</h4>
                            <hr>
                        </div>

                            <table id="data-table-simple" class="responsive-table display">
                                <?php
                                if(isset($message))
                                {
                                    echo $message;
                                }
                                ?>
                                <thead>
								<th>No.</th>
                                <th>No STNKB</th>
                                <th>Nama Pengoper Kredit</th>
                                <th>Status</th>
                                <th>Aksi</th>
                                </thead>
                                <tbody>
                                <?php

                                if($data != null)
                                {$no = 0;
                                foreach ($data as $data) {
                                    ?>

                                    <tr>
										<td><?php echo $no = $no + 1 ?></td>
                                        <td><?php echo $data['no_stnkb'] ?></td>
                                        <td><?php echo $data['nama_lengkap'] ?></td>
                                        <td><?php if ($data['status'] == "Menunggu" || $data['status'] == "Terjual" || $data['status'] == "Habis") {
                                                echo "<font color='black'>" . $data['status'] . "</font>";
                                            } elseif ($data['status'] == "Terverifikasi") {
                                                echo "<font color='#32cd32'>" . $data['status'] . "</font>";
                                            } elseif ($data['status'] == "Ditolak") echo "<font color='red'>" . $data['status'] . "</font>" ?></td>
                                        <td>
                                            <button type="button" rel="tooltip" title="Detail"
                                                    class="btn btn-info btn-simple btn-xs"
                                                    onclick="location.href='<?php echo base_url("index.php/pengesahan/detailProduk/" . $data['no_stnkb']) ?>';">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                            <a href="<?php echo base_url("index.php/pengesahan/hapusProduk/" . $data['no_stnkb']) ?>" type="button" rel="tooltip" title="Hapus"
                                                    class="btn btn-danger btn-simple btn-xs"
                                                    onclick="return confirm('Produk ini akan dihapus ?')">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </td>

                                    </tr>
                                    <?php
                                }
                                }
                                else
                                {
                                    ?>
                                    <tr>
                                        <td colspan="4" align="center">Belum Ada Data</td>
                                    </tr>
                                <?php
                                }
                                ?>
                                </tbody>
                            </table>
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