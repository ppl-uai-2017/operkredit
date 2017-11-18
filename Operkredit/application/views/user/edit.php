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
                        <form class="form-horizontal" method="POST" action="<?php echo base_url("index.php/user/edit/".$data['idrumah'])?>" enctype="multipart/form-data">

                        <div id="profile-page-content" class="row">
                            <!-- profile-page-sidebar-->
                            <div id="profile-page-sidebar" class="col s12 m4">
                                <!-- Profile About Details  -->
                                <ul id="profile-page-about-details" class="collection z-depth-1">
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5 grey-text darken-1">Nama Rumah</div>
                                            <div class="col s7 grey-text text-darken-4 right-align"><input type="text" class="form-control" name="judul" value="<?php echo $data['judul'] ?>"
                                                                                                           placeholder="Contoh : Hunian Cibubur"></div>
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5 grey-text darken-1">Luas Tanah (m2)</div>
                                            <div class="col s7 grey-text text-darken-4 right-align"><input type="number" class="form-control" name="luas_tanah" value="<?php echo $data['luas_tanah'] ?>"
                                                                                                           placeholder="Luas Tanah"></div>
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5 grey-text darken-1">Jumlah Lantai</div>
                                            <div class="col s7 grey-text text-darken-4 right-align"><input type="number" class="form-control" name="lantai" value="<?php echo $data['lantai'] ?>"
                                                                                                           placeholder="Jumlah Lantai"></div>
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5 grey-text darken-1">Kamar Mandi</div>
                                            <div class="col s7 grey-text text-darken-4 right-align"><input type="number" class="form-control" name="kamar_mandi" value="<?php echo $data['kamar_mandi'] ?>"
                                                                                                           placeholder="Jumlah kamar mandi"></div>
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5 grey-text darken-1">Luas Bangunan (m2)</div>
                                            <div class="col s7 grey-text text-darken-4 right-align"><input type="number" class="form-control" name="luas_bangunan" value="<?php echo $data['luas_bangunan'] ?>" placeholder="Luas Bangunan"></div>
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5 grey-text darken-1">Kamar</div>
                                            <div class="col s7 grey-text text-darken-4 right-align"><input type="number" class="form-control" name="kamar" placeholder="Jumlah Kamar" value="<?php echo $data['kamar'] ?>" ></div>
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5 grey-text darken-1">Sertifikasi</div>
                                            <div class="col s7 grey-text text-darken-4 right-align"><select name="sertifikasi" class="form-control" required>
                                                    <option value="">Pilih Sertifikasi</option>
                                                    <option value="Sertifikat Hak Milik (SHM)">Sertifikat Hak Milik (SHM)</option>
                                                    <option value="Sertifikat Hak Guna Bangunan (SHGB)">Sertifikat Hak Guna Bangunan (SHGB)</option>
                                                    <option value="Sertifikat Hak Satuan Rumah Susun (SHSRS)">Sertifikat Hak Satuan Rumah Susun (SHSRS)</option>
                                                    <option value="Girik">Girik</option>
                                                    <option value="Akta Jual Beli (AJB)">Akta Jual Beli (AJB)</option>
                                                </select></div>
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5 grey-text darken-1">Kota</div>
                                            <div class="col s7 grey-text text-darken-4 right-align"><input type="text" class="form-control" name="kota" placeholder="Kota" value="<?php echo $data['kota'] ?>"></div>
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5 grey-text darken-1">Kelengkapan Dokumen</div>
                                            <div class="col s7 grey-text text-darken-4 right-align"><select class="form-control" name="dokumen" required>
                                                    <option value="">Pilih</option>
                                                    <option value="Lengkap">Lengkap</option>
                                                    <option value="Tidak Lengkap">Tidak lengkap</option>
                                                </select></div>
                                        </div>
                                    </li>

                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5 grey-text darken-1">Alamat</div>
                                            <div class="col s7 grey-text text-darken-4 right-align"><textarea type="text" class="form-control" name="alamat" placeholder="Alamat Lengkap Rumah" value="<?php echo $data['alamat'] ?>" ><?php echo $data['alamat'] ?></textarea></div>
                                        </div>
                                    </li>

                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5 grey-text darken-1">Deskripsi</div>
                                            <div class="col s7 grey-text text-darken-4 right-align"><textarea type="text" class="form-control" name="deskripsi" value="<?php echo $data['deskripsi'] ?>" placeholder="Deskripsi rumah dengan lengkap, contoh : rumah dekat dengan tol, Listrik 1300 watt"><?php echo $data['deskripsi'] ?></textarea></div>
                                        </div>
                                    </li>

                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5 grey-text darken-1">Harga Beli</div>
                                            <div class="col s7 grey-text text-darken-4 right-align"><input type="text" class="form-control" name="harga" value="<?php echo $data['harga'] ?>"
                                                                                                           placeholder="Harga Total Keseluruhan"></div>
                                        </div>
                                    </li>

                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5 grey-text darken-1">Total Waktu Cicilan</div>
                                            <div class="col s7 grey-text text-darken-4 right-align"><input type="text" class="form-control" name="total_cicilan" value="<?php echo $data['total_cicilan'] ?>"
                                                                                                           placeholder="Total bulan"></div>
                                        </div>
                                    </li>

                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5 grey-text darken-1">Cicilan Berjalan ke-</div>
                                            <div class="col s7 grey-text text-darken-4 right-align"><input type="text" class="form-control" name="cicilan_ke" value="<?php echo $data['cicilan_ke'] ?>"
                                                                                                           placeholder="Cicilan Berjalan (Bulan)"></div>
                                        </div>
                                    </li>

                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5 grey-text darken-1">Cicilan Perbulan</div>
                                            <div class="col s7 grey-text text-darken-4 right-align"><input type="text" class="form-control" name="cicilan_perbulan" value="<?php echo $data['cicilan_perbulan'] ?>"
                                                                                                           placeholder="Cicilan Perbulan"></div>
                                        </div>
                                    </li>
                                </ul>
                                <!--/ Profile About Details  -->
                            </div>
                            <!-- profile-page-sidebar-->

                            <!-- profile-page-wall -->
                            <div id="profile-page-wall" class="col s12 m8">
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
                                                                <td><a href="<?php echo base_url("./rumah/".$data['foto1'])?>">
                                                                        <img src="<?php echo base_url("./rumah/".$data['foto1'])?>" width="300" class="img-responsive thumbnail">
                                                                    </a>
                                                                    <input type="file" name="foto1" class="form-control" required>
                                                                    <a href="<?php echo base_url("./rumah/".$data['foto2'])?>">
                                                                        <img src="<?php echo base_url("./rumah/".$data['foto2'])?>" width="300" class="img-responsive thumbnail">
                                                                    </a>
                                                                    <input type="file" name="foto2" class="form-control" required>
                                                                    <a href="<?php echo base_url("./rumah/".$data['foto3'])?>">
                                                                        <img src="<?php echo base_url("./rumah/".$data['foto3'])?>" width="300" class="img-responsive thumbnail">
                                                                    </a>
                                                                    <input type="file" name="foto3" class="form-control" required>
                                                                    <a href="<?php echo base_url("./rumah/".$data['foto4'])?>">
                                                                        <img src="<?php echo base_url("./rumah/".$data['foto4'])?>" width="300" class="img-responsive thumbnail">
                                                                    </a>
                                                                    <input type="file" name="foto4" class="form-control" required>
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


