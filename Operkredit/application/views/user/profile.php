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
                    <div id="profile-page-header" class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="<?php echo base_url("./images/user-profile-bg.jpg")?>" alt="user background">
                        </div>
                        <figure class="card-profile-image">
                            <img src="<?php echo base_url("./akun/".$data['foto']) ?>" alt="profile image" class="z-depth-2 responsive-img activator">
                        </figure>
                        <div class="card-content">
                            <div class="row">
                                <div class="col s3 offset-s2">
                                    <h4 class="card-title grey-text text-darken-4"><?php echo $data['nama_lengkap'] ?></h4>
                                    <p class="medium-small grey-text">Newbie</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!--/ profile-page-header -->

                    <!-- profile-page-content -->
                    <div id="profile-page-content" class="row">
                        <!-- profile-page-sidebar-->
                        <div id="profile-page-sidebar" class="col s12 m4">
                            <!-- Profile About  -->
                            <div class="card light-blue">
                                <div class="card-content white-text">
                                    <span class="card-title">Profile Saya</span>
                                </div>
                            </div>
                            <!-- Profile About  -->

                            <!-- Profile About Details  -->
                            <ul id="profile-page-about-details" class="collection z-depth-1">
                                <li class="collection-item">
                                    <div class="row">
                                        <div class="col s5 grey-text darken-1">Email</div>
                                        <div class="col s7 grey-text text-darken-4 right-align"><?php echo $data['email'] ?></div>
                                    </div>
                                </li>
                                <li class="collection-item">
                                    <div class="row">
                                        <div class="col s5 grey-text darken-1">Tempat lahir</div>
                                        <div class="col s7 grey-text text-darken-4 right-align"><?php echo $data['tempat_lahir'] ?></div>
                                    </div>
                                </li>
                                <li class="collection-item">
                                    <div class="row">
                                        <div class="col s5 grey-text darken-1">Tanggal Lahir</div>
                                        <div class="col s7 grey-text text-darken-4 right-align"><?php echo $data['tanggal_lahir'] ?></div>
                                    </div>
                                </li>
                                <li class="collection-item">
                                    <div class="row">
                                        <div class="col s5 grey-text darken-1">Jenis Kelamin</div>
                                        <div class="col s7 grey-text text-darken-4 right-align"><?php echo $data['jenis_kelamin'] ?></div>
                                    </div>
                                </li>
                                <li class="collection-item">
                                    <div class="row">
                                        <div class="col s5 grey-text darken-1">Nomor HP</div>
                                        <div class="col s7 grey-text text-darken-4 right-align"><?php echo $data['no_hp'] ?></div>
                                    </div>
                                </li>
                                <li class="collection-item">
                                    <div class="row">
                                        <div class="col s5 grey-text darken-1">Status Pernikahan</div>
                                        <div class="col s7 grey-text text-darken-4 right-align"><?php echo $data['status_pernikahan'] ?></div>
                                    </div>
                                </li>
                                <li class="collection-item">
                                    <div class="row">
                                        <div class="col s5 grey-text darken-1">Nomor KTP</div>
                                        <div class="col s7 grey-text text-darken-4 right-align"><?php echo $data['no_ktp'] ?></div>
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
                                        <div class="col s5 grey-text darken-1">Kode Pos</div>
                                        <div class="col s7 grey-text text-darken-4 right-align"><?php echo $data['kode_pos'] ?></div>
                                    </div>
                                </li>

                                <li class="collection-item">
                                    <div class="row">
                                        <div class="col s5 grey-text darken-1">Status Verifikasi Akun</div>
                                        <div class="col s7 grey-text text-darken-4 right-align"><?php echo $data['verifikasi'] ?></div>
                                    </div>
                                </li>

                                <li class="collection-item">
                                    <div class="row">
                                        <div class="col s5 grey-text darken-1">Catatan</div>
                                        <div class="col s7 grey-text text-darken-4 right-align"><?php echo $data['catatan'] ?></div>
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
                                                            <td>Alamat</td>
                                                            <td><?php echo $data['alamat'] ?></td>
                                                        </tr>

                                                        <tr>
                                                            <td>File KTP</td>
                                                            <td><a href="<?php echo base_url("./akun/".$data['file_ktp'])?>"> <img src="<?php echo base_url("./akun/".$data['file_ktp'])?>" width="100"></a> </td>
                                                        </tr>

                                                        <tr>
                                                            <td>Pekerjaan</td>
                                                            <td><?php echo $data['pekerjaan'] ?></td>
                                                        </tr>

                                                        <tr>

                                                            <td>Gaji</td>
                                                            <td>
                                                                <?php
                                                                if($data['gaji'] == null)
                                                                {
                                                                    echo "- / Bulan";
                                                                }
                                                                else
                                                                {
                                                                    echo "Rp ".number_format($data['gaji'],2,',','.')." / Bulan";
                                                                }
                                                                ?>;
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


