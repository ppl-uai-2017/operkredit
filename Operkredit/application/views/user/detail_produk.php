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
                                <li class="active">Detail Produk</li>
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
                            <div id="profile-page-sidebar" class="col s12 m6">
                                                               <!-- Profile About Details  -->
                                <ul id="profile-page-about-details" class="collection z-depth-1">
                                    <div id="profile-page-wall-post" class="card">
                                        <div class="card-profile-title">
                                            <a href="<?php echo base_url("./motor/".$data['foto1'])?>">
                                                <img src="<?php echo base_url("./motor/".$data['foto1'])?>" width="430"  alt="Image" class="img-responsive thumbnail"/>
                                            </a>
                                            <ul class="list-unstyled list-inline">

                                                <a href="<?php echo base_url("./motor/".$data['foto4'])?>">
                                                    <img src="<?php echo base_url("./motor/".$data['foto4'])?>" width="100" alt="Image"
                                                         class="img-responsive thumbnail"/>
                                                </a>


                                                <a href="<?php echo base_url("./motor/".$data['foto2'])?>">
                                                    <img src="<?php echo base_url("./motor/".$data['foto2'])?>" width="100" alt="Image"
                                                         class="img-responsive thumbnail"/>
                                                </a>

                                                <a href="<?php echo base_url("./motor/".$data['foto3'])?>"">
                                                <img src="<?php echo base_url("./motor/".$data['foto3'])?>" width="100" alt="Image"
                                                     class="img-responsive thumbnail"/>
                                                </a>
                                            </ul>
                                        </div>

                                    </div>
                                </ul>

                                <ul id="profile-page-about-details" class="collection z-depth-1">
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5 grey-text darken-1">Nama Motor</div>
                                            <div class="col s7 grey-text text-darken-4 right-align"><?php echo $data['nama'] ?></div>
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5 grey-text darken-1">Harga</div>
                                            <div class="col s7 grey-text text-darken-4 right-align"><?php echo "Rp ".number_format($data['harga_awal'],2,',','.') ?></div>
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5 grey-text darken-1">Lokasi/Daerah</div>
                                            <div class="col s7 grey-text text-darken-4 right-align"><?php echo $data['kota_motor']?></div>
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5 grey-text darken-1">Cicilan Ke</div>
                                            <div class="col s7 grey-text text-darken-4 right-align"><?php echo $data['cicilan_ke']?></div>
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5 grey-text darken-1">Total Cicilan</div>
                                            <div class="col s7 grey-text text-darken-4 right-align"><?php echo $data['total_cicilan']." Bulan"?></div>
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5 grey-text darken-1">Cicilan</div>
                                            <div class="col s7 grey-text text-darken-4 right-align"><?php echo "Rp ".number_format($data['cicilan_perbulan'],2,',','.') ?></div>
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
                                                <h5 align="center">Informasi Lainnya</h5>
                                                <ul id="profile-page-about-details" class="collection z-depth-1">
                                                    <li class="collection-item">
                                                        <div class="row">
                                                            <div class="col s5 grey-text darken-1">Deskripsi</div>
                                                            <div class="col s7 grey-text text-darken-4 right-align"><?php echo $data['deskripsi'] ?></div>
                                                        </div>
                                                    </li>
                                                    <li class="collection-item">
                                                        <div class="row">
                                                            <div class="col s5 grey-text darken-1">Nama Pengoper</div>
                                                            <div class="col s7 grey-text text-darken-4 right-align"><?php echo $data['nama_lengkap'] ?></div>
                                                        </div>
                                                    </li>
                                                    <li class="collection-item">
                                                        <div class="row">
                                                            <div class="col s5 grey-text darken-1">Merek</div>
                                                            <div class="col s7 grey-text text-darken-4 right-align"><?php echo $data['merk'] ?></div>
                                                        </div>
                                                    </li>
                                                    <li class="collection-item">
                                                        <div class="row">
                                                            <div class="col s5 grey-text darken-1">Tipe</div>
                                                            <div class="col s7 grey-text text-darken-4 right-align"><?php echo $data['type'] ?></div>
                                                        </div>
                                                    </li>
                                                    <li class="collection-item">
                                                        <div class="row">
                                                            <div class="col s5 grey-text darken-1">Warna</div>
                                                            <div class="col s7 grey-text text-darken-4 right-align"><?php echo $data['warna'] ?></div>
                                                        </div>
                                                    </li>

                                                    <li class="collection-item">
                                                        <div class="row">
                                                            <div class="col s5 grey-text darken-1">Jarak Tempuh</div>
                                                            <div class="col s7 grey-text text-darken-4 right-align"><?php echo $data['jarak_tempuh'] ?></div>
                                                        </div>
                                                    </li>

                                                    <li class="collection-item">
                                                        <div class="row">
                                                            <div class="col s5 grey-text darken-1">Isi Silinder</div>
                                                            <div class="col s7 grey-text text-darken-4 right-align"><?php echo $data['isi_silinder'] ?></div>
                                                        </div>
                                                    </li>

                                                    <li class="collection-item">
                                                        <div class="row">
                                                            <div class="col s5 grey-text darken-1">Tahun</div>
                                                            <div class="col s7 grey-text text-darken-4 right-align"><?php echo $data['tahun'] ?></div>
                                                        </div>
                                                    </li>

                                                    <li class="collection-item">
                                                        <div class="row">
                                                            <div class="col s5 grey-text darken-1">Dokumen STNK</div>
                                                            <div class="col s7 grey-text text-darken-4 right-align"><a href="<?php echo base_url("./motor/".$data['dokumen_stnkb']) ?>"><img src="<?php echo base_url("./motor/".$data['dokumen_stnkb']) ?>" width="50"></a></div>
                                                        </div>
                                                    </li>

                                                    <li class="collection-item">
                                                        <div class="row">
                                                            <div class="col s5 grey-text darken-1">Status Produk</div>
                                                            <div class="col s7 grey-text text-darken-4 right-align"><?php echo $data['status'] ?></div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!--/ profile-page-wall-posts -->

                            </div>
                            <!--/ profile-page-wall -->

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


