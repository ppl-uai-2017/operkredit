<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title>Daftar Produk</title>

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
                                <h5 class="breadcrumbs-title">Produk</h5>
                                <ol class="breadcrumb">
                                    <li><a href="<?php echo base_url("")?>">Dashboard</a></li>
                                    <li class="active">Barang Saya</li>
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
                                        <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                                            <thead>
                                            <tr>
                                                <th>No STNKB </th>
                                                <th>Foto </th>
                                                <th>Judul </th>
                                                <th>Harga </th>
                                                <th>Total Cicilan</th>
                                                <th>Ketersediaan</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            <?php
                                            if($data != null){
                                            foreach ($data as $data)
                                            {
                                                ?>
                                            <tr>
                                                <td><?php echo $data['no_stnkb']; ?></td>
                                                <td><img src="<?php echo base_url("./motor/" . $data['foto1']) ?>" width="100" alt="image"
                                                         title="image" class="img-thumbnail"/></td>
                                                <td><?php echo $data['nama']; ?></td>
                                                <td><?php echo number_format($data['harga_awal'], 2, ',', '.'); ?></td>
                                                <td> <?php echo $data['total_cicilan'] . " Bulan"; ?></td>
                                                <td><span class="label label-success"><?php echo $data['stok']; ?></span></td>
                                                <td><?php
                                                    if ($data['status'] == "Menunggu") {
                                                        ?>
                                                        <span class="btn waves-effect waves-light yellow"><?php echo $data['status']; ?></span>
                                                        <?php
                                                    } elseif ($data['status'] == "Terverifikasi") {
                                                        ?>
                                                        <span class="btn waves-effect waves-light green"><?php echo $data['status']; ?></span>
                                                        <?php
                                                    }
                                                    elseif ($data['status'] == "Dalam Transaksi") {
                                                        ?>
                                                        <span class="btn waves-effect waves-light grey"><?php echo $data['status']; ?></span>
                                                        <?php
                                                    }
                                                    else {
                                                        ?>
                                                        <span class="btn waves-effect waves-light red"><?php echo $data['status']; ?></span>
                                                        <?php
                                                    }
                                                    ?></td>
                                                <td><a href="<?php echo base_url("index.php/user/detail_produk/" . $data['no_stnkb']) ?>"><i class="mdi-action-home"></i></a>
                                                    <?php
                                                    if ($data['stok'] != 1) {
                                                        ?>
                                                        <a href="<?php echo base_url("index.php/user/edit/" . $data['no_stnkb']) ?>"><i
                                                                    class="mdi-editor-border-color"></i></a>
                                                        <?php
                                                    }
                                                    elseif ($data['status'] != "Dalam Transaksi") {
                                                        ?>
                                                        <a href="<?php echo base_url("index.php/user/edit/" . $data['no_stnkb']) ?>"><i
                                                                    class="mdi-editor-border-color"></i></a>
                                                        <?php
                                                    }
                                                    else {
                                                        echo "";
                                                    }

                                                    ?>
                                                    <?php
                                                    if($data['status'] == "Dalam Transaksi")
                                                    {
                                                        ?>
                                                        <a href="<?php echo base_url("index.php/transaksi/riwayat/") ?>" <i
                                                            class="mdi-action-add-shopping-cart"> Transaksi</i></a>
                                                        <?php
                                                    }
                                                    else {
                                                        ?>
                                                        <a href="<?php echo base_url("index.php/user/hapus/" . $data['no_stnkb']) ?>"
                                                           onclick="return confirm('Yakin Menghapus Produk ?')"> <i
                                                                    class="mdi-action-delete"></i></a>
                                                        <?php
                                                    }
                                                    ?></td>
                                            </tr>
                                            <?php
                                            }}
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