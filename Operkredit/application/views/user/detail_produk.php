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

    <title>Operkredit</title>

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
    <?php
    $this->load->view("navbar");
    ?>
    </div>
    <!-- Nested Container Starts -->
    <div class="container">

        <!-- Nested Container Ends -->
</header>
<!-- Header Section Ends -->

<!-- Main Container Starts -->
<div id="main-container" class="container">
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url("index.php/user/produk")?>">Produk</a></li>
        <li class="active">Detail Produk</li>
    </ol>
    <!-- Main Heading Starts -->
    <h2 align="center">
        Detail Produk <br />
    </h2>


    <!-- Main Heading Ends -->

            <!-- Registration Section Starts -->
    <?php
    foreach ($data as $data)
    {
    ?>
            <section class="registration-area">
                <div class="row">
                    <div class="col-sm-6">
                        <!-- Registration Block Starts -->
                        <div class="panel panel-smart">
                            <div class="panel-heading">
                                <h3 class="panel-title">Informasi Rumah</h3>
                            </div>
                            <div class="panel-body">
                                <!-- Registration Form Starts -->
                                <form class="form-horizontal">
                                    <!-- Personal Information Starts -->
                                    <div class="form-group">
                                        <label for="inputFname" class="col-sm-3 control-label">Judul : </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="judul" value="<?php echo $data['judul'] ?>" readonly
                                                   placeholder="Contoh : Hunian Cibubur">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputFname" class="col-sm-3 control-label">Luas Tanah (M2) :</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" name="luas_tanah" value="<?php echo $data['luas_tanah'] ?>" readonly
                                                   placeholder="Luas Tanah">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputLname" class="col-sm-3 control-label">Lantai :</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" name="lantai" value="<?php echo $data['lantai'] ?>" readonly
                                                   placeholder="Jumlah Lantai">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail" class="col-sm-3 control-label">Kamar Mandi :</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" name="kamar_mandi" value="<?php echo $data['kamar_mandi'] ?>" readonly
                                                   placeholder="Jumlah kamar mandi">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPhone" class="col-sm-3 control-label">Luas Bangunan (M2) :</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" name="luas_bangunan" value="<?php echo $data['luas_bangunan'] ?>" readonly placeholder="Luas Bangunan">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputFax" class="col-sm-3 control-label">Kamar :</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" name="kamar" placeholder="Jumlah Kamar" value="<?php echo $data['kamar'] ?>" readonly>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label for="inputFax" class="col-sm-3 control-label">Sertifikasi :</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="kamar" placeholder="Jumlah Kamar" value="<?php echo $data['sertifikasi'] ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputFax" class="col-sm-3 control-label">Kota :</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="kota" placeholder="Kota" value="<?php echo $data['kota'] ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputFax" class="col-sm-3 control-label">Dokumen :</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="kota" placeholder="Kota" value="<?php echo $data['dokumen'] ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputFax" class="col-sm-3 control-label">Alamat / Lokasi :</label>
                                        <div class="col-sm-9">
                                            <textarea type="text" class="form-control" name="alamat" placeholder="Alamat Lengkap Rumah" value="<?php echo $data['alamat'] ?>" readonly ><?php echo $data['alamat'] ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputFax" class="col-sm-3 control-label">Deskripsi Lainnya</label>
                                        <div class="col-sm-9">
                                            <textarea type="text" class="form-control" name="deskripsi" value="<?php echo $data['deskripsi'] ?>" readonly placeholder="Deskripsi rumah dengan lengkap, contoh : rumah dekat dengan tol, Listrik 1300 watt"><?php echo $data['deskripsi'] ?></textarea>
                                         </div>
                                    </div>

                                    <!-- Personal Information Ends -->

                                    <!-- Password Area Ends -->
                                </form>

                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-9"><br>
                                        <button class="btn btn-black" onclick="location.href='<?php echo base_url("index.php/user/edit/".$data['idrumah'])?>'">
                                            Edit
                                        </button>
                                    </div>
                                </div>
                                <!-- Registration Form Starts -->
                            </div>
                        </div>
                        <!-- Registration Block Ends -->
                    </div>
                    <div class="col-sm-6">
                        <!-- Registration Block Starts -->
                        <div class="panel panel-smart">
                            <div class="panel-heading">
                                <h3 class="panel-title">Foto Produk</h3>
                            </div>
                            <div class="panel-body">
                                <!-- Registration Form Starts -->
                                <form class="form-horizontal" role="form" method="POST"
                                      action="<?php echo base_url("index.php/user/rumah") ?>" enctype="multipart/form-data">
                                    <!-- Personal Information Starts -->
                                    <div class="form-group">
                                        <label for="inputCompany" class="col-sm-3 control-label">Foto 1 :</label>
                                        <div class="col-sm-9">
                                            <a href="<?php echo base_url("./rumah/".$data['foto1'])?>">
                                                <img src="<?php echo base_url("./rumah/".$data['foto1'])?>" width="100" class="img-responsive thumbnail">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputCompanyId" class="col-sm-3 control-label">Foto 2 :</label>
                                        <div class="col-sm-9">
                                            <a href="<?php echo base_url("./rumah/".$data['foto2'])?>">
                                            <img src="<?php echo base_url("./rumah/".$data['foto2'])?>" width="100" class="img-responsive thumbnail">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress1" class="col-sm-3 control-label">Foto 3 :</label>
                                        <div class="col-sm-9">
                                            <a href="<?php echo base_url("./rumah/".$data['foto3'])?>">
                                            <img src="<?php echo base_url("./rumah/".$data['foto3'])?>" width="100" class="img-responsive thumbnail">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress2" class="col-sm-3 control-label">Foto 4 :</label>
                                        <div class="col-sm-9">
                                            <a href="<?php echo base_url("./rumah/".$data['foto4'])?>">
                                            <img src="<?php echo base_url("./rumah/".$data['foto4'])?>" width="100" class="img-responsive thumbnail">
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Password Area Ends -->
                                </form>

                            <div class="panel-heading">
                                <h3 class="panel-title">Informasi Cicilan</h3>
                            </div>
                            <div class="panel-body">
                                <!-- Registration Form Starts -->
                                <form class="form-horizontal" role="form" method="POST"
                                      action="<?php echo base_url("index.php/user/rumah") ?>" enctype="multipart/form-data">
                                    <!-- Personal Information Starts -->
                                    <div class="form-group">
                                        <label for="inputCompany" class="col-sm-3 control-label">Harga :</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="harga" value="<?php echo $data['harga'] ?>" readonly
                                                   placeholder="Harga Total Keseluruhan">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputCompanyId" class="col-sm-3 control-label">Total Jangka Waktu Cicilan (Bulan) :</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="total_cicilan" value="<?php echo $data['total_cicilan'] ?>" readonly
                                                   placeholder="Total bulan">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress1" class="col-sm-3 control-label">Cicilan Berjalan ke :</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="cicilan_ke" value="<?php echo $data['cicilan_ke'] ?>" readonly
                                                   placeholder="Cicilan Berjalan (Bulan)">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress2" class="col-sm-3 control-label">Cicilan Perbulan :</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="cicilan_perbulan" value="<?php echo $data['cicilan_perbulan'] ?>" readonly
                                                   placeholder="Cicilan Perbulan">
                                        </div>
                                    </div>
                                    <!-- Password Area Ends -->
                                </form>
                                <!-- Registration Form Starts -->
                            </div>
                        </div>
                        <!-- Registration Block Ends -->
                    </div>
                </div>
            </section>
    <?php
    }
    ?>
</div>
<br><br><br><br><br>
<!-- Main Container Ends -->
<!-- Footer Section Starts -->
<?php
$this->load->view("footer");
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