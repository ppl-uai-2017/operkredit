<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title>Halaman Pengajuan</title>

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
                    <div id="table-datatables">
                        <div class="row">
                            <div class="col s12 m4 l">
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col s12 m12 l12">
                                        <h5 class="breadcrumbs-title">Pengajuan</h5>
                                        <ol class="breadcrumb">
                                            <li><a href="<?php echo base_url("")?>">Dashboard</a></li>
                                            <li class="active">Pengajuan Barang</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <hr>
                                    <?php
                                    if($data != null) {
                                        foreach ($data as $data) {
                                            $verifikasi = $data['verifikasi'];
                                        }
                                        if ($verifikasi != "Terverifikasi" ) {
                                            echo "<h5 align='center'>Anda Belum dapat mengajukan barang untuk operkredit</h5>";
                                        }
                                    }


                                    if ($verifikasi == "Terverifikasi") {
                                        ?>
                                    <div class="col s12 m4 l">
                                        <form action="" method="POST">
                                            <select name="Produk" onchange="this.form.submit()" required>
                                                <option value="">Pilih Produk</option>
                                                <option value="Rumah">Rumah</option>
                                            </select>
                                        </form>
                                    </div>
                                        <?php
                                    }
                                    ?>
                                    <br><br><br><br>
                                    <?php
                                    if(isset($_POST['Produk']))
                                    {
                                        if($_POST['Produk'] == "Rumah") {
                                            ?>
                            <!-- Registration Section Starts -->
                            <form class="form-horizontal" role="form" method="POST"
                                  action="<?php echo base_url("index.php/user/rumah") ?>" enctype="multipart/form-data">
                                <!-- Personal Information Starts -->

                                <div class="col s12 m6">
                                <div id="profile-page-wall-post" class="card">
                                <div class="card-profile-title">
                                    <div class="col s12 m8">
                                    <!-- Registration Block Starts -->
                                    <div class="panel panel-smart">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Informasi Rumah</h3>
                                        </div>

                                        <div class="panel-body">
                                            <!-- Registration Form Starts -->
                                           <div class="form-group">
                                                    <label for="inputFname" class="col-sm-3 control-label">Judul : </label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="judul"
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
                                            <!-- Registration Form Starts -->
                                        </div>
                                    </div><br><br>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col s12 m6">
                            <div id="profile-page-wall-post" class="card">
                                <div class="card-profile-title">
                                    <div class="col s12 m8">
                                        <!-- Registration Block Starts -->
                                        <div class="panel panel-smart">
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
                                                            <input type="number" class="form-control" name="cicilan_ke"
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
                                                        <div class="col s12 m6">
                                                            <p>
                                                                <input type="checkbox" name="syarat" class="filled-in" id="filled-in-box" required>
                                                                <label for="filled-in-box">Saya Menyetujui syarat dan ketentuan</label>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-offset-3 col-sm-9">
                                                            <input type="submit" name="submit" class="btn btn-black">

                                                        </div>
                                                    </div>
                                                    <br><br><br>
                                                    <!-- Password Area Ends -->

                                                <!-- Registration Form Starts -->
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>

                        <div class="col s12 m4">
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

                                           <br><br><br><br> <br><br><br><br>
                                            <?php
                                        }
                                    }
                                    ?>
                                </div>


                            </div>
                            <br><br><br><br><br><br><br><br>
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

