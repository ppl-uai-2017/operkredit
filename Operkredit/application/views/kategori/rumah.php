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

                        <div id="profile-page-content" class="row">
                            <!-- profile-page-sidebar-->

                            <?php
                            foreach ($rumah as $data => $rumah) {
                            ?>
                            <div id="profile-page-sidebar" class="col s12 m3">
                                <!-- Profile About Details  -->

                                <ul id="profile-page-about-details" class="collection z-depth-1">
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s7 grey-text text-darken-4 right-align"><img src="<?php echo base_url("./rumah/".$rumah -> foto2)?>" alt="product"
                                                                                                         class="img-responsive img-center-sm" width="250"></div>
                                        </div>
                                        <button onclick="location.href='<?php echo base_url("index.php/category/detail/".$rumah -> idrumah)?>';" type="button" class="btn btn-cart">
                                            Lihat
                                        </button>
                                    </li>

                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5 grey-text darken-1">Harga</div>
                                            <div class="col s7 grey-text text-darken-4 right-align"><?php echo "Rp.".number_format($rumah -> harga,2,',','.') ?></div>
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5 grey-text darken-1">Lokasi</div>
                                            <div class="col s7 grey-text text-darken-4 right-align"><?php echo  $rumah -> kota ?></div>
                                        </div>
                                    </li>

                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5 grey-text darken-1">Cicilan Ke</div>
                                            <div class="col s7 grey-text text-darken-4 right-align"><?php echo  $rumah -> kota ?></div>
                                        </div>
                                    </li>

                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5 grey-text darken-1">Total Cicilan</div>
                                            <div class="col s7 grey-text text-darken-4 right-align"><?php echo  $rumah -> total_cicilan." Bulan" ?></div>
                                        </div>
                                    </li>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s5 grey-text darken-1">Cicilan</div>
                                            <div class="col s7 grey-text text-darken-4 right-align"><?php echo "Rp.".number_format($rumah -> cicilan_perbulan,2,',','.')." /bulan" ?></div>
                                        </div>
                                    </li>
                                </ul>

                                <!--/ Profile About Details  -->

                            </div>
                                <?php
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


