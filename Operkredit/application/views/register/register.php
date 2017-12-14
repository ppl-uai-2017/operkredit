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
<!-- Main Container Starts -->
<div id="main-container" class="container">
    <!-- Main Heading Starts -->
    <h2 class="main-heading text-center">
        <span>Buat Akun Baru</span>
    </h2>
    <hr>
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
                        <font color="red">*</font>  Semua kolom wajib di isi
                    </div>
                    <div class="panel-body">
                        <!-- Registration Form Starts -->
                        <form class="form-horizontal" role="form" method="POST" action="<?php echo base_url("index.php/register/akun_baru")?>" enctype="multipart/form-data">
                            <!-- Personal Information Starts -->
                            <div class="form-group">
                                <label for="inputFname" class="col-sm-3 control-label"><font color="red">*</font> Username :</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="username" placeholder="Username" required
                                           oninvalid="this.setCustomValidity('Username harus diisi')"
                                           oninput="setCustomValidity('')"  />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputFname" class="col-sm-3 control-label"><font color="red">*</font> Nama Lengkap :</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap" required
                                           oninvalid="this.setCustomValidity('Nama lengkap Harus Diisi')"
                                           oninput="setCustomValidity('')"  />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputLname" class="col-sm-3 control-label"><font color="red">*</font> Tempat Lahir :</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir" required
                                           oninvalid="this.setCustomValidity('Lengkapi tempat lahir')"
                                           oninput="setCustomValidity('')"  />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-3 control-label"><font color="red">*</font> Email :</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" name="email" placeholder="Contoh : abc@operkredit.web.id" required placeholder="Lengkapi email"
                                           oninvalid="this.setCustomValidity('Lengkapi email')"
                                           oninput="setCustomValidity('')"  />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPhone" class="col-sm-3 control-label"><font color="red">*</font> Tanggal Lahir :</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control" name="tanggal_lahir" required
                                           oninvalid="this.setCustomValidity('Isi tanggal lahir')"
                                           oninput="setCustomValidity('')"  />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputFax" class="col-sm-3 control-label"><font color="red">*</font> Jenis Kelamin :</label>
                                <div class="col-sm-9">
                                    <select name="jenis_kelamin" class="form-control" required
                                            oninvalid="this.setCustomValidity('Tidak boleh kosong')"
                                            oninput="setCustomValidity('')"  />
                                        <option value="">Pilih</option>
                                        <option value="Laki Laki">Laki Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputFax" class="col-sm-3 control-label"><font color="red">*</font> Nomor HP :</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="no_hp" placeholder="Contoh : 081234567890" required
                                           oninvalid="this.setCustomValidity('Nomor HP Tidak boleh kosong')"
                                           oninput="setCustomValidity('')" maxlength="13" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputFax" class="col-sm-3 control-label"><font color="red">*</font> Status Pernikahan :</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="status_pernikahan" required oninvalid="this.setCustomValidity('Pilih Status Pernikahan')"
                                            oninput="setCustomValidity('')">
                                        <option value="">Pilih</option>
                                        <option value="Kawin">Kawin</option>
                                        <option value="Tinggal Cerai">Tinggal Cerai</option>
                                        <option value="Tinggal Mati">Tinggal Mati</option>
                                        <option value="Lajang">Lajang</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputFax" class="col-sm-3 control-label"><font color="red">*</font> Alamat :</label>
                                <div class="col-sm-9">
                                    <textarea type="text" class="form-control" name="alamat" required placeholder="Alamat lengkap sesuai KTP" oninvalid="this.setCustomValidity('Lengkapi Alamat')"
                                              oninput="setCustomValidity('')"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputFax" class="col-sm-3 control-label"><font color="red">*</font> Provinsi :</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="provinsi" required oninvalid="this.setCustomValidity('Pilih Provinsi')"
                                            oninput="setCustomValidity('')">
										<option value="">Pilih Provinsi</option>
										
									<?php
									if($provinsi != null)
                                    {
										foreach ($provinsi as $provinsi) {?>
										<option value = "<?php echo $provinsi['name'] ?>"><?php echo $provinsi['name'] ?></option>
										<?php } 
									}
									?>
									</select>
                                </div>
                            </div>
							
							<div class="form-group">
                                <label for="inputFax" class="col-sm-3 control-label"><font color="red">*</font> Kota :</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="kota" required oninvalid="this.setCustomValidity('Pilih Kota')"
                                            oninput="setCustomValidity('')">
										<option value="">Pilih Kota</option>
										
									<?php
									if($kota != null)
                                    {
										foreach ($kota as $kota) {?>
										<option value = "<?php echo $kota['name'] ?>"><?php echo $kota['name'] ?></option>
										<?php } 
									}
									?>
									</select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputFax" class="col-sm-3 control-label"><font color="red">*</font> Kode Pos :</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="kode_pos" required placeholder="Kode Pos sesuai KTP" oninvalid="this.setCustomValidity('Lengkapi Kodepos')"
                                           oninput="setCustomValidity('')">
                                </div>
                            </div>

                            
                            <!-- Personal Information Ends -->
                            <h3 class="panel-heading inner">
                                Bukti Identitas
                            </h3>
                            <!-- Delivery Information Starts -->
                            <div class="form-group">
                                <label for="inputCompany" class="col-sm-3 control-label"><font color="red">*</font> Nomor KTP :</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="no_ktp" required placeholder="Nomor KTP" oninvalid="this.setCustomValidity('Lengkapi Nomor KTP')"
                                           oninput="setCustomValidity('')">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputCompany" class="col-sm-3 control-label"><font color="red">*</font> Foto :</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control"  name="foto" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputCompany" class="col-sm-3 control-label"><font color="red">*</font> File KTP :</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" name="file_ktp" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputCompanyId" class="col-sm-3 control-label"><font color="red">*</font> Pekerjaan :</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="pekerjaan" required oninvalid="this.setCustomValidity('Pilih Status Pernikahan')"
                                            oninput="setCustomValidity('')">
                                        <option value="">Pilih</option>
                                        <option value="Pegawai Negeri Sipil">Pegawai Negeri Sipil (PNS)</option>
                                        <option value="Pegawai Swasta">Pegawai Swasta</option>
                                        <option value="Mahasiswa">Mahasiswa</option>
                                        <option value="Wirausaha">Wirausaha</option>
										<option value="Pengajar">Pengajar</option>
										<option value="Lain-lain">Lain-lain</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress1" class="col-sm-3 control-label"><font color="red">*</font> Gaji (Rata - rata) :</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="gaji" required placeholder="Gaji Rata Rata, contoh 4000000 tanpa tanda . dan ," oninvalid="this.setCustomValidity('Lengkapi Gaji')"
                                           oninput="setCustomValidity('')">
                                </div>
                            </div>

                            <!-- Delivery Information Ends -->
                            <h3 class="panel-heading inner">
                                Password
                            </h3>
                            <!-- Password Area Starts -->
                            <div class="form-group">
                                <label for="inputPassword" class="col-sm-3 control-label"><font color="red">*</font> Password :</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" name="password" required placeholder="Password" oninvalid="this.setCustomValidity('Silahkan Buat Password')"
                                           oninput="setCustomValidity('')">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputRePassword" class="col-sm-3 control-label"><font color="red">*</font> Konfirmasi Password :</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" name="konfirmasi" required placeholder="Konfirmasi Password" oninvalid="this.setCustomValidity('Lengkapi Konfirmasi Password')"
                                           oninput="setCustomValidity('')">
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
                                    <button type="submit" name="submit" class="btn btn-info">
                                        Register
                                    </button>
                                    <button  class="btn btn-default" onclick="location.href='<?php echo base_url("")?>';">
                                        Batal
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
</div>
<!-- Main Container Ends -->
<!-- Footer Section Starts -->

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