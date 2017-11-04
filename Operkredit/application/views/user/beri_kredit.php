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
    <!-- Breadcrumb Starts -->
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url("index.php/home")?>">Home</a></li>
        <li class="active">Beri Kredit</li>
    </ol>
    <!-- Breadcrumb Ends -->
    <!-- Main Heading Starts -->
    <?php
    foreach ($data as $data)
    {
        $verifikasi = $data['verifikasi'];
    }
    if($verifikasi != "Terverifikasi")
    {
        echo "<h2 align='center'>Anda Belum dapat mengajukan barang untuk operkredit</h2>";
    }
    else
    {
        ?>
        <h2 align="center">
            Ajukan Beri Kredit <br />
        </h2>
    <?php
    }

    if(isset($message))
    {
        echo $message;
    }
    ?>

    <?php
    if($verifikasi == "Terverifikasi")
    {
        ?>
        <form action="" method="POST">
            <select name="Produk" class="form-control" onchange="this.form.submit()" required>
                <option value="">Pilih Produk</option>
                <option value="Rumah">Rumah</option>
            </select>
        </form>
    <?php
    }
    ?>



    <!-- Main Heading Ends -->

    <?php
    if(isset($_POST['Produk']))
    {
        if($_POST['Produk'] == "Rumah") {
            ?>
            <!-- Registration Section Starts -->
            <section class="registration-area">
                <div class="row">
                    <div class="col-sm-8">
                        <!-- Registration Block Starts -->
                        <div class="panel panel-smart">
                            <div class="panel-heading">
                                <h3 class="panel-title">Informasi Rumah</h3>
                            </div>
                            <div class="panel-body">
                                <!-- Registration Form Starts -->
                                <form class="form-horizontal" role="form" method="POST"
                                      action="<?php echo base_url("index.php/user/rumah") ?>" enctype="multipart/form-data">
                                    <!-- Personal Information Starts -->
                                    <div class="form-group">
                                        <label for="inputFname" class="col-sm-3 control-label">Judul : </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="judul"
                                                   placeholder="Contoh : Hunian Cibubur">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputFname" class="col-sm-3 control-label">Luas Tanah (M2) :</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" name="luas_tanah"
                                                   placeholder="Luas Tanah">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputLname" class="col-sm-3 control-label">Lantai :</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" name="lantai"
                                                   placeholder="Jumlah Lantai">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail" class="col-sm-3 control-label">Kamar Mandi :</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" name="kamar_mandi"
                                                   placeholder="Jumlah kamar mandi">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPhone" class="col-sm-3 control-label">Luas Bangunan (M2) :</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" name="luas_bangunan" placeholder="Luas Bangunan">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputFax" class="col-sm-3 control-label">Kamar :</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" name="kamar" placeholder="Jumlah Kamar">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputFax" class="col-sm-3 control-label">Sertifikasi :</label>
                                        <div class="col-sm-9">
                                            <select name="sertifikasi" class="form-control" required>
                                                <option value="">Pilih Sertifikasi</option>
                                                <option value="Sertifikat Hak Milik (SHM)">Sertifikat Hak Milik (SHM)</option>
                                                <option value="Sertifikat Hak Guna Bangunan (SHGB)">Sertifikat Hak Guna Bangunan (SHGB)</option>
                                                <option value="Sertifikat Hak Satuan Rumah Susun (SHSRS)">Sertifikat Hak Satuan Rumah Susun (SHSRS)</option>
                                                <option value="Girik">Girik</option>
                                                <option value="Akta Jual Beli (AJB)">Akta Jual Beli (AJB)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputFax" class="col-sm-3 control-label">Kota :</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="kota" placeholder="Kota">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputFax" class="col-sm-3 control-label">Dokumen :</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="dokumen">
                                                <option value="">Pilih</option>
                                                <option value="Lengkap">Lengkap</option>
                                                <option value="Tidak Lengkap">Tidak lengkap</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputFax" class="col-sm-3 control-label">Alamat / Lokasi :</label>
                                        <div class="col-sm-9">
                                            <textarea type="text" class="form-control" name="alamat" placeholder="Alamat Lengkap Rumah"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputFax" class="col-sm-3 control-label">Deskripsi Lainnya</label>
                                        <div class="col-sm-9">
                                            <textarea type="text" class="form-control" name="deskripsi" placeholder="Deskripsi rumah dengan lengkap, contoh : rumah dekat dengan tol, Listrik 1300 watt"></textarea>
                                            <br>* Semakin lengkap deskripsi yang anda berikan akan meningkatkan persentase pengesahan disetujui
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputFax" class="col-sm-3 control-label">Gambar</label>
                                        <div class="col-sm-9">
                                            <input type="file" name="foto1" class="form-control" required>
                                            <input type="file" name="foto2" class="form-control" required>
                                            <input type="file" name="foto3" class="form-control" required>
                                            <input type="file" name="foto4" class="form-control" required><br>
                                            * Silahkan Upload 4 foto, format hanya dalam jpg/png ukuran file maksimal 5mb
                                        </div>
                                    </div>
                                    <!-- Personal Information Ends -->
                                    <h3 class="panel-heading inner">
                                        Informasi Cicilan
                                    </h3>
                                    <!-- Delivery Information Starts -->
                                    <div class="form-group">
                                        <label for="inputCompany" class="col-sm-3 control-label">Harga :</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="harga"
                                                   placeholder="Harga Total Keseluruhan">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputCompanyId" class="col-sm-3 control-label">Total Jangka Waktu Cicilan (Bulan) :</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="total_cicilan"
                                                   placeholder="Total bulan">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress1" class="col-sm-3 control-label">Cicilan Berjalan ke :</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="cicilan_ke"
                                                   placeholder="Cicilan Berjalan (Bulan)">
                                            <br>
                                            * Isi bulan dengan 0 bila rumah adalah baru
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress2" class="col-sm-3 control-label">Cicilan Perbulan :</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="cicilan_perbulan"
                                                   placeholder="Cicilan Perbulan">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-9">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" required> Saya Menyetujui Syarat dan Ketentuan
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-9">
                                            <button type="submit" name="submit" class="btn btn-black">
                                                Simpan
                                            </button>
                                        </div>
                                    </div>
                                    <!-- Password Area Ends -->
                                </form>
                                <!-- Registration Form Starts -->
                            </div>
                        </div>
                        <!-- Registration Block Ends -->
                    </div>
                    <div class="col-sm-4">
                        <!-- Conditions Panel Starts -->
                        <div class="panel panel-smart">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    Syarat dan Ketentuan
                                </h3>
                            </div>
                            <div class="panel-body">
                                <p align="justify">
                                    Operkredit sebagai sarana penunjang bisnis berusaha menyediakan berbagai fitur dan layanan untuk menjamin keamanan dan kenyamanan para penggunanya.
                                </p>
                                <p>
                                    Informasi Pengguna :
                                </p>
                                <ol>
                                    <li>Saya bersedia memberikan informasi yang di butuhkan dengan baik dan benar.</li>
                                    <li>Semua informasi yang di berikan secara lengkap dan jujur.</li>
                                    <li>Pengguna tidak diperbolehkan menggunakan Operkredit untuk melanggar peraturan yang ditetapkan oleh hukum di Indonesia.</li>
                                    <li>Semua informasi yang diberikan akan di proses oleh tim pengesahan sebelum benar benar akan di terbitkan sebagai barang siap operkredit.</li>
                                    <li>Barang yang akan di operkredit adalah sebagai hak pengguna bukan milik atau hak orang lain.</li>
                                    <li>Proses verifikasi berlangsung maksimal 2 x 24 jam</li>
                                </ol>

                            </div>
                        </div>
                        <!-- Conditions Panel Ends -->
                    </div>
                </div>
            </section>
            <!-- Registration Section Ends -->
            <?php
        }
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