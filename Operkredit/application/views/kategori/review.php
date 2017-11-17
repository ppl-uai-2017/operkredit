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
        <h2 align="center">Review Transaksi</h2>
        <br>
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
                    <h2 align="center">Informasi Produk</h2>
                    <hr />
                    <!-- Manufacturer Starts -->
                    <form action="<?php echo base_url("index.php/transaksi/checkout")?>" method="POST">
                        <ul class="list-unstyled manufacturer">
                            <li><span>Nama Produk</span><?php echo $data['judul']?></li>
                            <li>
                                <span>Harga</span> <?php echo "Rp ".number_format($data['harga'],2,',','.') ?>
                            </li>
                            <li><span>Lokasi</span> <?php echo $data['kota']?></li>
                            <li><span>Cicilan ke</span> <?php echo $data['cicilan_ke']?></li>
                            <li><span>Total Cicilan</span> <?php echo $data['total_cicilan']." Bulan"?></li>
                            <li>
                                <span>Cicilan</span> <?php echo "Rp ".number_format(($data['harga']*0.5 + $data['harga']) / $data['total_cicilan'],2,',','.') ?> /Bulan</strong>
                            </li>
                            <li>
                                <span>Biaya Transaksi</span> <?php echo "Rp ".number_format($data['harga']*0.5,2,',','.') ?> 5%</strong>
                            </li>

                            <li>
                                <span>Total Kewajiban</span> <?php echo "Rp ".number_format($data['harga']*0.5 + $data['harga'],2,',','.') ?></strong>
                            </li>
                            <br><br>
                            <li>
                                <span>Penerima Kredit</span> <?php echo $_SESSION['username'] ?></strong>
                            </li>
                            <br>
                            <li>Pilih Metode Pembayaran

                                    <select name="metode" class="form-control">
                                        <?php foreach ($pembayaran as $pembayaran) {
                                        ?>
                                        <option value="<?php echo $pembayaran['id_metode_pembayaran'] ?>"><?php echo $pembayaran['nama_metode_pembayaran'] ?> - <?php echo $pembayaran['nomor_rekening'] ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>

                            </li>

                            <hr>
                            <input name="idrumah" value="<?php echo $data['idrumah'] ?>" type="text" hidden>
                            <input name="penerima"  value="<?php echo $_SESSION['username'] ?>" type="text" hidden>
                            <input name="cicilan"  value="<?php echo ($data['harga']*0.5 + $data['harga']) / $data['total_cicilan'] ?>" type="text" hidden>
                            <input name="total"  value="<?php echo $data['harga']*0.5 + $data['harga'] ?>" type="text" hidden>

                            <input type="checkbox" name="syarat" required> Saya Menyetujui syarat dan ketentuan, dan akan meneruskan transaksi ini ke dalam transaksi menunggu untuk diverivikasi <br><br>
                            <button type="submit" type="button" class="btn btn-cart">
                                Ya, Ajukan
                            </button>
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
                        </ul>
                    </form>
                    <!-- Manufacturer Ends -->
                    <br>
                </div>
            </div>
            <!-- Right Ends -->
        </div>
        <!-- Product Info Ends -->

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