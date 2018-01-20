<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title>Semua Motor</title>

    <!-- Favicons-->
    <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
    <!-- For Windows Phone -->


    <!-- CORE CSS-->

    <link href="<?php echo base_url("../css/materialize.css")?>" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<?php echo base_url("../css/style.css")?>" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->
    <link href="<?php echo base_url("../css/custom-style.css")?>" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- CSS style Horizontal Nav (Layout 03)-->
    <link href="<?php echo base_url("../css/style-horizontal.css")?>" type="text/css" rel="stylesheet" media="screen,projection">


    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="<?php echo base_url("../css/prism.css")?>" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<?php echo base_url("../js/plugins/perfect-scrollbar/perfect-scrollbar.css")?>" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<?php echo base_url("../js/plugins/chartist-js/chartist.min.css")?>" type="text/css" rel="stylesheet" media="screen,projection">
</head>

<body>
<!-- //////////////////////////////////////////////////////////////////////////// -->

<!-- START HEADER -->
<header id="header" class="page-topbar">
    <!-- start header nav-->
    <?php
    $this->load->view("navbar");
    ?>
    <!-- end header nav-->
</header>
<!-- END HEADER -->

<!-- //////////////////////////////////////////////////////////////////////////// -->

<!-- START MAIN -->
<div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">
        <!-- START CONTENT -->
        <section id="content">

            <!--breadcrumbs start-->
            <div id="breadcrumbs-wrapper" class=" grey lighten-3">
                <!-- Search for small screen -->
                <div class="header-search-wrapper grey hide-on-large-only">
                    <i class="mdi-action-search active"></i>
                    <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col s12 m12 l12">
                            <h5 class="breadcrumbs-title">Semua Motor</h5>
                            <ol class="breadcrumb">
                                <li><a href="../../">Kembali</a></li>
                                <li>Motor</li>
                                <li class="active">All</li>
                            </ol>
                        </div>
                    </div>

                    <form action="<?php echo base_url("index.php/category/all")?>" method="POST">
                        <div class="row">
                            <div class="input-field col s3">
                                <input type="text" name="kota" class="form-control" required placeholder="Berdasarkan Kota" oninvalid="this.setCustomValidity('Tidak Boleh Kosong')"
                                       oninput="setCustomValidity('')" >
                                <label for="first_name">Kota</label>
                            </div>
                            <br>
                            <button type="submit"  name="submit" class="btn waves-effect waves-light  deep-purple">Terapkan</button>
                        </div>
                    </form>
                    <br>
                </div>
            </div>
            <!--breadcrumbs end-->

            <!--start container-->
            <div class="container">
                <div class="section">
                    <!-- statr products list -->
                    <div id="products" class="row">
                        <div class="product-sizer"></div>

                        <?php
                        if($motor != null) {
                            foreach ($motor as $data => $motor) {
                                ?>

                                <div class="product">
                                    <div class="card">
                                        <div class="card-image waves-effect waves-block waves-light">
                                            <a href="<?php echo base_url("index.php/category/detail/" . $motor->no_stnkb) ?>"><img src="<?php echo base_url("./motor/" . $motor->foto1) ?>" alt="product-img" height="230" >
                                            </a>
                                        </div>
                                        <div class="card-content">
                                            <?php echo $motor->nama ?>
                                            <hr>
                                            <div class="row">
                                                <div class="col s8">

                                                    <button onclick="location.href='<?php echo base_url("index.php/category/detail/" . $motor->no_stnkb) ?>';"
                                                            type="button" class="btn btn-cart">
                                                        Lihat
                                                    </button>
                                                    <br>

                                                </div>

                                                <div class="col s3 no-padding">
                                                    <?php
                                                    if ($motor->stok == 1) {
                                                        echo "<h6 align='right'><font color='green'> Tersedia</font></h6>";
                                                    } else {
                                                        echo "<h6 align='right'><font color='grey'> Terjual</font></h6>";
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col s6 grey-text darken-1">&nbsp; Harga</div>
                                            <div class="col s6 grey-text text-darken-4"><?php echo "Rp." . number_format($motor->harga_awal, 2, ',', '.') ?></div>
                                        </div>

                                        <div class="row">
                                            <div class="col s6 grey-text darken-1">&nbsp; Lokasi</div>
                                            <div class="col s6 grey-text text-darken-4 "><?php echo $motor->kota ?></div>
                                        </div>

                                        <div class="row">
                                            <div class="col s6 grey-text darken-1">&nbsp; Cicilan Ke</div>
                                            <div class="col s6 grey-text text-darken-4 "><?php echo $motor->cicilan_ke ?></div>
                                        </div>

                                        <div class="row">
                                            <div class="col s6 grey-text darken-1">&nbsp; Total Cicilan</div>
                                            <div class="col s6 grey-text text-darken-4 "><?php echo $motor->total_cicilan . " Bulan" ?></div>
                                        </div>

                                        <div class="row">
                                            <div class="col s6 grey-text darken-1">&nbsp; Cicilan</div>
                                            <div class="col s6 grey-text text-darken-4 "><?php echo "Rp." . number_format($motor->cicilan_perbulan, 2, ',', '.') . " /bulan" ?></div>
                                        </div>

                                        <div class="row">
                                            <div class="col s6 grey-text darken-1">&nbsp; Tanggal Posting</div>
                                            <div class="col s6 grey-text text-darken-4 "><?php echo date("d M Y", strtotime($motor->tanggal_post)) ?></div>
                                        </div>
                                        <br>
                                    </div>

                                </div>
                                <br>
                                <?php
                            }
                        }
                        else
                        {
                            echo "<h6 align='center'>Produk tidak ditemukan, silahkan cari kembali dikota lain</h6>";
                        }
                        ?>

                    </div>
                    <!--/ end items list -->
                </div>
            </div>
            <!--end container-->
        </section>
        <!-- END CONTENT -->

    </div>
    <!-- END WRAPPER -->

</div>
<!-- END MAIN -->

<!-- ================================================
Scripts
================================================ -->

<!-- jQuery Library -->
<script type="text/javascript" src="<?php echo base_url("../js/jquery-1.11.2.min.js")?>"></script>
<!--materialize js-->
<script type="text/javascript" src="<?php echo base_url("../js/materialize.js")?>"></script>
<!--prism-->
<script type="text/javascript" src="<?php echo base_url("../js/prism.js")?>"></script>
<!--scrollbar-->
<script type="text/javascript" src="<?php echo base_url("../js/plugins/perfect-scrollbar/perfect-scrollbar.min.js")?>"></script>
<!-- chartist -->
<script type="text/javascript" src="<?php echo base_url("../js/plugins/chartist-js/chartist.min.js")?>"></script>
<!-- chartist -->
<script type="text/javascript" src="<?php echo base_url("../js/plugins/chartist-js/chartist.min.js")?>"></script>

<!-- masonry -->
<script src="<?php echo base_url("../js/plugins/masonry.pkgd.min.js")?>"></script>
<!-- imagesloaded -->
<script src="<?php echo base_url("../js/plugins/imagesloaded.pkgd.min.js")?>"></script>

<!--plugins.js - Some Specific JS codes for Plugin Settings-->
<script type="text/javascript" src="<?php echo base_url("../js/plugins.js")?>"></script>

<script type="text/javascript">
    /*
     * Masonry container for eCommerce page
     */
    var $containerProducts = $("#products");
    $containerProducts.imagesLoaded(function() {
        $containerProducts.masonry({
            itemSelector: ".product",
            columnWidth: ".product-sizer",
        });
    });
</script>


</body>

</html>