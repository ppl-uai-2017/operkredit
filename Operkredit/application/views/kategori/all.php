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
                <div class="row">
                    <a href="<?php echo base_url("")?>">Kembali</a>
                    <div class="col s12 m12 l12">
                        <h5 class="breadcrumbs-title">Produk</h5>
                        <ol class="breadcrumb">
                            <li><a href="<?php echo base_url("")?>">Kategori</a></li>
                            <li class="active">Semua Motor</li>
                        </ol>
                    </div>
                </div>
                <hr>
                <form action="<?php echo base_url("index.php/category/all")?>" method="POST">
                    <div class="row">
                        <div class="input-field col s3">
                            <input type="text" name="kota" class="form-control" placeholder="Berdasarkan Kota" >
                            <label for="first_name">Kota</label>
                        </div>
                        <br>
                        <button type="submit"  name="submit" class="btn waves-effect waves-light  deep-purple">Terapkan</button>
                    </div>
                </form>

                <hr>
                <div id="profile-page" class="section">
                    <!-- profile-page-header -->

                    <div id="profile-page-content" class="row">
                        <!-- profile-page-sidebar-->

                        <?php
                        if($motor != null) {
                            foreach ($motor as $data => $motor) {
                                ?>
                                <div id="profile-page-sidebar" class="col s12 m3">
                                    <!-- Profile About Details  -->

                                    <ul id="profile-page-about-details" class="collection z-depth-1">
                                        <li class="collection-item">
                                            <div class="row">
                                                <div class="col s7 grey-text text-darken-4 right-align"><img
                                                            src="<?php echo base_url("./motor/" . $motor->foto1) ?>"
                                                            alt="product"
                                                            class="img-responsive img-center-sm" width="250"></div>
                                            </div>
                                            <button onclick="location.href='<?php echo base_url("index.php/category/detail/" . $motor->no_stnkb) ?>';"
                                                    type="button" class="btn btn-cart">
                                                Lihat
                                            </button>
                                        </li>

                                        <li class="collection-item">
                                            <div class="row">
                                                <div class="col s5 grey-text darken-1">Harga</div>
                                                <div class="col s7 grey-text text-darken-4 right-align"><?php echo "Rp." . number_format($motor->harga_awal, 2, ',', '.') ?></div>
                                            </div>
                                        </li>
                                        <li class="collection-item">
                                            <div class="row">
                                                <div class="col s5 grey-text darken-1">Lokasi</div>
                                                <div class="col s7 grey-text text-darken-4 right-align"><?php echo $motor->kota ?></div>
                                            </div>
                                        </li>

                                        <li class="collection-item">
                                            <div class="row">
                                                <div class="col s5 grey-text darken-1">Cicilan Ke</div>
                                                <div class="col s7 grey-text text-darken-4 right-align"><?php echo $motor->cicilan_ke ?></div>
                                            </div>
                                        </li>

                                        <li class="collection-item">
                                            <div class="row">
                                                <div class="col s5 grey-text darken-1">Total Cicilan</div>
                                                <div class="col s7 grey-text text-darken-4 right-align"><?php echo $motor->total_cicilan . " Bulan" ?></div>
                                            </div>
                                        </li>
                                        <li class="collection-item">
                                            <div class="row">
                                                <div class="col s5 grey-text darken-1">Cicilan</div>
                                                <div class="col s7 grey-text text-darken-4 right-align"><?php echo "Rp." . number_format($motor->cicilan_perbulan, 2, ',', '.') . " /bulan" ?></div>
                                            </div>
                                        </li>
                                    </ul>

                                    <!--/ Profile About Details  -->

                                </div>
                                <?php
                            }
                        }
                        else
                        {
                            echo "<h6 align='center'>Produk tidak ditemukan, cilahkan cari kembali dikota lain</h6>";
                        }
                        ?>
                        <!-- profile-page-sidebar-->

                    </div>

                </div>
                <div class="row">
                    <!-- Pagination Starts -->
                    <div class="col-sm-6 pagination-block">
                        <center>
                            <?php
                            echo $this->pagination->create_links();
                            ?>
                        </center>
                    </div>
                    <!-- Pagination Ends -->
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

<!-- ================================================
Scripts
================================================ -->


<?php
$this->load->view("./script.php");
?>
</body>

</html>