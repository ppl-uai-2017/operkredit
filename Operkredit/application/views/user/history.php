<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title>Riwayat Transaksi</title>

    <!-- Favicons-->
    <link rel="icon" href="<?php echo base_url("./images/favicon/favicon-32x32.png")?>" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url("./images/favicon/apple-touch-icon-152x152.png")?>">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
    <!-- For Windows Phone -->

    <!-- CORE CSS-->

    <link href="<?php echo base_url("./css/materialize.css")?>" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<?php echo base_url("./css/style.css")?>" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->
    <link href="<?php echo base_url("./css/custom-style.css")?>" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- CSS style Horizontal Nav (Layout 03)-->
    <link href="<?php echo base_url("./css/style-horizontal.css")?>" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<?php echo base_url("../../../../cdn.datatables.net/1.10.6/css/jquery.dataTables.min.css")?>" type="text/css" rel="stylesheet" media="screen,projection">

    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="<?php echo base_url("./css/prism.css")?>" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<?php echo base_url("./js/plugins/perfect-scrollbar/perfect-scrollbar.css")?>" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<?php echo base_url("./js/plugins/data-tables/css/jquery.dataTables.min.css")?>" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<?php echo base_url("./js/plugins/chartist-js/chartist.min.css")?>" type="text/css" rel="stylesheet" media="screen,projection">
</head>

<body>
<!-- //////////////////////////////////////////////////////////////////////////// -->

<?php
$this->load->view("./navbar");
?>

<!-- //////////////////////////////////////////////////////////////////////////// -->

<!-- START MAIN -->
<div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">
        <!-- //////////////////////////////////////////////////////////////////////////// -->

        <!-- START CONTENT -->
        <section id="content">

            <!--start container-->
            <div class="container">

                <div class="section">
                    <div class="container">
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <h5 class="breadcrumbs-title">Riwayat</h5>
                                <ol class="breadcrumb">
                                    <li><a href="<?php echo base_url("")?>">Dashboard</a></li>
                                    <li class="active">Riwayat Transaksi</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!--DataTables example-->
                    <div id="table-datatables">
                        <div class="row">
                            <div class="col s12 m4 l">

                                <?php
                                if(isset($message))
                                {
                                    echo $message;
                                }
                                ?>
                            </div>
                            <div id="profile-page-wall-post" class="card">

                                <div class="card-profile-title">

                                    <div class="col s12 ">
                                        * Transaksi dalam status menunggu belum bisa melanjutkan penjadwalan
                                        <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                                            <thead>
                                            <tr>
                                                <th>No Transaksi</th>
                                                <th>Tanggal </th>
                                                <th>Judul </th>
                                                <th>Total Harga</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            <?php
                                            if($data != null) {
                                                foreach ($data as $data) {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $data['id_pengambilan_kredit']; ?></td>
                                                        <td><?php echo $data['tanggal']; ?></td>
                                                        <td><?php echo $data['judul']; ?></td>
                                                        <td><?php echo number_format($data['total_bayar'], 2, ',', '.'); ?></td>
                                                        <td>
                                                            <?php
                                                            if ($data['status_transaksi'] == "Menunggu") {
                                                                ?>
                                                                <span class="btn waves-effect waves-light yellow"><?php echo $data['status_transaksi']; ?></span>
                                                                <?php
                                                            } elseif ($data['status_transaksi'] == "Disetujui") {
                                                                ?>
                                                                <span class="btn waves-effect waves-light green"><?php echo $data['status_transaksi']; ?></span>
                                                                <?php
                                                            } else{
                                                                ?>
                                                                <span class="btn waves-effect waves-light red"><?php echo $data['status_transaksi']; ?></span>
                                                                <?php
                                                            }
                                                            ?>
                                                        </td>
                                                    <td><a href="<?php echo base_url("index.php/user/detailHistory/" . $data['id_pengambilan_kredit']) ?>"><i
                                                                    class="mdi-image-remove-red-eye"></i></a></td>
                                                    </tr>
                                                    <?php
                                                }
                                            }
                                            ?>
                                            </tbody>

                                            <br>
                                        </table><br><br>
                                    </div>

                                </div>

                            </div>

                            <br> <br>
                        </div>
                    </div>
                    <br>
                    <div class="divider"></div>
                </div>

            </div>
            <!--end container-->

        </section>
        <!-- END CONTENT -->

    </div>
    <!-- END WRAPPER -->

</div>
<!-- END MAIN -->



<!-- //////////////////////////////////////////////////////////////////////////// -->

<!-- START FOOTER -->
<?php
$this->load->view("./footer");
?>
<!-- ================================================
Scripts
================================================ -->

<!-- jQuery Library -->
<script type="text/javascript" src="<?php echo base_url("./js/jquery-1.11.2.min.js")?>"></script>
<!--materialize js-->
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
</body>

</html>