<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Light Bootstrap Dashboard by Creative Tim</title>

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

                <li class="active">
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
                        <div class="card">
                            <div class="header">
                                <h4 class="title" align="center">Penjadwalan Transaksi</h4>
                                <hr>

                                <div class="col-md-6">
                                    <div class="card">
                                        <form method="POST" action="<?php echo base_url("index.php/pengesahan/jadwal/".$this->uri->segment('3'))?>">
                                        <table class="table table-hover table-striped">
                                        <tr>
                                            <td>
                                                <select name="status"class="form-control">
                                                    <option value="">Pilih Status Jadwal</option>
                                                    <option value="Menunggu Konfirmasi">Menunggu Konfirmasi</option>
                                                    <option value="Terlaksana">Terlaksana</option>
                                                    <option value="Batal">Batal</option>
                                                    <option value="Perpanjang">Perpanjang</option>
                                                </select>
                                                <input type="text" name="id_jadwal" value="<?php echo $this->uri->segment('3')?>" hidden>
                                            </td>
                                            <td>
                                                <input type="date" class="form-control" name="pertemuan">
                                            </td>
                                            <td>
                                                <?php
                                                if($load == null) {
                                                    ?>
                                                        <input type="submit" class="form-control" name="submit" value="Simpan">
                                                    <?php
                                                }
                                                else
                                                {
                                                    ?>
                                                        <input type="submit" class="form-control" name="edit" value="Ubah">
                                                    <?php
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                        </table>
                                        </form>
                                    </div>
                                </div>

                                <table class="table">
                                    <?php
                                    if($load != null)
                                    {
                                    foreach ($load as $jadwal) {
                                        ?>
                                        <tr>
                                            <td>Status Pendjadwalan : <?php echo $jadwal['status_jadwal'] ?></td>
                                            <td>Tanggal Penjadwalan : <?php echo $jadwal['tanggal'] ?></td>
                                            <td>Tanggal Pertemuan : <?php echo $jadwal['pertemuan'] ?></td>
                                        </tr>
                                        <?php
                                    }
                                    }
                                    else
                                    {
                                        echo "Belum ada jadwal";
                                    }
                                    ?>
                                </table>

                            </div>
                        </div>
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

</html>