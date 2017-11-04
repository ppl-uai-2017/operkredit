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

    <title>Register Operkredit</title>

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
    <!-- Nested Container Starts -->
    <div class="container">

    </div>
    <!-- Nested Container Ends -->
</header>
<!-- Header Section Ends -->

<!-- Main Container Starts -->
<div id="main-container" class="container">
    <!-- Breadcrumb Starts -->
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url("index.php/home")?>">Home</a></li>
        <li class="active">Register</li>
    </ol>
    <!-- Breadcrumb Ends -->
    <!-- Main Heading Starts -->
    <h2 class="main-heading text-center">
        Registrasi <br />
        <span>Buat Akun Baru</span>
    </h2>
    <!-- Main Heading Ends -->
    <!-- Registration Section Starts -->
    <section class="registration-area">
        <div class="row">
            <div class="col-sm-6">
                <!-- Registration Block Starts -->
                <div class="panel panel-smart">
                    <div class="panel-heading">
                        <h3 class="panel-title">Informasi Pribadi</h3>
                        <?php
                        if(isset($message))
                        {
                            echo $message;
                        }
                        ?>
                    </div>
                    <div class="panel-body">
                        <!-- Registration Form Starts -->
                        <form class="form-horizontal" role="form" method="POST" action="<?php echo base_url("index.php/register/akun_baru")?>" enctype="multipart/form-data">
                            <!-- Personal Information Starts -->
                            <div class="form-group">
                                <label for="inputFname" class="col-sm-3 control-label">Username :</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="username" placeholder="Username">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputFname" class="col-sm-3 control-label">Nama Lengkap :</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputLname" class="col-sm-3 control-label">Tempat Lahir :</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-3 control-label">Email :</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" name="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPhone" class="col-sm-3 control-label">Tanggal Lahir :</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" name="tanggal_lahir">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputFax" class="col-sm-3 control-label">Jenis Kelamin :</label>
                                <div class="col-sm-9">
                                    <select name="jenis_kelamin" class="form-control">
                                        <option value="">Pilih</option>
                                        <option value="Laki Laki">Laki Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputFax" class="col-sm-3 control-label">Nomor HP :</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="no_hp" placeholder="Nomor HP">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputFax" class="col-sm-3 control-label">Status Pernikahan :</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="status_pernikahan">
                                        <option value="">Pilih</option>
                                        <option value="Kawin">Kawin</option>
                                        <option value="Tinggal Cerai">Tinggal Cerai</option>
                                        <option value="Tinggal Mati">Tinggal Mati</option>
                                        <option value="Lajang">Lajang</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputFax" class="col-sm-3 control-label">Alamat :</label>
                                <div class="col-sm-9">
                                    <textarea type="text" class="form-control" name="alamat" placeholder="Alamat"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputFax" class="col-sm-3 control-label">Kota :</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="kota" placeholder="Kota">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputFax" class="col-sm-3 control-label">Kode Pos :</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="kode_pos" placeholder="Kode Pos">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputFax" class="col-sm-3 control-label">Provinsi :</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="provinsi" placeholder="Provinsi">
                                </div>
                            </div>
                            <!-- Personal Information Ends -->
                            <h3 class="panel-heading inner">
                                Bukti Identitas
                            </h3>
                            <!-- Delivery Information Starts -->
                            <div class="form-group">
                                <label for="inputCompany" class="col-sm-3 control-label">Nomor KTP :</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="no_ktp" placeholder="Nomor KTP">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputCompany" class="col-sm-3 control-label">Foto :</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" name="foto">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputCompany" class="col-sm-3 control-label">File KTP :</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" name="file_ktp">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputCompanyId" class="col-sm-3 control-label">Pekerjaan :</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="pekerjaan" placeholder="Pekerjaan">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress1" class="col-sm-3 control-label">Gaji (Rata - rata) :</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="gaji" placeholder="Gaji Rata Rata">
                                </div>
                            </div>

                            <!-- Delivery Information Ends -->
                            <h3 class="panel-heading inner">
                                Password
                            </h3>
                            <!-- Password Area Starts -->
                            <div class="form-group">
                                <label for="inputPassword" class="col-sm-3 control-label">Password :</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputRePassword" class="col-sm-3 control-label">Konfirmasi Password :</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" name="konfirmasi" placeholder="Konfirmasi Password">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" required> Saya setuju dengan syarat dan ketentuan
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <button type="submit" name="submit" class="btn btn-black">
                                        Register
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
            <div class="col-sm-6">

                <!-- Conditions Panel Starts -->
                <div class="panel panel-smart">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            Conditions
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
</div>
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