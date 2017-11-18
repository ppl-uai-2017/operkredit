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
                            <h5 class="breadcrumbs-title">Transaksi</h5>
                            <ol class="breadcrumb">
                                <li><a href="<?php echo base_url("index.php/user/history")?>">Transaksi</a></li>
                                <li class="active">Detail Transaksi</li>
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
                        <div id="profile-page-content" class="row">
                            <!-- profile-page-sidebar-->
                            <div id="profile-page-sidebar" class="col s12 m4">
                                <div class="card light-blue">
                                    <div class="card-content white-text">
                                        <span class="card-title">Informasi Produk</span>
                                    </div>
                                </div>
                                <!-- Profile About Details  -->
                                <ul id="profile-page-about-details" class="collection z-depth-1">
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5 grey-text darken-1">Nama Rumah</div>
                                            <div class="col s7 grey-text text-darken-4 right-align"><?php echo $data['judul'] ?></div>
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5 grey-text darken-1">Luas Tanah (m2)</div>
                                            <div class="col s7 grey-text text-darken-4 right-align"><?php echo $data['luas_tanah'] ?></div>
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5 grey-text darken-1">Jumlah Lantai</div>
                                            <div class="col s7 grey-text text-darken-4 right-align"><?php echo $data['lantai'] ?></div>
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5 grey-text darken-1">Kamar Mandi</div>
                                            <div class="col s7 grey-text text-darken-4 right-align"><?php echo $data['kamar_mandi'] ?></div>
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5 grey-text darken-1">Luas Bangunan (m2)</div>
                                            <div class="col s7 grey-text text-darken-4 right-align"><?php echo $data['luas_bangunan'] ?></div>
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5 grey-text darken-1">Kamar</div>
                                            <div class="col s7 grey-text text-darken-4 right-align"><?php echo $data['kamar'] ?></div>
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5 grey-text darken-1">Sertifikasi</div>
                                            <div class="col s7 grey-text text-darken-4 right-align"><?php echo $data['sertifikasi'] ?></div>
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5 grey-text darken-1">Kota</div>
                                            <div class="col s7 grey-text text-darken-4 right-align"><?php echo $data['kota'] ?></div>
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5 grey-text darken-1">Kelengkapan Dokumen</div>
                                            <div class="col s7 grey-text text-darken-4 right-align"><?php echo $data['dokumen'] ?></div>
                                        </div>
                                    </li>

                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5 grey-text darken-1">Alamat</div>
                                            <div class="col s7 grey-text text-darken-4 right-align"><?php echo $data['alamat'] ?></div>
                                        </div>
                                    </li>

                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5 grey-text darken-1">Deskripsi</div>
                                            <div class="col s7 grey-text text-darken-4 right-align"><?php echo $data['deskripsi'] ?></div>
                                        </div>
                                    </li>

                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5 grey-text darken-1">Harga Beli</div>
                                            <div class="col s7 grey-text text-darken-4 right-align"><?php echo "Rp ".number_format($data['harga'],2,',','.')?></div>
                                        </div>
                                    </li>

                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5 grey-text darken-1">Total Waktu Cicilan</div>
                                            <div class="col s7 grey-text text-darken-4 right-align"><?php echo $data['total_cicilan']." Bulan" ?></div>
                                        </div>
                                    </li>

                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5 grey-text darken-1">Cicilan Berjalan ke-</div>
                                            <div class="col s7 grey-text text-darken-4 right-align"><?php echo $data['cicilan_ke']." Bulan"?></div>
                                        </div>
                                    </li>

                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5 grey-text darken-1">Cicilan Perbulan</div>
                                            <div class="col s7 grey-text text-darken-4 right-align"><?php echo "Rp ".number_format($data['harga']/$data['total_cicilan'],2,',','.')?></div>
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
                                                                    <a href="<?php echo base_url("./rumah/".$data['foto2'])?>">
                                                                        <img src="<?php echo base_url("./rumah/".$data['foto2'])?>" width="300" class="img-responsive thumbnail">
                                                                    </a>
                                                                    <a href="<?php echo base_url("./rumah/".$data['foto3'])?>">
                                                                        <img src="<?php echo base_url("./rumah/".$data['foto3'])?>" width="300" class="img-responsive thumbnail">
                                                                    </a>
                                                                    <a href="<?php echo base_url("./rumah/".$data['foto4'])?>">
                                                                        <img src="<?php echo base_url("./rumah/".$data['foto4'])?>" width="300" class="img-responsive thumbnail">
                                                                    </a></td>
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

                        <div id="profile-page-content" class="row">
                            <!-- profile-page-sidebar-->
                            <div id="profile-page-sidebar" class="col s12 m4">
                                <!-- Profile About  -->
                                <div class="card light-green">
                                    <div class="card-content white-text">
                                        <span class="card-title">Informasi Pembayaran</span>
                                    </div>
                                </div>
                                <!-- Profile About  -->
                                <!-- Profile About Details  -->
                                <ul id="profile-page-about-details" class="collection z-depth-1">
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5 grey-text darken-1">Total Kewajiban</div>
                                            <div class="col s7 grey-text text-darken-4 right-align"><?php echo "Rp ".number_format($data['total_bayar'],2,',','.') ?></div>
                                        </div>
                                    </li>

                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5 grey-text darken-1">Metode Pembayaran</div>
                                            <div class="col s7 grey-text text-darken-4 right-align"><?php echo $data['nama_metode_pembayaran']." - ". $data['nomor_rekening'] ?></div>
                                        </div>
                                    </li>

                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5 grey-text darken-1">Total Jangka Waktu Cicilan</div>
                                            <div class="col s7 grey-text text-darken-4 right-align"><?php echo $data['total_cicilan']." Bulan" ?></div>
                                        </div>
                                    </li>

                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5 grey-text darken-1">Cicilan Berjalan</div>
                                            <div class="col s7 grey-text text-darken-4 right-align"><?php echo $data['cicilan_ke']." Bulan"?></div>
                                        </div>
                                    </li>

                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5 grey-text darken-1">Cicilan Perbulan</div>
                                            <div class="col s7 grey-text text-darken-4 right-align"><?php echo "Rp ".number_format($data['cicilan'],2,',','.') ?></div>
                                        </div>
                                    </li>

                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5 grey-text darken-1">Status Pembayaran</div>
                                            <div class="col s7 grey-text text-darken-4 right-align"><?php echo $data['status_pembayaran']?></div>
                                        </div>
                                    </li>

                                </ul>
                                <!--/ Profile About Details  -->
                            </div>
                            <!-- profile-page-sidebar-->
                        </div>
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