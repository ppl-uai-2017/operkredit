<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <title>Operkredit</title>
    <?php
    $this->load->view("./css.php");
    ?>
</head>

<body>
<?php
$this->load->view("./navbar.php");
?>

<br><br><br><br>
<!-- START MAIN -->
<div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">

        <!-- START CONTENT -->
        <section id="content">
            <!--start container-->
            <div class="container">
                <div class="container">
                    <div class="row">
                        <div class="col s12 m12 l12">
                            <h5 class="breadcrumbs-title">Detail</h5>
                            <ol class="breadcrumb">
                                <li><a href="<?php echo base_url("index.php/user/produk")?>">Produk Saya</a></li>
                                <li class="active">Edit Produk</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div id="profile-page" class="section">
                    <!-- profile-page-header -->
                    <?php
                    foreach ($data as $data) {
                        ?>
                        <!-- profile-page-content -->
                        <form class="form-horizontal" method="POST" action="<?php echo base_url("index.php/user/edit/".$data['no_stnkb'])?>" enctype="multipart/form-data">

                        <div id="profile-page-content" class="row">
                            <!-- profile-page-sidebar-->
                            <div id="profile-page-sidebar" class="col s12 m6">
                                <!-- Profile About Details  -->
                                <ul id="profile-page-about-details" class="collection z-depth-1">
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5 grey-text darken-1">Nama Produk</div>
                                            <div class="col s7 grey-text text-darken-4 right-align"><input type="text" class="form-control" name="nama" value="<?php echo $data['nama'] ?>"
                                                                                                           ></div>
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5 grey-text darken-1">No BPKB</div>
                                            <div class="col s7 grey-text text-darken-4 right-align"><input type="text" class="form-control" name="bpkb" value="<?php echo $data['no_bpkb'] ?>"></div>
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5 grey-text darken-1">Merek</div>
                                            <div class="col s7 grey-text text-darken-4 right-align"><input type="text" class="form-control" name="merek" value="<?php echo $data['merk'] ?>"
                                                                                                           ></div>
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5 grey-text darken-1">Tipe</div>
                                            <div class="col s7 grey-text text-darken-4 right-align"><input type="text" class="form-control" name="tipe" value="<?php echo $data['type'] ?>"
                                                                                                           placeholder="Jumlah kamar mandi"></div>
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5 grey-text darken-1">Warna</div>
                                            <div class="col s7 grey-text text-darken-4 right-align"><input type="text" class="form-control" name="warna" value="<?php echo $data['warna'] ?>" placeholder="Luas Bangunan"></div>
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5 grey-text darken-1">Jarak Tempuh</div>
                                            <div class="col s7 grey-text text-darken-4 right-align"><input type="text" class="form-control" name="jarak" value="<?php echo $data['jarak_tempuh'] ?>" ></div>
                                        </div>
                                    </li>

                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5 grey-text darken-1">Isi Silinder</div>
                                            <div class="col s7 grey-text text-darken-4 right-align"><input type="text" class="form-control" name="silinder" value="<?php echo $data['isi_silinder'] ?>"></div>
                                        </div>
                                    </li>


                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5 grey-text darken-1">Tahun</div>
                                            <div class="col s7 grey-text text-darken-4 right-align"><input type="text" class="form-control" name="tahun" value="<?php echo $data['tahun'] ?>"></div>
                                        </div>
                                    </li>

                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5 grey-text darken-1">Kota</div>
                                            <div class="col s7 grey-text text-darken-4 right-align"><input type="text" class="form-control" name="kota" value="<?php echo $data['kota'] ?>"
                                                                                                           ></div>
                                        </div>
                                    </li>

                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5 grey-text darken-1">Provinsi</div>
                                            <div class="col s7 grey-text text-darken-4 right-align"><input type="text" class="form-control" name="provinsi" value="<?php echo $data['provinsi'] ?>"
                                                                                                           ></div>
                                        </div>
                                    </li>

                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5 grey-text darken-1">Deskripsi</div>
                                            <div class="col s7 grey-text text-darken-4 right-align"><textarea type="text" class="form-control" name="deskripsi" value="<?php echo $data['deskripsi'] ?>"><?php echo $data['deskripsi'] ?></textarea></div>
                                        </div>
                                    </li>

                                </ul>
                                <!--/ Profile About Details  -->
                            </div>
                            <!-- profile-page-sidebar-->

                            <!-- profile-page-wall -->
                            <div id="profile-page-wall" class="col s12 m6">
                                <!-- profile-page-wall-posts -->
                                <div id="profile-page-wall-posts"class="row">
                                    <div class="col s12">
                                        <!-- medium -->
                                        <div id="profile-page-wall-post" class="card">
                                            <div class="card-profile-title">
                                                <div class="row">
                                                    <div class="col s1">
                                                        <img src="images/avatar.jpg" alt="" >
                                                    </div>
                                                    <div class="col s10">
                                                        <h4 align="center">Informasi Lainnya</h4>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col s12">
                                                        <table class="table">
                                                            <tr>
                                                                <td>Foto Produk</td>
                                                                <td><a href="<?php echo base_url("./motor/".$data['foto1'])?>">
                                                                        <img src="<?php echo base_url("./motor/".$data['foto1'])?>" width="300" class="img-responsive thumbnail">
                                                                    </a>
                                                                    <input type="file" name="foto1" class="form-control" required>
                                                                    <a href="<?php echo base_url("./motor/".$data['foto2'])?>">
                                                                        <img src="<?php echo base_url("./motor/".$data['foto2'])?>" width="300" class="img-responsive thumbnail">
                                                                    </a>
                                                                    <input type="file" name="foto2" class="form-control" required>
                                                                    <a href="<?php echo base_url("./motor/".$data['foto3'])?>">
                                                                        <img src="<?php echo base_url("./motor/".$data['foto3'])?>" width="300" class="img-responsive thumbnail">
                                                                    </a>
                                                                    <input type="file" name="foto3" class="form-control" required>
                                                                    <a href="<?php echo base_url("./motor/".$data['foto4'])?>">
                                                                        <img src="<?php echo base_url("./motor/".$data['foto4'])?>" width="300" class="img-responsive thumbnail">
                                                                    </a>
                                                                    <input type="file" name="foto4" class="form-control" required>
                                                                </td>
                                                            </tr>
															<tr>
															<td>Foto STNK</td>
															<td>
															<a href="<?php echo base_url("./motor/".$data['dokumen_stnkb'])?>">
                                                                        <img src="<?php echo base_url("./motor/".$data['dokumen_stnkb'])?>" width="300" class="img-responsive thumbnail">
                                                                    </a>
                                                                    <input type="file" name="stnkb" class="form-control" required>
                                                                </td>
                                                            </tr>
                                                        </table></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!--/ profile-page-wall-posts -->

                            </div>
                            <!--/ profile-page-wall -->
                        </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9"><br>
                                    <button class="btn btn-black" type="submit" name="submit">
                                        Simpan
                                    </button>

                                    <button class="btn waves-effect waves-light grey" onclick="location.href='<?php echo base_url("index.php/user/produk")?>';">
                                        Batal
                                    </button>
                                </div>
                            </div>
                </form>
                        <?php
                    }
                    ?>
                </div>

            </div>
        </section>

        <!-- END CONTENT -->

    </div>
    <!-- END WRAPPER -->

</div>
<!-- END MAIN -->


<br><br><br>
<!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- START FOOTER -->
<?php
$this->load->view("./footer");
?>
<!-- END FOOTER -->
<!-- ================================================
Scripts
================================================ -->


<?php
$this->load->view("./script.php");
?>
</body>

</html>


