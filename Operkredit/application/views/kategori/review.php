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
                <div id="profile-page" class="section">
                    <!-- profile-page-header -->
                    <?php
                    foreach ($data as $data) {
                        ?>
                        <!-- profile-page-content -->
                        <div id="profile-page-content" class="row">
                            <!-- profile-page-sidebar-->
                            <div id="profile-page-sidebar" class="col s12 m4">
                                <!-- Profile About  -->
                                <div class="card light-green">
                                    <div class="card-content white-text">
                                        <span class="card-title">Informasi Produk</span>
                                    </div>
                                </div>
                                <!-- Profile About  -->

                                <!-- Profile About Details  -->
                                <ul id="profile-page-about-details" class="collection z-depth-1">
                                    <div id="profile-page-wall-post" class="card">
                                        <div class="card-profile-title">
                                            <a href="<?php echo base_url("./rumah/".$data['foto1'])?>">
                                                <img src="<?php echo base_url("./rumah/".$data['foto3'])?>" width="430"  alt="Image" class="img-responsive thumbnail"/>
                                            </a>
                                            <ul class="list-unstyled list-inline">

                                                <a href="<?php echo base_url("./rumah/".$data['foto2'])?>">
                                                    <img src="<?php echo base_url("./rumah/".$data['foto1'])?>" width="100" alt="Image"
                                                         class="img-responsive thumbnail"/>
                                                </a>


                                                <a href="<?php echo base_url("./rumah/".$data['foto3'])?>">
                                                    <img src="<?php echo base_url("./rumah/".$data['foto2'])?>" width="100" alt="Image"
                                                         class="img-responsive thumbnail"/>
                                                </a>

                                                <a href="<?php echo base_url("./rumah/".$data['foto4'])?>"">
                                                <img src="<?php echo base_url("./rumah/".$data['foto3'])?>" width="100" alt="Image"
                                                     class="img-responsive thumbnail"/>
                                                </a>
                                            </ul>
                                        </div>

                                    </div>
                                </ul>

                                <ul id="profile-page-about-details" class="collection z-depth-1">
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5 grey-text darken-1">Harga</div>
                                            <div class="col s7 grey-text text-darken-4 right-align"><?php echo "Rp ".number_format($data['harga'],2,',','.') ?></div>
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5 grey-text darken-1">Lokasi</div>
                                            <div class="col s7 grey-text text-darken-4 right-align"><?php echo $data['kota']?></div>
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
                            <!-- profile-page-wall -->
                            <div id="profile-page-wall" class="col s12 m8">

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
                                                            <div class="col s7 grey-text text-darken-4 right-align"><?php echo $data['pengoper_kredit'] ?></div>
                                                        </div>
                                                    </li>
                                                    <li class="collection-item">
                                                        <div class="row">
                                                            <div class="col s5 grey-text darken-1">Luas Tanah</div>
                                                            <div class="col s7 grey-text text-darken-4 right-align"><?php echo $data['luas_tanah'] ?></div>
                                                        </div>
                                                    </li>
                                                    <li class="collection-item">
                                                        <div class="row">
                                                            <div class="col s5 grey-text darken-1">Lantai</div>
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
                                                            <div class="col s5 grey-text darken-1">Luas Bangunan (M2)</div>
                                                            <div class="col s7 grey-text text-darken-4 right-align"><?php echo $data['kamar_mandi'] ?></div>
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
                                                            <div class="col s5 grey-text darken-1">Status</div>
                                                            <div class="col s7 grey-text text-darken-4 right-align"><?php echo $data['status'] ?></div>
                                                        </div>
                                                    </li>
                                                </ul>

                                                <h5 align="center">Rincian Biaya</h5>
                                                <ul id="profile-page-about-details" class="collection z-depth-1">
                                                    <li class="collection-item">
                                                        <div class="row">
                                                            <div class="col s5 grey-text darken-1">Harga</div>
                                                            <div class="col s7 grey-text text-darken-4 right-align"><?php echo "Rp ".number_format($data['harga'],2,',','.') ?></div>
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
                                                            <div class="col s7 grey-text text-darken-4 right-align"><?php echo "Rp ".number_format(($data['harga']*0.5 + $data['harga']) / $data['total_cicilan'],2,',','.') ?> /Bulan</div>
                                                        </div>
                                                    </li>
                                                    <li class="collection-item">
                                                        <div class="row">
                                                            <div class="col s5 grey-text darken-1">Biaya Transaksi</div>
                                                            <div class="col s7 grey-text text-darken-4 right-align"><?php echo "Rp ".number_format($data['harga']*0.5,2,',','.') ?> 5%</div>
                                                        </div>
                                                    </li>

                                                    <li class="collection-item">
                                                        <div class="row">
                                                            <div class="col s5 grey-text darken-1">Total Kewajiban</div>
                                                            <div class="col s7 grey-text text-darken-4 right-align"><?php echo "Rp ".number_format($data['harga']*0.5 + $data['harga'],2,',','.') ?></div>
                                                        </div>
                                                    </li>

                                                </ul>


                                                <div class="options">
                                                    <div class="cart-button button-group">
                                                        <!-- Manufacturer Starts -->
                                                        <form action="<?php echo base_url("index.php/transaksi/checkout")?>" method="POST">
                                                            <ul class="list-unstyled manufacturer">
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

                                                                <input name="idrumah" value="<?php echo $data['idrumah'] ?>" type="text" hidden>
                                                                <input name="penerima"  value="<?php echo $_SESSION['username'] ?>" type="text" hidden>
                                                                <input name="cicilan"  value="<?php echo (($data['harga']*0.5 + $data['harga']) / $data['total_cicilan']) ?>" type="text" hidden>
                                                                <input name="total"  value="<?php echo $data['harga']*0.5 + $data['harga'] ?>" type="text" hidden>

                                                                <p>
                                                                    <input type="checkbox" name="syarat" class="filled-in" id="filled-in-box" required>
                                                                    <label for="filled-in-box">Saya Menyetujui syarat dan ketentuan, dan akan meneruskan transaksi ini ke dalam transaksi menunggu untuk diverivikasi </label>
                                                                </p>
                                                                <button type="submit" type="button" class="btn btn-cart">
                                                                    Ya, Ajukan
                                                                </button>
                                                                <!-- Tabs Starts -->
                                                                <!-- Tabs Ends -->
                                                            </ul>
                                                        </form>
                                                        <!-- Manufacturer Ends -->
                                                    </div>
                                                </div>
                                                <!-- Available Options Ends -->
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


