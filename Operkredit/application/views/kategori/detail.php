<!doctype html>
<html lang="en">

<!-- Mirrored from www.shoppestores.com/demos/mobile-shoppe/product-full.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Oct 2017 11:09:02 GMT -->
<head>

    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Detail</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url("css/bootstrap.min.css")?>" rel="stylesheet">

    <!-- Google Web Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Oswald:400,700,300" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400" rel="stylesheet" type="text/css">

    <!-- CSS Files -->
    <link href="<?php echo base_url("./font-awesome/css/font-awesome.min.css")?>" rel="stylesheet">
    <link href="<?php echo base_url("./css/magnific-popup.css")?>" rel="stylesheet">
    <link href="<?php echo base_url("./css/style.css")?>" rel="stylesheet">
    <link href="<?php echo base_url("css/responsive.css")?>" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="<?php echo base_url("./js/ie8-responsive-file-warning.js")?>"></script>
    <![endif]-->

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
    <?php
        $this->load->view("./navbar");
    ?>
<!-- Main Menu Ends -->
<!-- Main Container Starts -->
<?php
foreach ($data as $data) {
?>
<div id="main-container" class="container">
    <!-- Breadcrumb Starts -->
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url("index.php/")?>">Home</a></li>
        <li><a href="<?php echo base_url("index.php/category/rumah")?>">Rumah</a></li>
        <li class="active">Detail</li>
    </ol>
    <!-- Breadcrumb Ends -->
    <!-- Product Info Starts -->
    <div class="row product-info full">
        <!-- Left Starts -->

        <div class="col-sm-4 images-block">
                    <a href="<?php echo base_url("./rumah/".$data['foto1'])?>">
                        <img src="<?php echo base_url("./rumah/".$data['foto3'])?>"  alt="Image" class="img-responsive thumbnail"/>
                    </a>
                    <ul class="list-unstyled list-inline">
                        <li>
                            <a href="<?php echo base_url("./rumah/".$data['foto2'])?>">
                                <img src="<?php echo base_url("./rumah/".$data['foto1'])?>" width="100" alt="Image"
                                     class="img-responsive thumbnail"/>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url("./rumah/".$data['foto3'])?>">
                                <img src="<?php echo base_url("./rumah/".$data['foto2'])?>" width="100" alt="Image"
                                     class="img-responsive thumbnail"/>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url("./rumah/".$data['foto4'])?>"">
                                <img src="<?php echo base_url("./rumah/".$data['foto3'])?>" width="100" alt="Image"
                                     class="img-responsive thumbnail"/>
                            </a>
                        </li>
                    </ul>
        </div>

        <!-- Left Ends -->
        <!-- Right Starts -->
        <div class="col-sm-8 product-details">
            <div class="panel-smart">
                <!-- Product Name Starts -->
                <h2><?php echo $data['judul']?></h2>
                <!-- Product Name Ends -->
                <hr />
                <!-- Manufacturer Starts -->
                <ul class="list-unstyled manufacturer">
                    <li>
                        <span>Harga</span> <?php echo "Rp ".number_format($data['harga'],2,',','.') ?>
                    </li>
                    <li><span>Lokasi</span> <?php echo $data['kota']?></li>
                    <li><span>Cicilan ke</span> <?php echo $data['cicilan_ke']?></li>
                    <li><span>Total Cicilan</span> <?php echo $data['total_cicilan']." Bulan"?></li>
                    <li>
                        <span>Cicilan :</span> <?php echo "Rp ".number_format($data['cicilan_perbulan'],2,',','.') ?></strong>
                    </li>
                </ul>
                <!-- Manufacturer Ends -->
     <br>
                <!-- Available Options Starts -->
                <div class="options">
                    <div class="cart-button button-group">
                        <?php
                        if($data['pengoper_kredit'] != $_SESSION['username']) {
                            ?>
                            <button type="button" class="btn btn-cart">
                                Ajukan Operkredit
                            </button>
                            <?php
                        }
                        else
                        {
                            ?>
                            <button type="button" class="btn btn-cart" onclick="location.href='<?php echo base_url("index.php/user/produk") ?>';">
                                Lihat semua barang
                            </button>
                            <br><br>
                            * Ini adalah halaman berisi salah satu barang yang kamu ajukan untuk di operkredit
                            <?php
                        }
                        ?>
                    </div>
                </div>
                <!-- Available Options Ends -->
            </div>
        </div>
        <!-- Right Ends -->
    </div>
    <!-- Product Info Ends -->
    <!-- Tabs Starts -->
    <div class="tabs-panel panel-smart">
        <!-- Nav Tabs Starts -->
        <ul class="nav nav-tabs">
            <li class="active">
                <a href="#tab-description">Deskripsi</a>
            </li>
            <li>
                <a href="#tab-specification">Informasi Lainnya</a>
            </li>
        </ul>
        <!-- Nav Tabs Ends -->
        <!-- Tab Content Starts -->
        <div class="tab-content clearfix">
            <!-- Description Starts -->
            <div class="tab-pane active" id="tab-description">
                <p>
                    <?php echo $data['deskripsi'] ?>
                </p>
            </div>
            <!-- Description Ends -->
            <!-- Specification Starts -->
            <div class="tab-pane" id="tab-specification">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <td colspan="2"><strong>Informasi</strong></td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Nama Pengoper Kredit</td>
                        <td><?php echo $data['pengoper_kredit'] ?></td>
                    </tr>
                    <tr>
                        <td>Luas Tanah (M2)</td>
                        <td><?php echo $data['luas_tanah'] ?></td>
                    </tr>
                    <tr>
                        <td>Lantai</td>
                        <td><?php echo $data['lantai'] ?></td>
                    </tr>
                    <tr>
                        <td>Kamar Mandi</td>
                        <td><?php echo $data['kamar_mandi'] ?></td>
                    </tr>
                    <tr>
                        <td>Luas Bangunan (M2)</td>
                        <td><?php echo $data['luas_bangunan'] ?></td>
                    </tr>
                    <tr>
                        <td>Kamar</td>
                        <td><?php echo $data['kamar'] ?></td>
                    </tr>
                    <tr>
                        <td>Sertifikasi</td>
                        <td><?php echo $data['sertifikasi'] ?></td>
                    </tr>
                    <tr>
                        <td>Kota</td>
                        <td><?php echo $data['kota'] ?></td>
                    </tr>
                    <tr>
                        <td>Kelengkapan Dokumen</td>
                        <td><?php echo $data['dokumen'] ?></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td><?php echo $data['alamat'] ?></td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td><?php echo $data['status'] ?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <!-- Specification Ends -->
        </div>
        <!-- Tab Content Ends -->
    </div>
    <!-- Tabs Ends -->
</div>
    <?php
}
?>
<!-- Main Container Ends -->
<!-- Footer Section Starts -->
<?php
    $this->load->view("./footer");
?>
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